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
		<?php
        include 'Scripts/nav01.php';
        include 'Scripts/query.php';
        ?>
		<section>
            <div id="pisarat">
                <?php include 'Scripts/pisarat.php'; ?>
            </div>
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
		<?php include 'Scripts/footer02.php' ?>
	</div></body>
</html>