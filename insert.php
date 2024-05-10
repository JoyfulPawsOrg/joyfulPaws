[<?php


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

            header('Location: about.php');
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

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if ($password === $user['password']) { 
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



?>
