<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $phoneNumber = $_POST["phoneNumber"];
    $fullName = $_POST["fullName"];
    $instagram = $_POST["instagram"];
    $paymentMethod = $_POST["paymentMethod"];
    
    // Create email message
    $to = "Pineapplepijah@gmail.com";
    $subject = "New order";
    $message = "Phone Number: " . $phoneNumber . "\n";
    $message .= "Full Name: " . $fullName . "\n";
    $message .= "Instagram: " . $instagram . "\n";
    $message .= "Payment Method: " . $paymentMethod . "\n";

    $headers = "From: your_email@example.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "Thank you! Your order has been submitted.";
    } else {
        // Email sending failed
        echo "Sorry, there was an error submitting your order. Please try again later.";
    }
} else {
    // Redirect back to the checkout page if accessed directly
    header("Location: checkout.html");
    exit;
}
?>
