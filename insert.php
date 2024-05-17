<?php


include('config.php');


require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start(); 

if (isset($_POST['signup'])) {
    $FIRSTNAME = $_POST['firstName'];
    $MIDDLENAME = $_POST['middleName'];
    $LASTNAME = $_POST['lastName'];
    $EMAIL = $_POST['email'];
    $GENDER = $_POST['gender'];
    $AGE = $_POST['age'];
    $PASSWORD = $_POST['password'];

    $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $EMAIL);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        header('Location: SignUp.php?emailExists=true');
        exit();
    } else {
 
        $insert_stmt = $con->prepare("INSERT INTO users (firstName, middleName, lastName, email, gender, age, password) 
                                      VALUES (?, ?, ?, ?, ?, ?, ?)");
        $insert_stmt->bind_param("sssssis", $FIRSTNAME, $MIDDLENAME, $LASTNAME, $EMAIL, $GENDER, $AGE, $PASSWORD);

        if ($insert_stmt->execute()) {
            $_SESSION['userID'] = $insert_stmt->insert_id;
            $_SESSION['email'] = $EMAIL;


            $template_path = 'SignupConf‏.html';
            $email_body = file_get_contents($template_path);
            $mail = new PHPMailer(true);
            try {
              
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; 
                $mail->SMTPAuth = true; 
                $mail->Username = 'msms.1424h@gmail.com'; 
                $mail->Password = 'puiccdtuzgnjyusv';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port = 465; 

               
                $mail->setFrom('msms.1424h@gmail.com', 'JOYFUL PAWS'); 
                $mail->addAddress($EMAIL); 
                $mail->Subject = 'Registration Confirmation';
    

                $mail->isHTML(true); 
                $mail->Body = $email_body;
                
                $mail->send(); 


            } catch (Exception $e) {
                echo "Error: could not send email. Mailer Error: {$mail->ErrorInfo}";
            }

            header('Location: index.php');
            exit();
        } else {
            echo "Error: " . $insert_stmt->error; 
        }
    }
}


if (isset($_POST['Login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $template_path = 'LoginConf.html';
    $email_body = file_get_contents($template_path);
    $mail = new PHPMailer(true);
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if ($password === $user['password']) { 
            $_SESSION['userID'] = $user['userID'];
            $_SESSION['email'] = $user['email']; 
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; 
            $mail->SMTPAuth = true; 
            $mail->Username = 'msms.1424h@gmail.com'; 
            $mail->Password = 'puiccdtuzgnjyusv';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465; 

           
            $mail->setFrom('msms.1424h@gmail.com', 'JOYFUL PAWS'); 
            $mail->addAddress($email); 
            $mail->Subject = 'Login Confirmation';


            $mail->isHTML(true); 
            $mail->Body = $email_body;
            
            $mail->send(); 
            header('Location: index.php'); 
            exit();
        } else {
            header('Location: Login.php?error=incorrect_password'); 
            exit();
        }
    } else {
        header('Location: Login.php?error=email_not_found'); 
        exit();
    }
}


if (isset($_POST['checkoutButton'])) {
  
    function generateOrderNumber($con) {
        echo "Generating unique order number<br>";
    
        do {
            $orderNumber = bin2hex(random_bytes(5));
            $randomDigits = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
            $orderNumber .= $randomDigits;
            $orderNumber = 'ORD-' . $orderNumber;
            echo "Generated order number: $orderNumber<br>";
            $stmt = $con->prepare("SELECT COUNT(*) FROM shopservices WHERE orderNumber = ?");
            if ($stmt === false) {
                echo "Failed to prepare statement<br>";
                die($con->error);
            }
            $stmt->bind_param("s", $orderNumber);
            $stmt->execute();
            $stmt->bind_result($count);
            $stmt->fetch();
            $stmt->close();
    
            echo "Order number exists in database: $count<br>";
        } while ($count > 0);
    
        return $orderNumber;
    }
    
 
    $totalPrice = $_POST['totalPrice'];
    $orderNumber =  generateOrderNumber($con);
    $userID = $_SESSION['userID'];


    $email= $_SESSION['email'];
    $template_path = 'SuppliesShopConf.html';
    $email_body = file_get_contents($template_path);
    $mail = new PHPMailer(true);
    
    if ($totalPrice != 0) {
        $stmt = $con->prepare("INSERT INTO shopservices (userID, orderNumber, totalPrice) VALUES (?, ?, ?)");
        $stmt->bind_param("isd", $userID, $orderNumber, $totalPrice);
        
        if ($stmt->execute() === TRUE) {

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; 
            $mail->SMTPAuth = true; 
            $mail->Username = 'msms.1424h@gmail.com'; 
            $mail->Password = 'puiccdtuzgnjyusv';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465; 

           
            $mail->setFrom('msms.1424h@gmail.com', 'JOYFUL PAWS'); 
            $mail->addAddress($email); 
            $mail->Subject = 'Supplies Shop Confirmation';

            $email_body = str_replace("{ORDER_NUMBER}", $orderNumber, $email_body);
            $email_body = str_replace("{TOTAL_PRICE}", $totalPrice, $email_body);

            $mail->isHTML(true); 
            $mail->Body = $email_body;
            
            $mail->send(); 



            header('Location: payment.php'); 
            
        } 
        
        $stmt->close();
    } else {
        header('Location: SuppliesShop.php'); 
    }
}
?>