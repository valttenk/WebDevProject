<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Web platform for blood donation contest of university students.">
		<meta name="keywords" content="blood donation, bloodtype, SPR, Metropolia">
		<meta name="author" content="Hämeri, Korpi, Nevalainen">
		<title>WebDevProject</title>
		<link rel="stylesheet" type="text/css" href="Style/style.css">
	</head>
	<body><div id='body01'>
		<?php include 'Scripts/nav01.php' ?>
		<section>
			<div id="content01">
				<h2>Contact us!</h2>
				<div id="paragraph01">
					<form id="contactForm" method="post"> Name:<br>
						<input type="text" name="name"><br>Email:<br>
						<input type="text" name="email"><br>
						<textarea name="text">Write your feedback here!</textarea>
						<button type="submit">Send!</button>
					</form>
					<?php include 'Scripts/query.php';
					$name = $_POST["name"];
					$email = $_POST["email"];
					$text = $_POST["text"];
					addFeedback($name, $email, $text);
					?>
				</div>
			</div>
		</section>
		<?php  include 'Scripts/footer01.php' ?>
	</div></body>
</html>