<?php
// Check for empty fields
if(empty($_POST['Name'])  		||
   empty($_POST['Email']) 		||
   empty($_POST['Phone'])	||
   empty($_POST['City']) 		||
   empty($_POST['Message'])	||
   !filter_var($_POST['Email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Please fill up the form Properly, Maybe you have missed something!";
	return false;
   }
	
$name = $_POST['Name'];
$email_address = $_POST['Email'];
$phone = $_POST['Phone'];
$city = $_POST['City'];
$message = $_POST['Message'];

	
// Create the email and send the message
$to = 'tripkeys@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\n Phone: $phone \n\n City: $city \n\nMessage:\n$message";
$headers = "From: Info@commercial-gas-engineer.co.uk\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);

// echo "<h4>The details have been sent and a member of staff will be in touch shortly!</h4>";
// header("Location: index.html")	;
header("Location: thank-you.html");
return true;	

?>