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
				<div class="column">
					<h2>Voitko luovuttaa verta?</h2>
					<div id="paragraph01">
						<p>
	                    <ul>
	                    <li>Nopein tapa selvittää asia on tehdä Sovinko luovuttajaksi -nettitesti: www.sovinkoluovuttajaksi.fi</li>
	                    <li>Jos olet epävarma tai haluat lisätietoa, voit soittaa maksuttomaan verenluovuttajainfon numeroon: 0800 0 5801, ark. 8-17 tai lähettää sähköpostia osoitteeseen verenluovutus(at)veripalvelu.fi</li>
	                    </p><p>
	                    Verenluovutuksen perusedellytykset Veripalvelun (2016) mukaan:
	                    <li>sinun tulee olla terve ja tuntea vointisi hyväksi</li>
	                    <li>ikä: 18-70 -vuotias
	                    (ensiluovutus on mahdollista 59-vuotiaaksi asti, ja 66 vuotta täyttäneenä voit jatkaa, jos luovutat vähintään joka toinen vuosi)</li>
	                    <li>paino väh. 50 kg.</li>
	                    <li>hemoglobiiniarvon tulee olla hyvä (naiset vähintään 125 g/l ja miehet 135 g/l)
	                    (Hemoglobiini mitataan paikan päällä)</li>
	                    <li>asuinpaikkakunta pysyvästi Pohjoismaissa tai muissa EU tai Efta-maissa</li>
	                    <li>sinun pitää pystyä täyttämään terveydentilakysely suomeksi, ruotsiksi tai englanniksi</li>
	                    <li>sinun tulee ottaa mukaasi virallinen kuvallinen henkilöllisyystodistus (ja tarvittaessa virallinen todistus suomalaisesta henkilötunnuksesta)</li>
	                    <li>edellisestä kokoverenluovutuksestasi olla kulunut vähintään 91 vuorokautta (naiset) tai vähintään 61 vuorokautta (miehet)</li>
	                    </ul>
					    (Veripalvelu 2016.)
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
