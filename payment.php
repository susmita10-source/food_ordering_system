<?php
require 'vendor/autoload.php'; // Load Stripe library

\Stripe\Stripe::setApiKey('sk_test_51R7tfPRDOTK2CFjKojE914C4BQPByQaPazBgofsivAkhxhPYZV8MBuht7MmdWUd3DMrFuNwQSKeA1p3cXvcQCWlR00BC6KWLIX'); // Replace with your Stripe secret key

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $token = $_POST['stripeToken']; // Get the token from the checkout form
        $amount = 18000; // Amount in cents (e.g., $180.00)
        
        $charge = \Stripe\Charge::create([
            'amount' => $amount,
            'currency' => 'inr',
            'description' => 'Food Order Payment',
            'source' => $token,
        ]);

        // If payment is successful, redirect to a success page
        header("Location: success.php");
        exit();

    } catch (\Stripe\Exception\CardException $e) {
        echo "Error: " . $e->getError()->message;
    }
}
?>
