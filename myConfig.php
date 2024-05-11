<?php
    // Database connection information
    $servername = "localhost"; // Server name
    $username = "root"; // Database username
    $password = ""; // Database password
    $dbname = "joyfulPawsDB"; // Database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>