<div id="pisarat">
<ul>
    <li>
        <?php
        $types = array("A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-");
        
        foreach ($types as $type){

            switch (checkBlood($type)) {
                case 1:
                    echo "<img src='Pictures/icon_blood_1.png'>";
                    break;
                case 2:
                    echo "<img src='Pictures/icon_blood_2.png'>";
                    break;
                case 3:
                    echo "<img src='Pictures/icon_blood_3.png'>";
                    break;
            }
            echo "<span class='type'>$type</span>";
        }
        ?>
    </li>
    
    
</ul>
</div>

<?php
?>