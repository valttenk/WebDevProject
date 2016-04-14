<!DOCTYPE html>
<html>
	<?php
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		// PROTECTING DATABASE INPUT:
		$username = checkInput($username);
		$password = checkInput($password);
		$message = "";


		
		
		if (isset($_POST['Submit'])) {
			if (empty($_POST['username']) || empty($_POST['password'])) {
				$message = "Both fields are required.";
			} else {
				// $result = mysql_query("SELECT * FROM users WHERE username = '$username' and password = '$password';");
				$result = db_query("SELECT * FROM users WHERE username = '$username' and password = '$password'");
				$count=mysqli_num_rows($result);
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				
				if ($count > 0) {
					$_SESSION['username'] = $row["username"];
					header("Location: inputDonation.php");
				} else {
					$message = "Incorrect username or password.";
				}
			}
		}
		/*
		if($count == 1) {
			$_SESSION['username'] = $row["username"];
			header("Location: inputDonation.php");
		} else if($_SESSION["logInTries"] > 0){
			switch ($username){
				case '':
					echo "Username field empty!";
					break;
				default:
					echo "Wrong username or invalid password!";
			}
			switch ($password){
				case '':
					echo "Password field empty";
					break;
				default:
					echo "Wrong password!";
			}
			// echo '<div id="logInError">Wrong username or password!</div>';
		}*/
	?>
</html>