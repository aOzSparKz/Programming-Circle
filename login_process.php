<?php
session_start();
include 'conn.php';

if (isset($_POST['logIn'])) {
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$rpass = $_POST['rpass'];

	$qry = mysql_query("SELECT * FROM donors WHERE username = '$uname' AND password = '$pass'");
		$row = mysql_fetch_array($qry);
		$id = $row['id'];
		$fname = $row['fname'];
		$lname = $row['lname'];
		$username =  $row['username'];
		$full = $fname." ".$lname;

		$num = mysql_num_rows($qry);
		if ($rpass != $pass) {
			echo '<script>alert("Password not matched!");window.location.href="donor_login.php";</script>';
		}
		else{
		if ($num == 1 && $pass == $row['password']) {
			$_SESSION['id'] = $row['id'];
			$_SESSION['name'] = $full;
			echo '<script>alert("Login Successfully");window.location.href="donors_main.php";</script>';

		}
		else{
			echo '<script>alert("Incorrect Username or Password");window.location.href="donor_login.php";</script>';
		}
	}

}