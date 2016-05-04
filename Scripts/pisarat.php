<div id="veritilanne">
    <div class="boxHeader">
        Veritilanne <?php echo date("d.m.Y"); ?>
    </div>
    <ul>
            <?php
            $types = array("A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-");

            foreach ($types as $type){

                switch (checkBlood($type)) {
                    case 1:
                        $img = "<img src='Pictures/icon_blood_1.png' alt=''>";
                        break;
                    case 2:
                        $img = "<img src='Pictures/icon_blood_2.png'>";
                        break;
                    case 3:
                        $img = "<img src='Pictures/icon_blood_3.png'>";
                        break;
                }
                echo "<li>$img<span class='type'>$type</span></li>";
            }
            ?>
    </ul>
    <div id="infobox">
        Yllä näet ajankohtaisen tilanteen veriryhmittäin. Mitä tyhjempi tippa on, sitä kiireemmin vertasi tarvitaan. Luovuttaminen auttaa myös tipan ollessa täysi!
    </div>
</div>
