
<?php
$name= $_POST['name'];
$visitors_email= $_POST['email'];
$message= $_POST['message'];

$email_from = 'andreeakleo@yahoo.com';
$email_subject = "Informatii";
$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "User Message: $message.\n";

$to= "andreeakleo@yahoo.com";
$headers = "From:  $email_from\r\n";
$headers .="Reply-To: $visitor_email\r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location:contact.html");


?>