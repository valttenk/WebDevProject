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
					<h2 class="sivuotsikot">Ota yhteyttä</h2>
					<div id="col_55">
						<div class="colL" id="contactForm">
							<form id="contactForm" method="post">
								<fieldset>
									<legend><h3>Anna meille palautetta:</h3></legend>
									<br>Nimi:<br>
									<input type="text" name="name"><br>Sähköposti:<br>
									<input type="text" name="email"><br>Palaute:<br>
									<textarea name="text" rows="8" cols="40"></textarea><br>
									<button type="submit">Lähetä</button>
								</fieldset>
							</form>
							<?php
							$name = $_POST["name"];
							$email = $_POST["email"];
							$text = $_POST["text"];
							addFeedback($name, $email, $text);
							?>
						</div>
						<div class="colR" id="contactInfo">
							<h3>Ylläpitäjät:</h3>
							<div class="name">Sivuston on perustanut kolmen hengen opiskelijaryhmä: <b>Helmi Hämeri</b>, <b>Valtteri Korpi</b> ja <b>Linda Nevalainen</b>. Olemme kaikki toisen vuoden opiskelijoita Metropolia AMK:n Tieto- ja Viestintäteknologian koulutusohjelmasta. Voit ottaa meihin yhteyttä sähköpostitse (etunimi.sukunimi@metropolia.fi) </div>
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
