<?php
$name = $_POST['name'];
$visitor = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@mypassion.com';

$email_subject = 'New From Submission'

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n"
               "Subject: $subject.\n".
                "User Message: $message .\n".

$to = 'esmarikapudasaini@gmail.com'  

$header = "From: $email_from\r\n";

$header .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$header);

header("Location: contact.html");
?>