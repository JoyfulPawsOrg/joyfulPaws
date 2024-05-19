<?php
    // Database connection information

    // Create connection
    $conn = mysqli_connect('localhost','root','','joyfulpawsdb');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
