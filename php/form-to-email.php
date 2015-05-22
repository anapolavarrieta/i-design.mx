<?php
	if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
	$name= $_POST["client"];
	$visitor_email= $_POST["email"];
	$phone=$_POST["phone"];
	$message=$_POST["message"];

	$email_from="isa@idesign.com";
	$email_subject="New Form Submission";
	$email_body="Recibiste un nuevo mensaje de $name.\n". "Su correo es: $visitor_email.\n". "Su teléfono: $phone.\n". "Su mensaje: $message";

	$to="anapolavarrieta@gmail.com";
	$headers= "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	mail($to,$email_subject,$email_body,$headers);
	header('Location: gracias.php');

 
 ?>