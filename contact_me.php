<?php
// Check for empty fields
if(empty($_POST['Name'])  		||
   empty($_POST['Email']) 		||
   empty($_POST['Phone'])	||
   empty($_POST['City']) 		||
   empty($_POST['Message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['Name'];
$email_address = $_POST['Email'];
$phone = $_POST['Phone'];
$city = $_POST['City'];
$message = $_POST['Message'];

	
// Create the email and send the message
$to = 'gms.shahi@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\n Phone: $phone \n\n City: $city \n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>