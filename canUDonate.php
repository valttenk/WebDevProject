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
					<h2 class="sivuotsikot">Voitko luovuttaa verta?</h2>
					<div id="paragraph01">
						<p>
							Verenluovutus ei sovi kaikille. Itseasiassa seula on varsin tiukka. Seuraavassa lueteltuna muutamia perusedellytyksiä verenluovutukselle:
						</p>
						<div id="col_55">
							<div class="colL" id="luovutus">
								<ul>
									<li>
										- Hyvä perusterveys
									</li>
									<li>
										- 18-70 vuoden ikä
									</li>
									<li>
										- Vähintään 50 kg painoa
									</li>
									<li>
										- Hyvä hemoglobiiniarvo
									</li>
									<li>
										- Pysyvä asuinpaikka Pohjoismaissa, EU tai Efta maissa.
									</li>
								</ul>
							</div>
							<div class="colR" id="luovutus">
								<ul>
									<li>
										- Kielitaito terveydentilakyselyn täyttämiseen suomeksi, ruotsiksi tai englanniksi
									</li>
									<li>
										- Kuvallinen henkilötodistus
									</li>
									<li>
										- Aikaa edellisestä luovutuksesta naisilla 91 vrk miehillä 61 vrk
									</li>
								</ul>
							</div>
						</div>
						<p>
	                    	Aivan kaikkia kriteerejä emme tähän listaa. Nopein tapa selvittää soveltuvuus luovuttajaksi on tehdä Suomen Punaisen Ristin Veripalvelun <a href="http://www.sovinkoluovuttajaksi.fi/">"Sovinko luovuttajaksi" -nettitesti</a>.
	                    	Jos olet epävarma tai haluat lisätietoa, voit soittaa maksuttomaan verenluovuttajainfon numeroon: 0800 0 5801, ark. 8-17 tai lähettää sähköpostia osoitteeseen verenluovutus(at)veripalvelu.fi
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
