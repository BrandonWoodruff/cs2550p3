<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Send the email
    $to = "bmw132000@gmail.com";
    $headers = "From: $email";
    mail($to, $subject, $message, $headers);

    // Redirect to a thank you page
    header("Location: thank-you.html");
}
?>
