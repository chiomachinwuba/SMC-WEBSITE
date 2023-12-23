<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "sanctamariacollege@gmail.com"; // Replace with your email address
    $from = $_POST["email"];
    $message = $_POST["message"];
    $subject = "New Message from Website";

    $headers = "From: $from\r\nReply-to: $from";
    
    mail($to, $subject, $message, $headers);
    
    echo "Email sent successfully!";
} else {
    echo "Error: Method not allowed";
}
?>