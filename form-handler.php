<?php
$name = $_POST['name'];
$visitor_maiL = $_POST['visitor_maiL'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@wesite.com';        //domain name
$email_subject = 'New Form';
$email_body = "User Name: $name.\n".
            "User Email: $visitor_maiL.\n".
	        "Subject: $subject.\n".
	        "Message: $message.\n";

$to = 'ahona.omi0818@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_maiL\r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>