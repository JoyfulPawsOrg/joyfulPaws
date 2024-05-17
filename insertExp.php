

<!-- without validation -->
<?php
    // include('myConfig.php');

    // if(isset($_POST['submitCustomerExpButton'])){
    //     $F_NAME = $_POST['firstName'];
    //     $M_NAME = $_POST['middleName'];
    //     $L_NAME = $_POST['lastName'];
    //     $RATING_NUM = $_POST['rating'];
    //     $FEEDBACK = $_POST['feedback'];

    //     $insert = "INSERT INTO CustomerExperiences(firstName, middleName, lastName, rating, feedback) 
    //     VALUES('$F_NAME', '$M_NAME', '$L_NAME', '$RATING_NUM', '$FEEDBACK')";
    //     mysqli_query($conn, $insert);
    //     header('location: customerExperiences.php');
    // }
?>



<!-- with Name validation -->
<?php
// include('myConfig.php');

// if(isset($_POST['submitCustomerExpButton'])){
//     $F_NAME = $_POST['firstName'];
//     $M_NAME = $_POST['middleName'];
//     $L_NAME = $_POST['lastName'];
//     $RATING_NUM = $_POST['rating'];
//     $FEEDBACK = $_POST['feedback'];

//     // Prepare SQL query to check if the entered first, middle, and last names exist in the users table
//     $check_user_query = "SELECT * FROM users WHERE firstName = '$F_NAME' AND middleName = '$M_NAME' AND lastName = '$L_NAME'";
//     $result = mysqli_query($conn, $check_user_query);

//     if(mysqli_num_rows($result) > 0) {
//         // The user exists in the users table
//         // Inserting the customer experience into the database
//         $insert = "INSERT INTO CustomerExperiences(firstName, middleName, lastName, rating, feedback) 
//         VALUES('$F_NAME', '$M_NAME', '$L_NAME', '$RATING_NUM', '$FEEDBACK')";
//         mysqli_query($conn, $insert);
//         // header('location: customerExperiences.php');

//         if(mysqli_query($conn, $insert)){
//             // include('myConfig.php');
//             // echo '<div class="alert alert-success d-flex align-items-center" role="alert">';
//             // echo '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>';
//             // echo '<div>';
//             // echo 'An example success alert with an icon';
//             // echo '</div>';
//             // echo '</div>';
//             echo "<script>alert('stored successfully')</script>";


//         } else {
//             echo "<script>alert('stored NOT successfully')</script>";
//         }
//         header('location: customerExperiences.php');
        
//     } else {
//         // The user does NOT exist in the users table
//         // Display an error message or handle the situation as desired
//         echo "User does not exist. Please check the entered names.";
//     }
// }
?>





<!-- with Name & custExp validation -->
<?php
// include('myConfig.php');

// if(isset($_POST['submitCustomerExpButton'])){
//     $F_NAME = $_POST['firstName'];
//     $M_NAME = $_POST['middleName'];
//     $L_NAME = $_POST['lastName'];
//     $RATING_NUM = $_POST['rating'];
//     $FEEDBACK = $_POST['feedback'];

//     // Prepare SQL query to check if the entered first, middle, and last names exist in the users table
//     $check_user_query = "SELECT * FROM users WHERE firstName = '$F_NAME' AND middleName = '$M_NAME' AND lastName = '$L_NAME'";
//     $result = mysqli_query($conn, $check_user_query);

//     if(mysqli_num_rows($result) > 0) {
//         // The user exists in the users table
        
//         $check_userExp_query = "SELECT * FROM CustomerExperiences WHERE firstName = '$F_NAME' AND middleName = '$M_NAME' AND lastName = '$L_NAME'";
//         $resultCustExp = mysqli_query($conn, $check_userExp_query);

//         if(mysqli_num_rows($resultCustExp) > 0) {
//             echo "YOu allready have EX";
            
//         } else {
//             $insert = "INSERT INTO CustomerExperiences(firstName, middleName, lastName, rating, feedback) 
//             VALUES('$F_NAME', '$M_NAME', '$L_NAME', '$RATING_NUM', '$FEEDBACK')";
//             mysqli_query($conn, $insert);
//             header('location: customerExperiences.php');
//         }

//     } else {
//         // The user does NOT exist in the users table
//         // Display an error message or handle the situation as desired
//         echo "User does not exist. Please check the entered names.";
//     }
// }
?>

<?php
session_start();
include('myConfig.php');

if(isset($_POST['submitCustomerExpButton'])){
    $F_NAME = $_POST['firstName'];
    $M_NAME = $_POST['middleName'];
    $L_NAME = $_POST['lastName'];
    $RATING_NUM = $_POST['rating'];
    $FEEDBACK = $_POST['feedback'];

    // Prepare SQL query to check if the entered first, middle, and last names exist in the users table
    $check_user_query = "SELECT * FROM users WHERE firstName = '$F_NAME' AND middleName = '$M_NAME' AND lastName = '$L_NAME'";
    $result = mysqli_query($conn, $check_user_query);

    if(mysqli_num_rows($result) > 0) {
        // The user exists in the users table
        
        $check_userExp_query = "SELECT * FROM CustomerExperiences WHERE firstName = '$F_NAME' AND middleName = '$M_NAME' AND lastName = '$L_NAME'";
        $resultCustExp = mysqli_query($conn, $check_userExp_query);

        if(mysqli_num_rows($resultCustExp) > 0) {
            // The user already has an experience submitted
            $_SESSION['message'] = "You already have an experience submitted.";
            $_SESSION['message_type'] = "warning";
        } else {
            // Insert the new experience
            $insert = "INSERT INTO CustomerExperiences(firstName, middleName, lastName, rating, feedback) 
            VALUES('$F_NAME', '$M_NAME', '$L_NAME', '$RATING_NUM', '$FEEDBACK')";
            if (mysqli_query($conn, $insert)) {
                $_SESSION['message'] = "Your feedback has been submitted successfully!";
                $_SESSION['message_type'] = "success";
            } else {
                $_SESSION['message'] = "Failed to submit your feedback.";
                $_SESSION['message_type'] = "danger";
            }
        }
    } else {
        // The user does NOT exist in the users table
        $_SESSION['message'] = "User does not exist. Please check the entered names.";
        $_SESSION['message_type'] = "danger";
    }
    header('location: customerExperiences.php');
    exit();
}
?>
