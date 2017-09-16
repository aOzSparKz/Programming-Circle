<?php  
	include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="icon" href="logo.png">
	<style>
		body, ul {
			margin: 0;
			padding: 0
		}
		.nav { background-color: rgb(0,102,204); }
		li { list-style-type: none; display: inline-block; padding: 15px; }
		li:first-child { margin-left: 10px; }
		a { color: #fff; text-decoration: none; }
	</style>
</head>
<body>
	<nav class="nav">
		<ul>
			<li><a href="admin_main.php">Home</a></li>
			<li><a href="admin_messages.php">Messages</a></li>
			<li><a href="admin_donors.php">Donors</a></li>
			<li><a href="admin_resident.php">Affected Residents</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
	</nav>
</body>
</html>