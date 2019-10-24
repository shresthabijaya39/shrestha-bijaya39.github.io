<?php
	if(isset($_POST['submit'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$phone-no=$_POST['phone-no'];
		$email=$_POST['email'];
		$country=$_POST['country'];
		$subject=$_POST['subject'];
		

		$to='shresthabijaya39@mail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="First Name :".$firstname."\n"."Last Name :".$lastname."\n".">Phone no.:".$phone-no."\n"."Email :".$email."\n"."Country :".$country."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>