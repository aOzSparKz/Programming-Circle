<?php
session_start();
include 'conn.php';

if (isset($_POST['donBtn'])) {
	$name = $_SESSION['name'];
	$cat = $_POST['cat'];
	$amt = $_POST['amt'];
	$qty = $_POST['qty'];
	$spec = $_POST['spec'];

	$sql = mysql_query("INSERT INTO donor_report(name,donor_type,amount,qty,others)VALUES('$name','$cat','$amt','$qty','$spec')");
	if (!$sql) {
		echo "<script>alert('There was an error in donating.');
		window.location.href ='donors_main.php';</script>";
	}
	else{
		echo "<script>alert('Donated Successfully.');
		window.location.href ='donors_main.php';</script>";
	}

}

?>