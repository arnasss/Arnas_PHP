<?php

$days = 365;
$cigs_mon_fri = rand(13, 20);
$cigs_sat = rand(14, 20);
$cigs_sun = rand(14, 20);
$pack_price = 3.40;
$count_ttl = 0;

for ($x = 0; $x < $days; $x++) {
    $savaites_diena = date('N', strtotime("+$x days"));
    if ($savaites_diena <= 5) {
        $cigs_mon_fri = rand(13, 20);
        $count_ttl += $cigs_mon_fri;
    } elseif ($savaites_diena === 6) {
        $cigs_sat = rand(14, 20);
        $count_ttl += $cigs_sat;
    } else {
        $cigs_sun = rand(14, 20);
        $count_ttl += $cigs_sun;
    }
}

$total_packs = ceil($count_ttl / 20);
$price_ttl = $total_packs * $pack_price;
$text = "Per $days dienas, surūkysiu $count_ttl cigarečių už $price_ttl eur.";

?>
<html>
    <body>
        <h1>Mano dūmų skaičiuoklė</h1>
        <h2><?php print $text ?></h2>
    </body>
</html>