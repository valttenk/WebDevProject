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
					<h2 class="sivuotsikot">VERENLUOVUTUSKAMPANJA - METROPOLIA AMK</h2>
					<div id="paragraph01">
						<p >
							Tervetuloa Metropolian ainejärjestöjen verenluovutuskampanjan nettisivuille! Täältä löydät <a href="http://users.metropolia.fi/~valttenk/WebDevProject/campaingInfo.php">tietoa</a> käynnissä olevasta kampanjasta, <a href="http://users.metropolia.fi/~valttenk/WebDevProject/statistics.php">tilastoja</a> kampanjan luovutusmääristä, <a href="http://users.metropolia.fi/~valttenk/WebDevProject/whyShouldIDonate.php">yleistietoa</a> verenluovutuksesta, sekä paljon muuta!</p>
						<p>
							Kampanja järjestetään yhteistyössä Suomen Punaisen Ristin Veripalvelun kanssa Metropolian amk-opiskelijoille ensimmäistä kertaa tulevana kesänä 1.6.-1.9.2016. Ainejärjestöt kilpailevat kampanjan aikana siitä, kenellä on eniten verenluovuttajia. Kun käyt verenluovutuksessa, muista ilmoittaa oma ainejärjestösi kampanjalistaan, niin olet mukana lisäämässä oman ainejärjestösi voittomahdollisuutta!
						</p>
					</div>
					<div id="col_55">
						<div class="colL" id="ajankohtaista">
							<h3 class="sivuotsikot">Ajankohtaista:</h3>
							<ul>
								<li>
									<b>- Sivuston julkaisu lähestyy!</b> Sivusto esitellään 9.5. sen hetkisessä mahdollisimman valmiissa muodossaan. Runsas viikko ennen julkaisua pientä viilattavaa löytyy vielä runsaasti.
								</li>
								<li>
									<b>- Seuraa meitä Twitterissä!</b> Löydymme nyt myös Twitteristä nimimerkillä <a href="https://twitter.com/CJvYvHQ8w4LtrZS">@CJvYvHQ8w4LtrZS</a>. Seuraa myös kampanjan virallista hashtagia <a href="https://twitter.com/hashtag/MetropoliaLuovuttaa?src=hash">#MetropoliaLuovuttaa</a> ja osallistu keskusteluun!
								</li>
								<li>
									<b>- Projektialustaksi GitHub!</b> Haluatko näyttää meille miten footer muotoillaan oikeaoppisesti, tai miten navipalkin pudotusvalikko sulkeutuu kun toinen avataan? Anna panoksesi osallistumalla <a href="https://github.com/valttenk/WebDevProject">projektiimme</a> GitHubissa.
								</li>
							</ul>
						</div>
						<div class="colR" id="twtr">
							<a class="twitter-timeline" href="https://twitter.com/hashtag/MetropoliaLuovuttaa" data-widget-id="726496169506004992" width="1000">#MetropoliaLuovuttaa twiitit</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
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
