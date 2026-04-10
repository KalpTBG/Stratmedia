<?php
ob_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



// If downloaded manually, use these 3 lines instead:
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email    = htmlspecialchars(trim($_POST['email'] ?? ''));
    $business = htmlspecialchars(trim($_POST['business'] ?? ''));
    $services = htmlspecialchars(trim($_POST['services'] ?? ''));

    if (empty($name) || empty($email) || empty($business) || empty($services)) {
        ob_end_clean();
        echo "empty_fields";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        ob_end_clean();
        echo "invalid_email";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // ── SMTP Configuration ──────────────────────────────────
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'neversettle0451@gmail.com';  
        $mail->Password   = 'xctd otev kfta jjph';         
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // ── Email Setup ─────────────────────────────────────────
        $mail->setFrom('neversettle0451@gmail.com', 'Never Settle');
        $mail->addAddress('21010101165@darshan.ac.in');
        $mail->addReplyTo($email, $name);

        // ── Content ─────────────────────────────────────────────
        $mail->isHTML(true);
        $mail->Subject = "New Inquiry from $name";
        $mail->Body = "
    <h3>New Inquiry Received</h3>
    <hr>

    <p><strong>Name:</strong> {$name}</p>
    <p><strong>Email:</strong> {$email}</p>
    <p><strong>Business Type:</strong> {$business}</p>
    <p><strong>Interested In:</strong> {$services}</p>
";
        $mail->AltBody = "Name: $name\nEmail: $email\nBusiness: $business\nInterested In: $services";

        $mail->send();
        ob_end_clean();
        echo "success";

    } catch (Exception $e) {
        ob_end_clean();
       
        echo "error";
    }

} else {
    ob_end_clean();
    echo "invalid_request";
}
?>