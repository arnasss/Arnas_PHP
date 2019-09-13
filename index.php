<?php

$distance = rand(100, 1000);
$consumption = 7.5;
$price_l = 1.3;
$sunaudota_kelioniai = ($distance * $consumption)/100;
$keliones_kaina = $sunaudota_kelioniai * $price_l;

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Kelionės skaičiouoklė</h1>
        <ul>
            <li>Nuvažiuota distancija: <?php print $distance; ?></li>
            <li>Sunaudota <?php print $sunaudota_kelioniai; ?> l. kuro.</li>
            <li>Kaina <?php print $keliones_kaina; ?> pinuigų.</li>
        </ul>
    </body>
</html>