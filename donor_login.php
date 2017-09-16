<?php  
	include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Landslide Detection and Monitoring System</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="logo.png">
</head>
<body>
	<nav id="nav">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="registration_resident.php">Registration</a></li>
			<li><a href="donor_login.php">Donor Login</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="news.php">News</a></li>
		</ul>
	</nav>
	<!-- <header>
		<h1 class="title"> Landslide Detection and Monitoring System</h1>
	</header> -->

	<form action="login_process.php" method="POST">
		<h2>Donor Login</h2>
		<center>
		<input type="text" name="uname" placeholder="Username" required autofocus><br>
		<input type="password" name="pass" placeholder="Password" required><br>
		<input type="password" name="rpass" placeholder="Repeat Password" required><br>
		<input type="submit" name="logIn" value="Login">
		</center>
	</form>

	<?php include 'footer.php' ?>
</body>
</html>