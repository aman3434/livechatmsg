<?php

$servername="localhost";
$username="root";
$password="";
$dbname="chatsystem";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{	
	//echo " <p align='center'><font color=red>connection established </font></p>";
	// $to = "aman_750@yahoo.com";
	// $token="123";
 //    $subject = "Reset your password on examplesite.com";
 //    $msg = "Hi there, click on this <a href=\"new_password.php?token=" . $token . "\">link</a> to reset your password on our site";
 //    $msg = wordwrap($msg,70);
 //    $headers = "From: info@examplesite.com";
 //    mail($to, $subject, $msg, $headers);
 //    header('location: pending.php?email=' . $email);

}
else
{
	echo "connection not established".mysqli_connect_error();	
}


				
?>