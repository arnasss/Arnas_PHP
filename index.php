<?php

function slot_run ($size) {
    $array = [];
    for ($x = 0; $x < $size; $x++) {
       for ($i = 0; $i < $size; $i++) {
            $array[$x][$i] = rand(0, 1);
       }
    }
    return $array;
}

$slot = slot_run(5);
var_dump($slot);

?>

