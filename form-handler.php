<?php
$name =$_POST['name'];
$Visitor_email =$_POST['email'];
$Subject =$_POST['subject'];
$Message =$_POST['message'];

$email_from='https://rahulvyadav.github.io/';
$email_subject='For New Submission Form';
$email_body='User Name: $name.\n'.
            'User email: $Visitor_email.\n'.
            'User Subject: $Subject.\n'.
            'User Message: $Message.\n';


$to ='rahulvyadav12345@gmail.com';

$header ='From= $email_from \r\n';
$header = 'Reply-to : Visitor_email \r\n';

mail($to,$email_subject,$email_body,$header);

header('Location :contact.html');
?>