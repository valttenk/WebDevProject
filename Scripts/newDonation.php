<!DOCTYPE html>
<html>
	<?php
		include 'Scripts/query.php';
		
		$association = $_POST['association'];
		$gender = $_POST['gender'];
		$donationx = db_select("SELECT `donation` FROM `donations` WHERE `association` = '$association' AND `gender` = '$gender' AND `date` = CURDATE();");
		
		if ($association != null){
			if ($donationx == false) {
				$donation = 1;
				
				// valmistetaan lause
				$sql = db_query("INSERT INTO donations VALUES ('$association', CURDATE(), '$gender', '$donation')");
							
				//header ("Location: inputDonation.html");
			} else {
				$donation = $donation+1;
				$donation = $donationx[0]["donation"]+1;
				
				$sql = db_query("UPDATE donations SET donation=$donation WHERE association = '$association' and gender = '$gender' and date = CURDATE();");
			}
		}
	?>
</html>