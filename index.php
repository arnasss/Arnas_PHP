<?php

$x = 7;
$y = 4;

function sum($x, $y) {
    return $x + $y;
}

$text = "$x ir $y suma: " . sum($x, $y);

?>
<html>
    <body>
        <h1><?php print $text; ?></h1>
    </body>
</html>