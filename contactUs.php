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
					<h2>Ota yhteyttä</h2>
					<div id="paragraph01">
						<form id="contactForm" method="post"> Name:<br>
							<input type="text" name="name"><br>Email:<br>
							<input type="text" name="email"><br>
							<textarea name="text">Write your feedback here!</textarea>
							<button type="submit">Send!</button>
						</form>
						<?php
						$name = $_POST["name"];
						$email = $_POST["email"];
						$text = $_POST["text"];
						addFeedback($name, $email, $text);
						?>
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
