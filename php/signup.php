<?php

$db_host="localhost";
$db_user="root";
$db_passwd="root@123";
$db_name="details";

	$fname=$_post['fname'];
	$lname=$_post['lname'];
	$email=$_post['mail'];
	$dob=$$_post['dob'];
	$password=$_post['pwd'];


	$ins="insert into login values('$fname','$lname','$email','$dob','$password',0,1)";
	

?>