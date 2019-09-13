<?php

$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

$pavadinimas = 'Buitinė skaičiuoklė';
$situacija_1 = 'Grižai vėlai';
$situacija_2 = 'Grižai vėlai ir išgėres';
$situacija_3 = 'Grįžai išgėres';
$situacija_4 = 'Nieko nepadarei';

if ($grizai_isgeres && $grizai_velai) {
    $ispausdink = $situacija_2;
} elseif ($grizai_isgeres == true && $grizai_velai == false) {
    $ispausdink = $situacija_3;
} elseif ($grizai_isgeres == false && $grizai_velai == true) {
    $ispausdink = $situacija_1;
} else {
    $ispausdink = $situacija_4;
}
        
?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1><?php print $pavadinimas; ?></h1>
        <h2><?php print $ispausdink; ?></h2>
    </body>
</html>
