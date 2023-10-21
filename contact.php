<?php
echo "Reached contact.php"; // Add this line to check if contact.php is being accessed

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate the data (You should add more validation)

    // Compose the email
    $to = 'mohdnoman2751@gmail.com';
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send the email
    mail($to, $subject, $body);
}
?>
