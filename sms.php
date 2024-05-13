<?php

require 'twilio-php-main\src\Twilio\autoload.php';

use Twilio\Rest\Client;

// Your Account SID and Auth Token from console.twilio.com
$sid = "AC854ca4539966faf85f6aa5c893fe9eae";
$token = "70fe059f25b6a54496a0901cac0d1a77";
$twilioNumber = '+13253123353';

// Create Twilio client
$client = new Client($sid, $token);

// Function to send SMS
function sendSMS($to, $message) {
    global $client, $twilioNumber;
    try {
        $client->messages->create(
            $to,
            array(
                'from' => $twilioNumber,
                'body' => $message
            )
        );
        echo "SMS sent successfully to $to";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}


// Usage example
$phoneNumber = '+966551778264'; // Replace with user's phone number
$message = 'Your confirmation message here';
sendSMS($phoneNumber, $message); 

// Send an SMS using Twilio's REST API and PHP

/*
// Required if your environment does not handle autoloading
require 'twilio-php-main\twilio-php-main\src\Twilio\autoload.php';

// Your Account SID and Auth Token from console.twilio.com
$sid = "AC854ca4539966faf85f6aa5c893fe9eae";
$token = "70fe059f25b6a54496a0901cac0d1a77";
$client = new Twilio\Rest\Client($sid, $token);

// Use the Client to make requests to the Twilio REST API
$client->messages->create(
    // The number you'd like to send the message to
    '+966551778264',
    [
        // A Twilio phone number you purchased at https://console.twilio.com
        'from' => '+13253123353',
        // The body of the text message you'd like to send
        'body' => "Hey Mummy!!"
    ]
); */

echo "<script>alert('Confirmation massage')</script>";

?>

