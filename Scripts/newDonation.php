<!DOCTYPE html>
<html>
	<?php
		
		$associationP = $_POST['association'];
		$gender = $_POST['gender'];
		$donX = db_select("SELECT `donation` FROM `donations` WHERE `association` = '$associationP' AND `gender` = '$gender' AND `date` = CURDATE();");
		
		if ($associationP != null){
			if ($donX == false) {
				$don = 1;
				
				// valmistetaan lause
				$sql = db_query("INSERT INTO donations VALUES ('$associationP', CURDATE(), '$gender', '$don')");
							
				//header ("Location: inputDonation.php");
			} else {
				$don = $don+1;
				$don = $donX[0]["donation"]+1;
				
				$sql = db_query("UPDATE donations SET donation=$don WHERE association = '$associationP' and gender = '$gender' and date = CURDATE();");
			}
		}
	?>
</html>