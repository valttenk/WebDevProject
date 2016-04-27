<!DOCTYPE html>
<html lang="fi">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Web platform for blood donation contest of university students.">
		<meta name="keywords" content="blood donation, bloodtype, SPR, Metropolia">
		<meta name="author" content="Hämeri, Korpi, Nevalainen">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
				<div class="column">
					<h2 class="sivuotsikot">VERENLUOVUTUSKAMPANJA - METROPOLIA AMK</h2>
					<div id="paragraph01">
						<p>
							Metropolia ammattikorkeakoulu järjestää yhdessä Suomen Punaisen Ristin Veripalvelun kanssa verenluovutuskampanjan amk-opiskelijoille. Kampanja on käynnissä 1.6.-1.9.2016. Ainejärjestöt kilpailevat keskenään kampanjan aikana siitä, kenellä eniten verenluovuttajia. Kun käyt verenluovutuksessa, merkitse nimesi ja oma ainejärjestösi kampanjalistaan verenluovutuspaikalla, niin olet mukana lisäämässä oman ainejärjestösi voittomahdollisuutta!
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
