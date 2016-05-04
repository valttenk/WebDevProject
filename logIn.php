<?php
if ((isset($_SESSION['username']) != '')) {
	header('Location: inputDonation.php');
}
?>
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
				<div id="login01">
					<form  method="post">
						Käyttäjätunnus:<br>
						<input type="text" name="username"><br>
						Salasana:<br>
						<input type="password" name="password"><br>
						<input type="submit" name="Submit" value="Kirjaudu">
						<?php
						include "Scripts/checkPass.php";
						echo "<br>" . $message; ?>
					</form>
				</div>
				<div id="logininfo">
				<p>
            		Oletko saanut tunnukset kampanjan järjestäjältä? Kirjaudu niillä sisään, niin pääset syöttämään uusia luovutuksia. Jos olet unohtanut salasanasi tai tunnukset eivät muusta syystä toimi, ota yhteyttä sivuston ylläpitäjään.
            	</p>
            	</div>
			</div>
			<div id="topTEN">
				<?php include 'Scripts/topTEN.php' ?>
			</div>
		</div>
		<?php include 'Scripts/footer01.php' ?>
	</div></body>
</html>
