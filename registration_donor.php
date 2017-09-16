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
			<div class="col-8 reg">
				<form action="register_process.php" method="POST">
					<h2>Donor Registration</h2>
					<input type="text" name="fname" placeholder="Firstname" required autocfocus>
					<input type="text" name="mname" placeholder="Middle Initial" required maxlength="1"><br>
					<input type="text" name="lname" placeholder="Lastname" required>
					<input type="text" name="uname" placeholder="Username" required><br>
					<input type="password" name="pass" placeholder="Password" required>
					<input type="text" name="age" placeholder="Age" required><br>
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female <br>
					<select name="add" id="adds">
						<option value=""></option>
					</select>
					<input type="text" name="con" placeholder="Contact Number (+639123456789)" required maxlength="13"><br>
					<input type="submit" name="dnrBtn" value="Register"><br>
					<a href="registration_resident.php" style="color: blue; margin-left: 10px;">Register as Resident</a>


				</form>
			</div>
			<div class="col-4 ltips">
				<h1 class="tips">Landslide Preparedness</h1>
				<div class="titles">What to do Before a Landslide:
					<p>1. Do not build near steep slopes, close to mountain edges, near draiange ways, or natural erosion valleys.</p>
					<p>2. Get a ground assessment of your property.</p>
					<p>3. Watch the patterns of storm-water drainage near your home, and note yhe places where runoff water converges, increasing flow in channels. These are areas to avoid during a storm.</p>
					<!-- <p>4. Learn about the emergency-response and evacuation plans for your area. Develop your own emergency plan for your family or business.</p> -->
				</div>
				<div class="titles">What to do During a Landslide:
					<p>1. Be aware that strong shaking from earthquakes can induce or intensify teh effects of landslide.</p>
					<p>2. Listen for any unusual sounds that might indicate moving debris, such as trees cracking or boulders knocking together. A trickle of flowing or falling mud or debris may precede larger landslides.</p>
					<p>3. Stay alert and awake. Many debris-flow fatalities occur when people are sleeping.</p>
				<div class="titles">What to do After a Landslide:
					<p>1. Stay away from the slide area. There may be danger of additional slides.</p>
					<p>2. Listen to local radio or television stations for the latest emergency information.</p>
					<p>3. Check for injured and trapped persons near the slide, without entering the direct slide area. Direct rescuers to their locations.</p>
					<!-- <p>4. Look around for and report broken utility lines and damaged roadways and railways to appropriate authorities.</p> -->
				</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php' ?>
</body>
</html>