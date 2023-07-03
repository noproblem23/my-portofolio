<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Compose the email
    $to = "hundredup2023@gmail.com";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    $mail_sent = mail($to, $subject, $message, $headers);

    if ($mail_sent) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message. Please try again later.";
    }

    // Redirect back to the index.html page
    header("Location: index.html");
    exit;
}
?>
