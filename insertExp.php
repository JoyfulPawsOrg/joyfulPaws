

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
        // Inserting the customer experience into the database
        $insert = "INSERT INTO CustomerExperiences(firstName, middleName, lastName, rating, feedback) 
        VALUES('$F_NAME', '$M_NAME', '$L_NAME', '$RATING_NUM', '$FEEDBACK')";
        mysqli_query($conn, $insert);
        header('location: customerExperiences.php');
    } else {
        // The user does NOT exist in the users table
        // Display an error message or handle the situation as desired
        echo "User does not exist. Please check the entered names.";
    }
}
?>

<!-- with Name & Exp validation -->
<?php
// include('myConfig.php');

// if(isset($_POST['submitCustomerExpButton'])){
//     $F_NAME = $_POST['firstName'];
//     $M_NAME = $_POST['middleName'];
//     $L_NAME = $_POST['lastName'];
//     $RATING_NUM = $_POST['rating'];
//     $FEEDBACK = $_POST['feedback'];

//     // Check if the user exists in the users table
//     $check_user_query = "SELECT * FROM users WHERE firstName = '$F_NAME' AND middleName = '$M_NAME' AND lastName = '$L_NAME'";
//     $result = mysqli_query($conn, $check_user_query);

//     if(mysqli_num_rows($result) > 0) {
//         // The user exists in the users table

//         // Check if the user has already submitted an experience
//         $user_row = mysqli_fetch_assoc($result);
//         $user_id = $user_row['userID'];
//         $check_exp_query = "SELECT * FROM CustomerExperiences WHERE userID = '$user_id'";
//         $exp_result = mysqli_query($conn, $check_exp_query);

//         if(mysqli_num_rows($exp_result) > 0) {
//             // The user has already submitted an experience
//             echo "You have already submitted an experience.";
//         } else {
//             // Insert the customer experience into the database
//             $insert = "INSERT INTO CustomerExperiences(firstName, middleName, lastName, rating, feedback, userID) 
//             VALUES('$F_NAME', '$M_NAME', '$L_NAME', '$RATING_NUM', '$FEEDBACK', '$user_id')";
//             mysqli_query($conn, $insert);
//             header('location: customerExperiences.php');
//         }
//     } else {
//         // The user does NOT exist in the users table
//         echo "User does not exist. Please check the entered names.";
//     }
// }
?>


