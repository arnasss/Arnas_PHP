<?php

$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

$pavadinimas = 'Buitinė skaičiuoklė';


if ($grizai_isgeres && $grizai_velai) {
    $ispausdink = 'Grižai vėlai ir išgėres';
} elseif ($grizai_isgeres && !$grizai_velai) {
    $ispausdink = 'Grįžai išgėres';
} elseif (!$grizai_isgeres && $grizai_velai) {
    $ispausdink = 'Grižai vėlai';
} else {
    $ispausdink = 'Nieko nepadarei';
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
