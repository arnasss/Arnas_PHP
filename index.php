<?php

$months = 24;
$car_price_new = 30000;
$depreciation = 2;
$santaoupos = 15000;
$car_price_used = $car_price_new;

for($x = 0; $car_price_used >= $santaoupos; $x++) {
    $car_price_used -= ($car_price_used / 100) * $depreciation;
}
$car_price_used = round($car_price_used);
$depr_perc= round(($car_price_used * 100) / $car_price_new);
$text_h2 = "Naujos mašinos kaina :$car_price_new";
$text_h3 = "Mašiną galėsiu nusipirkti po $x mėn. kai jos vertė bus: $car_price_used";
$text_h4 = "Mašina nuvertės $depr_perc proc.";

?>
<html>
    <body>
        <h1>Kieks nuvertės mašina?</h1>
        <h2><?php print $text_h2; ?></h2>
        <h3><?php print $text_h3; ?></h3>
        <h4><?php print $text_h4; ?></h4>
    </body>
</html>