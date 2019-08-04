<?php
 
// Data coming from the HTTP POST request
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
 
$email_from = '88design.online';
$email_subject = 'Form Submission'


$email_body = "";
$email_body = $email_body . "Name: " . $name . "<br>";
$email_body = $email_body . "Email: " . $email . "<br>";
$email_body = $email_body . "Message: " . $message;

$to = "quyen.bui26@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";




// Lets send the mail
if(mail($to,$email_subject,$email_body,$headers))
	
    echo "Sent";
else
    echo "Failed";
?>