<?php

$distance = rand(100, 1000);
$consumption = 7.5;
$price_l = 1.3;
$me_money = 100;

$sunaudota_kelioniai = round(($distance * $consumption)/100, 2);
$keliones_kaina = round($sunaudota_kelioniai * $price_l , 2);
if ($keliones_kaina <= $me_money) {
    $text_7 = 'įperkama';
} else {
    $text_7 = 'neįperkama';
}

$text_1 = "elionės skaičiuoklė";
$text_2 = "Nuvažiuota distancija: $distance .";
$text_3 = "Sunaudota $sunaudota_kelioniai l. kuro";
$text_4 = "Kaina $keliones_kaina pinigų.";
$text_5 = "Turimi pinigai $me_money";
$text_6 = "Išvada: Kelionė: $text_7";

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1><?php print $text_1; ?></h1>
        <ul>
            <li><?php print $text_5; ?></li>
            <li><?php print $text_2; ?></li>
            <li><?php print $text_3; ?></li>
            <li><?php print $text_4; ?></li>
        </ul>
        <hr>
        <p><?php print $text_6; ?></p>
    </body>
</html>
