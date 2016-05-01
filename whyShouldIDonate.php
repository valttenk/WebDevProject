<!DOCTYPE html>
<html lang="fi">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Web platform for blood donation contest of university students.">
		<meta name="keywords" content="blood donation, bloodtype, SPR, Metropolia">
		<meta name="author" content="Hämeri, Korpi, Nevalainen">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>WebDevProject</title>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="Style/style.css">
		<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:800,300' rel='stylesheet' type='text/css'>
	</head>
	<body><div id='body01'>
		<?php
        include 'Scripts/nav01.php';
        include 'Scripts/query.php';
        ?>
		<div id="content">
            <div id="pisarat">
                <?php include 'Scripts/pisarat.php'; ?>
            </div>
			<div id="content01">
				<div class="column">
					<h2 class="sivuotsikot">Miksi sinun kannattaisi luovuttaa verta?</h2>
					<div id="paragraph01">
						<p>
							Luovuttamalla verta voit pelastaa ihmishenkiä! Koskaan ei voi tietää milloin koittaa päivä kun sinä itse, tai läheisesi on avun tarpeessa. Vain riittävän suurilla luovutusmäärillä voimme varmistaa, että apua tarvitsevalle potilaalle on tarvittaessa saatavilla juuri oikean veriryhmän verta.
						</p>
						<p>
							Veripalvelun (2016) mukaan Suomessa tarvitaan joka arkipäivä noin 800 verenluovuttajaa. Verenluovuttajien veri auttaa vuositasolla noin 50 000 potilasta. Verenluovuttajien määrä vaihtelee eri veriryhmittäin seuraavasti: A+ 280, O+ 230, B+ 100, AB+ 35, A- 60, O- 65, B- 20, AB- 10. (Veripalvelu 2016.)
						</p>
						<p>
	                    	Suomessa on kaikenkaikkiaan noin 300 000 korkeakouluopiskelijaa. Jos näistä edes joka kymmenes eli 30 000 opiskelijaa aloittaisi säännöllisen verenluovutuksen, tarkoittaisi se lähes 400 päivittäistä luovutusta lisää!
						</p>
						<p>
							
						</p>
					</div>
				</div>
			</div>
			<div id="topTEN">
				<?php include 'Scripts/topTEN.php' ?>
			</div>
		</div>
		<?php include 'Scripts/footer01.php' ?>
	</div></body>
</html>
