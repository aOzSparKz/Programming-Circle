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
	
	<div class="container">
		<div class="row">
			<div class="col-7">
				<form action="contact_process.php" class="con" method="POST">
					<h2>Get in TOUCH with Us!</h2>
					<input type="text" name="fllnme" placeholder="Your Name" autofocus required><br>
					<input type="text" name="con" placeholder="Contact Number" ><br>
					<input type="email" name="mail" placeholder="Email" required><br>
					<textarea name="ta" id="ta" cols="60" rows="10" placeholder="Leave your message here."></textarea><br>
					<input type="submit" name="conBtn" value="Send">
				</form>
			</div>
			<div class="col-5 con-num">
				<h3>BFP Hotline Number:</h3><img src="fire.png" alt=""><p>Caloocan City Fire Station: +632 324-6527</p>
				<h3>PNP Hotline Number:</h3><img src="police.png" alt=""><p>PNP Emergency Police Assistance: 1-1-7</p>
				<h3>Health Emergency:</h3><img src="hospital.png" alt=""><p>Hospital Hotline: +639123456789</p>
			</div>
		</div>
	</div>
</body>
	<?php include 'footer.php' ?>
</html>