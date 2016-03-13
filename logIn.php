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
		<header id='headerFEP'></header>
<!--NAVBAR IN SCRIPT.JS FILE-->
		<section>
			<div id="login01">
				<!-- action="checkPass.php" -->
				<form  method="post">
					Username:<br>
					<input type="text" name="username"><br>
					Password:<br>
					<input type="password" name="password"><br>
					<button type="submit" name="Submit">Log in</button>
					<?php 
					include "Scripts/checkPass.php";
					echo $message; ?>
				</form>
			</div>
			
		</section>
		<footer id="footerFEP"></footer>
<!--FOOTER IN SCRIP.JS FILE-->
		<script src="Scripts/script.js"></script>
	</div></body>
</html>