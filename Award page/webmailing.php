<?php

$to = "m.haroon.emran2016@gmail.com"; /* <----add your e-mail*/
$Subject = "Applicants information";/*what subject you want to receive your email;*/

//Don't touch this please //
$name 	= $_POST['First_name'];
$Lname	= $_POST['Last_name'];
$Father = $_POST['Father_name'];
$id 	= $_POST['ID'];
$email 	= $_POST['email'];
$phone	= $_POST['phone'];
$Uni 	= $_POST['university'];
$Dep 	= $_POST['dept'];
$year 	= $_POST['year'];
$province = $_POST['province'];


$comment = "<b> Candidates submit the following information </b> 
			" . $_POST['comment']. "<br>"
	 			. " <b>First Name:</b> "		. $name . "<br>"
				. " <b>Last Name:</b> "			. $Lname . "<br>"
				. " <b>Father's Name:</b> "		. $Father . "<br>"
				. " <b>Tazkira Number:</b> "	. $id . "<br>"
				. " <b> E-mail <b/> "			. $email . "<br>" 
				. " <b>Phone</b> "  			. $phone . "<br>" 
				. " <b>University:</b> "		. $Uni . "<br>"
				. " <b>Department:</b> "		. $Dep . "<br>"
				. " <b>Year:</b> "				. $year . "<br>"
				. " <b>Province</b> " 			. $province
				. "<b>Transcript</b>"  			.$imageFileType;
	



// this is the headers//
$headers .= "Content-type: text/html;\r\n";
$headers .= "From: $email"; 

//the mail Function
mail($to, $Subject, $comment, $headers);
//this message will show up when you hit Submit button//
echo "You have succesfully applied to the Scholarship. If you win the scholarship a member of our team will contact you. <br> Thank You $name $Lname";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["transcript"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$check = getimagesize($_FILES["transcript"]["tmp_name"]);

?>



