<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('Location: logIn.php');
}
?>
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
			<div id="input01">
				<h2> Input Donations </h2>
				<form method="post">
					<select name="association" required>
						<option value="">- Association -</option>
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
						<option value="">- Gender -</option>
						<option value="male">male</option>
						<option value="female">female</option>
					</select>
					<button type="submit">Submit</button>
				</form>
				<?php
				include "Scripts/newDonation.php";
				?>
				<a href="Scripts/logout.php"><input type="button" value="Log Out"></a>
			</div>
		</div>
		<?php include 'Scripts/footer01.php' ?>
	</div></body>
</html>
