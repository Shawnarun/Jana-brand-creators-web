<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $formcontent=" From: $name \n \n Message: $message";
    $recipient = "brandcreators2@gmail.com";
    $subject = "JBC Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";
?>
