<?php

$distance = rand(100, 1000);
$consumption = 7.5;
$price_l = 1.3;
$me_money = 100;

$sunaudota_kelioniai = round(($distance * $consumption) / 100, 2);
$keliones_kaina = round($sunaudota_kelioniai * $price_l, 2);
if ($keliones_kaina < $me_money) {
    $text_3 = 'įperkama';
} else {
    $text_3 = 'neįperkama';
};

$text_1 = "Turimi pinigai $me_money";
$text_2 = "Išvada: Kelionė $text_3";

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <ul>
            <li><?php print $text_1; ?></li>
            <hr>
            <p><?php print $text_2; ?></p>
        </ul>
    </body>
</html>