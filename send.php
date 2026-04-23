<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $business = htmlspecialchars($_POST['business']);
    $services = htmlspecialchars($_POST['services']);

    // Validate
    if (!empty($name) && !empty($email) && !empty($business) && !empty($services)) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $to = "thakurmilan42@gmail.com"; // 🔴 change this
            $subject = "New Inquiry from Contact Form";

            $body = "New Inquiry Details:\n\n";
            $body .= "Name: $name\n";
            $body .= "Email: $email\n";
            $body .= "Business Type: $business\n";
            $body .= "Interested In: $services\n";

            $headers = "From: $email";

            if (mail($to, $subject, $body, $headers)) {
                echo "success";
            } else {
                echo "error";
            }

        } else {
            echo "invalid_email";
        }

    } else {
        echo "empty_fields";
    }
}
?>