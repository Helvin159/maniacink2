<?php
session_start();


$name = $_POST['Name'];
$phone = $_POST['pNumber'];
$email = $_POST['email'];
$explanation = $_POST['explanation'];
$concept = $_POST['concept'];
$covid = $_POST['covid'];

$connection = mysqli_connect('localhost','helvin','dora0411','ManiacInk');

//$connection = mysqli_connect('localhost','helvin','dora0411','helvin');

$query = "insert into contacts(name, phone, email, explanation, concept, covid) values('$name', '$phone', '$email', '$explanation','$concept', '$covid');";

mysqli_query($connection,$query);
mysqli_close($connection);

$to = "Melii@ManiacInk.com, Helvin@HelvinRymer.com,Meliisart03@gmail.com
"; // this is your Email address
$from = $email; // this is the sender's Email address
$subject = "Form submission";
$subject2 = "Thank you!";
$message = "$firstname $lastname sent the following details:
Email: $email
Phone: $phone
Comments: $comment";

$message2 = "Thank you for your email. I'll be in touch as soon as possible."
."\n"."
Melii
ManiacInk.com
Melii@ManiacInk.com";

$headers = "From:" . $from;
$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers);
mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

header('location:home');
?>
