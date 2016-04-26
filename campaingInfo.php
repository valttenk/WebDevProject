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
					<h2>Tietoa verenluovutuskampanjasta</h2>
					<div id="paragraph01">
						<p>
							Metropolia ammattikorkeakoulun ja Suomen Punaisen Ristin Veripalvelun yhteistyössä järjestämä verenluovutuskampanja on käynnissä 1.6.-1.9.2016.
	                    </p><p>
	                        Voittava ainejärjestö julkistetaan 2.9.2016. Voittajalle luvassa kunniakirja ja yllätyspalkinto.
	                    </p><p>
	                        Luovuttaessa verta, merkitse nimesi ja oma ainejärjestösi kampanjalistaan verenluovutuspaikalla.
						</p><p>
	                        Verenluovutuspaikat kampanjan aikana:
	                    </p><p>
	                        Joka viikon torstai Metropolian terveydenhoitajat ottavat vastaan verenluovuttajia klo 10-15 välisenä aikana jonotusperiaatteella.
	                    </p><p>
	                        Veripalvelun veripalvelutoimistot löydät linkistä: https://www.veripalvelu.fi/verenluovutus/luovuta-verta/missa-luovutat
	                    </p><p>
	                        Espoo
	                            Osoite
	                                Kauppakeskus Iso Omena, Piispansilta 9 (Länsiväylätoimisto, 1-tason R-kioskilta hissillä 2. kerrokseen) 02230 Espoo
	                            Aukioloajat
	                                ma, ke klo 12–19 ja ti, to, pe klo 11–18
	                            Yhteystiedot
	                                p. 029 300 1040 Maksuton luovuttajainfo: 0800 0 5801 (arkisin klo 8–17)
	                    </p><p>
	                        Helsinki
	                            Kivihaka
	                                Osoite
	                                    Kivihaantie 7 00310 Helsinki
	                                Aukioloajat
	                                    ma–to klo 11–18 pe klo 9–16
	                                Yhteystiedot
	                                    p. 029 300 1020 Maksuton luovuttajainfo: 0800 0 5801 (arkisin klo 8–17)
	                            Sanomatalo
	                                Osoite
	                                    Töölönlahdenkatu 2 (2. krs) 00100 Helsinki
	                                Aukioloajat
	                                    ma, ke, pe klo 11–19 ti, to klo 8–19
	                                Yhteystiedot
	                                    p. 029 300 1030 Maksuton luovuttajainfo: 0800 0 5801 (arkisin klo 8–17)
	                    </p><p>
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
