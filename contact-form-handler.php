<?php
 
// Data coming from the HTTP POST request
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
 
$email_from = '88design.online';
$email_subject = "Form Submission";

$email_body = "User name: $name.\n".
				"User Email: $visitor_email.\n".
				"User Message: $message.\n";


$to = "quyen.bui26@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
// Lets send the mail
mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>