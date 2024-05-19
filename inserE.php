<?php

include('config.php');
include('sms.php');
session_start(); // Start the session

if(isset($_POST['submit'])){

    $userID = $_SESSION['user_id'];

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
     $stmt = $con->prepare("INSERT INTO emergencycarerecords (userID, phone_number, pet_type, pet_status, photo_path, address, city, state, event_date, event_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("isssssssss", $userID,  $PHONE,  $PETTYPE,   $PETSTATUS,  $IMAGE_UP,  $INPUTADDRESS,  $INPUTCITY ,    $INPUTSTATE,  $DATEE,  $TIMEE);

     // Execute the statement
     $stmt->execute();

     // Close the statement and connection
     $stmt->close();
     $con->close();


    if(move_uploaded_file($IMAGE_LOCATION,'images/'.$IMAGE_NAME)){
        echo "<script>alert('Request has been received successfully! We will deal with it as soon as possible. thank you for your kindness!!')</script>";
        require_once 'sms.php';

    } else{
        echo "<script>alert('not done')</script>";
    }
    echo "<script>window.location.href = 'Emergency.php';</script>";
    exit;

}

?>
