<?php
$username = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$petID = $_POST['PetID'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'joyfulpawsDB');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO adoptionapplication (userName, email, phone, PetID) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $username, $email, $phone, $petID);
    $stmt->execute();
    echo "Registration Successful.";

    $stmt->close();
    $conn->close();
    header('Location: error.html');

   exit;
}
?>