<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullName = $_POST["fullName"];
    $address = $_POST["address"];
    $mobileNumber = $_POST["mobileNumber"];
    $quantity = $_POST["quantity"];

    // Calculate delivery charge (example calculation)
    // You would replace this with your actual delivery charge calculation logic
    $deliveryCharge = calculateDeliveryCharge($address, $quantity);

    // Compose email message
    $to = "bbiplobmorol@gmail.com"; // Your email address
    $subject = "New Order";
    $message = "Full Name: $fullName\n";
    $message .= "Address: $address\n";
    $message .= "Mobile Number: $mobileNumber\n";
    $message .= "Buy Quantity: $quantity\n";
    $message .= "Delivery Charge: $deliveryCharge\n";

    // Send email
    $headers = "From: bbiplobmorol@gmail.com"; // Your email address
    if (mail($to, $subject, $message, $headers)) {
        echo "Order submitted successfully. We will contact you shortly.";
    } else {
        echo "Failed to submit order. Please try again later.";
    }
}

// Function to calculate delivery charge (replace with your calculation logic)
function calculateDeliveryCharge($address, $quantity) {
    // Example calculation based on address and quantity
    // Replace this with your actual calculation logic
    // This is just a placeholder
    return $quantity * 150; // Charging $10 per item as delivery charge
}
?>
