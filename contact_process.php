<?php
include 'conn.php';

if (isset($_POST['conBtn'])) {
	$name = $_POST['fllnme'];
	$num = $_POST['con'];
	$email = $_POST['mail'];
	$content = $_POST['ta'];

	$sql = mysql_query("INSERT INTO contact(name,num,email,content)VALUES('$name','$num','$email','$content')");
	if (!$sql) {
		echo "<script>alert('Failed to send your message');
		window.locaiton.href = 'contact.php';</script>";
	}
	else{
		echo "<script>alert('Message sent');
		window.location.href = 'contact.php';</script>";
	}
}

?>