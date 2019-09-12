<?php

$siukslines_turis = 40;
$siuksliu_turis_per_d = 15;
$max_kaupo_turis = rand(1, 10);
$max_talpa = $siukslines_turis + $max_kaupo_turis;
$pilnas_per = $max_talpa / $siuksliu_turis_per_d;
$nesti_uz = round($pilnas_per);

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Po <?php print $nesti_uz .' ' . date('Y/m/d', strtotime('+' . $nesti_uz . 'days')); ?> pirk gėlių ir <br>
        šampano, jeigu nori išvengti <br>
        konflikto.</h1>
    </body>
</html>