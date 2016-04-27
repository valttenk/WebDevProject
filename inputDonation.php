<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('Location: logIn.php');
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
			<div id="input01">
				<h2> Lisää luovutus </h2>
				<form method="post">
					<select name="association" required>
						<option value="">- Yhdistys -</option>
						<option value="AGU Ry">AGU Ry</option>
						<option value="DEMONI Ry">DEMONI Ry</option>
						<option value="HIV Ry">HIV Ry</option>
						<option value="HTO Ry">HTO Ry</option>
						<option value="LEPO Ry">LEPO Ry</option>
						<option value="MeMO Ry">MeMO Ry</option>
						<option value="MURU Ry">MURU Ry</option>
						<option value="PIUHA Ry">PIUHA Ry</option>
						<option value="SOFFA Ry">SOFFA Ry</option>
						<!-- <option value="Tilde Ry">Tilde Ry?????</option> -->
						<option value="Trombi Ry">Trombi Ry</option>
						<option value="TxO Ry">TxO Ry</option>
						<!-- <option value="UIO Ry">UIO Ry????</option> -->
					</select>
					<select name="gender">
						<option value="">- Sukupuoli -</option>
						<option value="mies">Mies</option>
						<option value="nainen">Nainen</option>
					</select>
					<button type="submit">Lisää</button>
				</form>
				<?php
				include "Scripts/newDonation.php";
				?>
				<a href="Scripts/logout.php"><input type="button" value="Kirjaudu ulos"></a>
			</div>
			<div id="topTEN">
				<?php include 'Scripts/topTEN.php' ?>
			</div>
		</div>
		<?php include 'Scripts/footer01.php' ?>
	</div></body>
</html>
