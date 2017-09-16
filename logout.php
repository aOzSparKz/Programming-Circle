<?php
session_start();
session_destroy();
unset($_SESSION["name"]);
$url = "index.php";

header("Location:$url");
?>