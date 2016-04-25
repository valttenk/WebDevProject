<?php

$sql = "SELECT association FROM donations";
$assoc = db_select($sql);

$i = 0;
$topTEN = array();
foreach ($assoc as $row){
	$association = $assoc[$i][association];
	$sql = "SELECT SUM(donation) FROM donations WHERE association='$association'";
	$sum = db_select($sql);
	$sum = $sum[0]['SUM(donation)'];
	$n = $i + 1;
	$topTEN[$i] = array($association, $sum);
	$i++;
}

// Remove dublicates
$topTEN = array_map("unserialize", array_unique(array_map("serialize", $topTEN)));

//Sort by donation
foreach ($topTEN as $key => $row) {
    $donation[$key]  = $row[1];
}
array_multisort($donation, SORT_DESC, $topTEN);

?>
<div id="tableContainer">
	<div class="boxHeader">
		TOP 10 järjestöt
	</div>
	<table>
	    <tbody>
	<?php foreach ($topTEN as $row): array_map('htmlentities', $row); ?>
	    <tr>
	        <td><?php echo implode('</td><td>', $row); ?></td>
	    </tr>
	<?php endforeach; ?>
	    </tbody>
	</table>
</div>
