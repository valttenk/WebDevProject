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
		<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
		<script src="https://www.amcharts.com/lib/3/serial.js"></script>
		<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:800,300' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<div id='body01'>
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
					<h2 class="sivuotsikot">Tilastoja</h2>
					<h3>Päivittäiset luovutukset</h3>
					<?php $connection = db_connect();
					?>
					<div id='chartdiv'></div>
					<script>
						var chart = AmCharts.makeChart("chartdiv", {
						"type": "serial",
						"theme": "light",
						"marginRight": 40,
						"marginLeft": 40,
						"autoMarginOffset": 20,
						"dataDateFormat": "YYYY-MM-DD",
						"valueAxes": [{
							"id": "v1",
							"axisAlpha": 0,
							"position": "left",
							"ignoreAxisWidth":true
						}],
						"balloon": {
							"borderThickness": 1,
							"shadowAlpha": 0
						},
						"graphs": [{
							"id": "g1",
							"balloon":{
							  "drop":true,
							  "adjustBorderColor":false,
							  "color":"#ffffff"
							},
							"bullet": "round",
							"bulletBorderAlpha": 1,
							"bulletColor": "#FFFFFF",
							"bulletSize": 5,
							"hideBulletsCount": 50,
							"lineThickness": 2,
							"title": "red line",
							"useLineColorForBulletBorder": true,
							"valueField": "value",
							"balloonText": "<span style='font-size:18px;'>[[value]]</span>"
						}],
						"chartScrollbar": {
							"graph": "g1",
							"oppositeAxis":false,
							"offset":30,
							"scrollbarHeight": 80,
							"backgroundAlpha": 0,
							"selectedBackgroundAlpha": 0.1,
							"selectedBackgroundColor": "#888888",
							"graphFillAlpha": 0,
							"graphLineAlpha": 0.5,
							"selectedGraphFillAlpha": 0,
							"selectedGraphLineAlpha": 1,
							"autoGridCount":true,
							"color":"#AAAAAA"
						},
						"chartCursor": {
							"pan": true,
							"valueLineEnabled": false,
							"valueLineBalloonEnabled": true,
							"cursorAlpha":1,
							"cursorColor":"#258cbb",
							"limitToGraph":"g1",
							"valueLineAlpha":0.2
						},
						"valueScrollbar":{
						  "oppositeAxis":false,
						  "offset":50,
						  "scrollbarHeight":10
						},
						"categoryField": "date",
						"categoryAxis": {
							"parseDates": true,
							"dashLength": 1,
							"minorGridEnabled": true,
						},
						"export": {
							"enabled": true
						},
						<?php
						$sumDate = 0;
						$temp_result = $connection->query("SELECT SUM(donation),date FROM donations GROUP BY date ORDER BY date;");
						if ($temp_result->num_rows > 0) {
							echo '"dataProvider": [';
							while ($tempdata = $temp_result->fetch_assoc()) {
								$sumdonation = $sumdonation + $tempdata['SUM(donation)'];
								echo '{
								"date": "' . $tempdata['date'] . '",
								"value": ' . $sumdonation . '
							},';
							}
							echo ']';
						}
						?>
					});

					chart.addListener("rendered", zoomChart);

					zoomChart();

					function zoomChart() {
						chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
					}
					</script>
					<h3>Tarkempia tilastoja</h3>
					<div id="paragraph01">
	                    <form method="post">
	                        <select name="Gender">
	                            <option value="" selected>- Sukupuoli -</option>
	                            <option value="nainen">Nainen</option>
	                            <option value="mies">Mies</option>
	                        </select>
	                        <select name="Association">
	                            <option value="" selected>- Yhdistys -</option>
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
	                        <button type="submit">Valitse</button>
	                    </form>
	                </div>
	                <div class="tablediv">
	                    <?php
	                    $gender = $_POST["Gender"];
	                    $association = $_POST["Association"];
	                    // $field = $_POST["Field"];
	                    // $sortByDate = $_POST['sortByDate'];
	                    $sortByDate = "ComingSoon";
	                    printResult($gender, $association, $sortByDate);
	                    ?>
	                </div>
				</div>
			</div>
			<div id="topTEN">
				<?php include 'Scripts/topTEN.php' ?>
			</div>
		</div>
		<?php include 'Scripts/footer01.php' ?>
	</div>
	</body>
</html>
