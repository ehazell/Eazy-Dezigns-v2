<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];
$to = "ezra.hazell@eazydezigns.com";
$subject = "New Comment for Eazy Dezigns";

$message = "Hello!

Your contact form has been submitted by:

Name: $name
E-mail: $email
URL: $website
Phone: $phone

Comments:
$comment

End of message";


mail($to, $subject, $message, "From: " . $name);

/* Redirect visitor to the thank you page */
header('Location: thanks.html' );
exit();

 ?>