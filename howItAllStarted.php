<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Web platform for blood donation contest of university students.">
		<meta name="keywords" content="blood donation, bloodtype, SPR, Metropolia">
		<meta name="author" content="Hämeri, Korpi, Nevalainen">
		<title>WebDevProject</title>
		<link rel="stylesheet" type="text/css" href="Style/style.css">
		<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
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
				<h2>Kuinka kaikki alkoi?</h2>
				<div id="paragraph01">
					<p>
						Selvitimme kevään ensimmäisellä periodilla Veripalvelu.fi -sivuston asiakastyytyväisyyttä ja käytettävyyttä. Kävimme tekemässä asiakashaastatteluja Veripalvelun tiloissa Helsingin Sanomatalolla. Siellä yksi työntekijä kertoi meille, että heillä oli ollut vähän aikaa sitten verenluovutuskampanja yliopisto-opiskelijoille. Tästä saimme idean, että voisimme kehittää web-sivuston liittyen verenluovutuskampanjaan. Sivustomme on alkuun suunniteltu käytettäväksi Metropolia ammattikorkeakoulun ainejärjestöille. Sivuston tarkoituksena on koota kaikkien ainejärjestöjen verenluovutusmäärät ja kilpailla millä ainejärjestöllä on eniten verenluovuttajia.

					</p>
				</div>
			</div>
            <?php include 'Scripts/topTEN.php' ?>
		</div>
		<?php include 'Scripts/footer01.php' ?>
	</div></body>
</html>
