<?php
header ('Refresh: 6; URL=../index.html');
	if(isset($_POST['submit'])){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$sub=$_POST['sub'];
		$msg=$_POST['msg'];
		$space=" ";

		$to='seancavanagh20@gmail.com';
		$subject='Form Submission';
		$message="First Name: ".$fname."\n". "Last Name: ".$lname."\n". "E-mail: ".$email."\n". "Subject: ".$sub."\n". "Wrote the following: "."\n\n".$msg;
		$headers="From:" .$fname .$lname;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$fname." ".$lname.", I will contact you shortly! You Are Being Redirected To The Homepage.</h1>";
		}
		else{
			echo "Something Went Wrong! Please Try Again Later. You Are Being Redirected To The Homepage.";
		}
	}

?>