<?php

include('config.php');
include('sms.php');
session_start(); // Start the session

if(isset($_POST['submit'])){

    $PHONE = $_POST['phone'];
    $INPUTADDRESS = $_POST['iAddress'];
    $INPUTCITY = $_POST['City'];
    $INPUTSTATE = $_POST['inputState'];
    $PETTYPE = $_POST['pettype'];
    $PETSTATUS = $_POST['petstatus'];
    $DATEE = $_POST['date'];
    $TIMEE = $_POST['time'];
    $PHOTO = $_FILES['photo'];
    $IMAGE_LOCATION = $_FILES['photo']['tmp_name'];
    $IMAGE_NAME = $_FILES['photo']['name'];
    $IMAGE_UP = "images/".$IMAGE_NAME;
    
    // Prepare SQL statement
    $stmt = $con->prepare("INSERT INTO emergencycarerecords (phone_number, pet_type, pet_status, photo_path, address, city, state, event_date, event_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        // Check for SQL error
        die('Prepare failed: ' . htmlspecialchars($con->error));
    }

    // Bind parameters
    $stmt->bind_param("issssssss",  $PHONE,  $PETTYPE,   $PETSTATUS,  $IMAGE_UP,  $INPUTADDRESS,  $INPUTCITY ,    $INPUTSTATE,  $DATEE,  $TIMEE);

    // Execute the statement
    if ($stmt->execute()) {
        if(move_uploaded_file($IMAGE_LOCATION, $IMAGE_UP)){
            echo "<script>alert('Request has been received successfully! We will deal with it as soon as possible. Thank you for your kindness!!')</script>";
            require_once 'sms.php';
        } else{
            echo "<script>alert('File upload failed.')</script>";
        }
    } else {
        echo "<script>alert('Database insert failed: " . htmlspecialchars($stmt->error) . "')</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
    echo "<script>window.location.href = 'Emergency.php';</script>";
    exit;

}

?>
