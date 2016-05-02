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
					<h2 class="sivuotsikot">Tietoa verestä</h2>
					<div id="paragraph01">
						<p>
							Veri koostuu punasoluista, valkosoluista, verihiutaleista ja verinesteestä eli plasmasta. Aikuisen ihmisen kehossa on verta noin viisi litraa. Punaisen värinsä veri saa punasolujen sisältämästä hemoglobiinista. Punasolujen tehtävänä on kuljettaa keuhkoista saatavaa happea kudoksiin ja tuoda keuhkoihin takaisin hiilidioksidia uloshengitettäväksi. Valkosolut puolestaan huolehtivat kehon vastustuskyvystä. Verihiutaleet auttavat elimistöä verenvuotojen tyrehdyttämisessä. Verinesteellä eli plasmalla on useita tehtäviä: kehon neste- ja lämpötasapainon säätely, ravintoaineiden kuljetus kudoksiin, kuona-aineiden kuljetus maksaan ja munuaisiin kehosta poistettavaksi. Verihiutaleet ja plasman sisältämät hyytymistekijät yhdessä muodostavat verisuonivaurioissa kiinteän verihiutaletulpan. (Veripalvelu 2016.)

						</p><p>
							Veriryhmiä on tunnetun ABO-järjestelmän mukaan kahdeksan. Veren ryhmittely perustuu punasolujen ominaisuuksiin ja seerumin vasta-aineisiin. Moni ei ennen ensimmäistä verenluovutustaan edes tiedä veriryhmäänsä. Verensiirrossa veriryhmä on otettava kuitenkin aina huomioon. Kuvasta 1 voi nähdä veriryhmien siirtosäännöt. (Veripalvelu 2016.)
						</p>
	                    <img src="..//WebDevProject/Pictures/Veriryhmien_periytyminen_2.jpg" alt="ABO -järjestelmä">
	                    <p></p>
	                        Kuva 1. Veriryhmien siirtosäännöt (Veripalvelu 2016).
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
