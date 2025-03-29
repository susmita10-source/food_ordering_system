<?php

//main connection file for both admin & front end
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "foodorder_db";  //database

define('PAYPAL_CLIENT_ID', 'AdGxDyKZqha_qBCHlnK0Gi_33zQ5c7Gy8EKyibabB-I2qy2CCKiqgPP_9c71cdW2TstFeVjIg8Z9BBQt');
define('PAYPAL_SECRET', 'ED092BOE1FF3E3E6abOKCQEg4qtu4THKOfVoGpRlp8v7P-Zpnkkf_7gx8vW1mhf1HK7oX4uD-1DkzK4M');
define('PAYPAL_MODE', 'sandbox'); // Change to 'live' when going live
$paypalUrl = "https://www.sandbox.paypal.com/cgi-bin/webscr"; // Sandbox



// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}
?>