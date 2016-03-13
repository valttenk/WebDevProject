<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="description" content="Web platform for blood donation contest of university students.">
        <meta name="keywords" content="blood donation, bloodtype, SPR, Metropolia">
        <meta name="author" content="Hämeri, Korpi, Nevalainen">
		<title>WebDevProject</title>
		<link rel="stylesheet" type="text/css" href="Style/style.css">
	</head>
	<body><div id='body01'>
		<header id='headerFEP'></header>
<!--NAVBAR IN SCRIPT.JS FILE-->
		<section>
			<div id="content01">
				<h2>Statistics</h2>
				<div id="paragraph01">
                    <form method="post">
                        <select name="Gender">
                            <option value="" selected>- Gender -</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                        </select>
                        <select name="Association">
                            <option value="" selected>- Association -</option>
                            <option value="SOFFA Ry">SOFFA Ry</option>
                            <option value="HTO Ry">HTO Ry</option>
                            <option value="TROMBI Ry">TROMBI Ry</option>
                            <option value="AGU Ry">AGU Ry</option>
                            <option value="DEMONI Ry">DEMONI Ry</option>
                            <option value="MURU Ry">MURU Ry</option>
                            <option value="PIUHA RY">PIUHA RY</option>
                            <option value="LEPO Ry">LEPO Ry</option>
                            <option value="MEMO Ry">MEMO Ry</option>
                            <option value="TXO Ry">TXO Ry</option>
                            <option value="HIV Ry">HIV Ry</option>
                        </select>
<!--                         <select name="Field">
                            <option value="" selected>- Field of study -</option>
                            <option value="Sosiaali- ja Terveys">Sosiaali- ja Terveys</option>
                            <option value="Tekniikka">Tekniikka</option>
                            <option value="Liiketalous">Liiketalous</option>
                            <option value="Kulttuuri">Kulttuuri</option>
                        </select> -->
                        <!-- <input type="checkbox" name="sortByDate" value="yes">Sort by date -->
                        <button type="submit">Select</button>
                    </form>
                </div>
                <div id='table'>
                    <?php include 'Scripts/query.php';
                    $gender = $_POST["Gender"];
                    $association = $_POST["Association"];
                    // $field = $_POST["Field"];
                    // $sortByDate = $_POST['sortByDate'];
                    $sortByDate = "ComingSoon";
                    printResult($gender, $association, $sortByDate);
                    ?>
                </div>
			</div>
		</section>
		<footer id="footerFEP"></footer>
<!--FOOTER IN SCRIP.JS FILE-->
		<script src="Scripts/script.js"></script>
	</div></body>
</html>