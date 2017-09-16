<?php
include "conn.php";

if (isset($_POST['regBtn'])) {
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$gen = $_POST['gender'];
	$add = $_POST['add'];
	$con = $_POST['con'];
	$date  = date("M d,Y");
	$full = $fname." ".$lname;

$qry = mysql_query("SELECT contact FROM residence");
while ($row = mysql_fetch_array($qry)) {
	$contact = $row['contact'];	
}
if ($con == $contact) {
	echo "<script>alert('Contact Number already exists');
		window.location.href='registration_donor.php';</script>";
}
else{
	$sql = mysql_query("INSERT INTO residence (fname,mname,lname,age,gender,address,contact)VALUES('$fname','$mname','$lname','$age','$gen','$add','$con')");
	
	if (!$sql) {
		echo "<script>alert('Unable to register');
		window.location.href='registration_donor.php';</script>";
	}
	else{
		echo "<script>alert('New User for Residence was added');
		window.location.href='donor_login.php';</script>";
		}
	}
}
?>