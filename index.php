<?php

$sheep = ['bleee'];

for ($x = 0; $x < 4; $x++) {
    $sheep[0] = 'tekstas';
    $sheep[] = &$sheep[$x];
}
foreach ($sheep as $key => $shep) {
    unset($sheep[$key]);
    $sheep[$key] = $shep;
}


$sheep[3] = 'velniop sistema';
var_dump($sheep);

?>