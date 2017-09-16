<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "uhack";

$connect = mysql_connect($host,$user,$pass);

if(!$connect){
	echo "<script>alert('MySQL_ERROR');</script>";
}
else{

}
$select_database = mysql_select_db($database);