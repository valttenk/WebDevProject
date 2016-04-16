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
				<h2>Miksi sinun kannattaisi luovuttaa verta?</h2>
				<div id="paragraph01">
					<p>
						Veripalvelun (2016) mukaan Suomessa tarvitaan joka arkipäivä noin 800 verenluovuttajaa. Verenluovuttajien veri auttaa vuositasolla noin 50 000 potilasta. Verenluovuttajien määrä vaihtelee eri veriryhmittäin seuraavasti:
					</p><p>
                        <ul>
                            <li>A+	280</li> 
                            <li>O+	230</li>
                            <li>B+	100</li>
                            <li>AB+	35</li>
                            <li>A-	60</li>
                            <li>O-	65</li>
                            <li>B-	20</li>
                            <li>AB-	10</li>
                        </ul>
						(Veripalvelu 2016.)
					</p>
				</div>
			</div>
		</section>
		<?php include 'Scripts/footer01.php' ?>
	</div></body>
</html>