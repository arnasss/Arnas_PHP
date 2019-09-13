<?php
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

if ($grizai_isgeres && $grizai_velai) {
    $ispausdink = 'Grižai vėlai ir išgėres';
} elseif ($grizai_isgeres && !$grizai_velai) {
    $ispausdink = 'Grįžai išgėres';
} elseif (!$grizai_isgeres && $grizai_velai) {
    $ispausdink = 'Grižai vėlai';
} else {
    $ispausdink = 'Nieko nepadarei';
}

if ($grizai_isgeres && $grizai_velai) {
    $ispausdink_2 = 'Miegosi';
} elseif ($grizai_isgeres && !$grizai_velai) {
    $ispausdink_2 = 'Nemiegosi';
} elseif (!$grizai_isgeres && $grizai_velai) {
    $ispausdink_2 = 'Nemiegosi';
} else {
    $ispausdink_2 = 'Nemiegosi';
}

$pavadinimas = 'Buitinė skaičiuoklė';
$isvada = "Išvada: $ispausdink_2 ant sofos";

?>

<html>
        <head>
            <meta charset="UTF-8">
        </head>
        <body>
            <h1><?php print $pavadinimas; ?></h1>
            <h2><?php print $ispausdink; ?></h2>
            <h3><?php print $isvada; ?></h3>
    </body>
</html>