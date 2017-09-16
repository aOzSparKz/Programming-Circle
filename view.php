<?php
session_start();
include 'conn.php';
$sender = $_GET['msg_from'];
$content = $_GET['content'];
$date = $_GET['date'];
$to = $_GET['msg_to'];
$id = $_GET['id'];

if (isset($_POST['submit'])) {
	$reply = $_POST['rep'];
	$d = date("M d,Y");
	$sql = mysql_query("INSERT INTO inbox(id,msg_from,content,msg_to,date,)VALUES('$id','$to','$reply','$sender','$d')");

	if ($sql) {
		echo '<script>alert("Your Message has been sent!");window.location.href="donors_main.php";</script>';
	}
	else{
		echo '<script>alert("Sorry, Your Message was not sent!");window.location.href="donors_main.php";</script>';
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Read Message</title>
	<style type="text/css">
	body{
		background-color: #F5F5F5;
	}
	fieldset{
		background-color: white;
	}
		.container{
			height: 580px;
		}
		.content fieldset{
			height: 200px;
			word-wrap: all;
			overflow: auto;
		}
		.date{
			position: inherit;
			top: 40px;
		}
	</style>
</head>
<body>
<fieldset class="container">

<form method="POST">
	<fieldset>
		<label><b>From:</b> <?php echo $sender; ?></label>
		<br><br>
		<div class="content">


		<fieldset>
		<p>
			<?php
			echo "<b style = 'float:right;'>Date:".$date."</b>";
			echo "<br><br>";
			echo "<b>Content:</b>";
			echo "<br><br>";
			echo $content;
			?>
			</p>
		</fieldset>
		</div>
		<div class="reply">
		<b><p>Reply:</p></b>
			<textarea name="rep" rows="10" cols="180" wrap="hard" placeholder="Reply Here..">
</textarea>
<br>
<input type="submit" name="submit" value="Send">
		</div>
	</fieldset>
	</form>
</fieldset>
</body>
</html>