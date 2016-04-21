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
			<div id="content01">
				<h2>Tietoa verenluovutuksesta ja verestä</h2>
				<div id="paragraph01">
					<ul>
						<li>Voitko luovuttaa verta?</li>
						<li>Miksi sinun kannattaisi luovuttaa verta?</li>
						<li>Tietoa verestä</li>
					</ul>
					<p>
						Mitä tähän kirjoitetaan?
					</p>
				</div>
			</div>
            <?php include 'Scripts/topTEN.php' ?>
		</section>
		<?php include 'Scripts/footer01.php' ?>
	</div></body>
</html>