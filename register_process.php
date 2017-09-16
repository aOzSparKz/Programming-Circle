<?php
include "conn.php";

if (isset($_POST['dnrBtn'])) {
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$age = $_POST['age'];
	$gen = $_POST['gender'];
	$add = $_POST['add'];
	$con = $_POST['con'];
	$date  = date("M d,Y");
	$full = $fname." ".$lname;
	$type = "Donor";

$qry = mysql_query("SELECT contact FROM donors");
while ($row = mysql_fetch_array($qry)) {
	$contact = $row['contact'];	
}
if ($con == $contact) {
	echo "<script>alert('Contact Number already exists');
		window.location.href='registration_donor.php';</script>";
}
else{
	$sql = mysql_query("INSERT INTO donors (fname,mname,lname,username,password,age,gender,address,contact)VALUES('$fname','$mname','$lname','$uname','$pass','$age','$gen','$add','$con')");
	
	if (!$sql) {
		echo "<script>alert('Unable to register');
		window.location.href='registration_donor.php';</script>";
	}
	else{
		echo "<script>alert('New User added');
		window.location.href='donor_login.php';</script>";
		}
	}
}
?>