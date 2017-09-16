<?php
include 'conn.php';
$id = $_GET['id'];

$sql = mysql_query("DELETE FROM inbox WHERE id = '$id'");
header("Location:donors_main.php");
?>