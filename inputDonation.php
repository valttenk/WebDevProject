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
							<option value="Trombi Ry">Trombi Ry</option>
							<option value="TxO Ry">TxO Ry</option>
						</select>
						<select name="gender">
							<option value="">- Sukupuoli -</option>
							<option value="mies">Mies</option>
							<option value="nainen">Nainen</option>
						</select>
						<input type="submit" value="Lisää" class="luovutus">
					</form>
					<?php
					include "Scripts/newDonation.php";
					?>
				</div>
			</div>
			<div id="topTEN">
				<?php include 'Scripts/topTEN.php' ?>
			</div>
		</div>
		<?php include 'Scripts/footer02.php' ?>
	</div></body>
</html>
