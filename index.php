<?php
$x = rand(1, 20);

function is_prime($x) {
    for ($i = 2; $i < $x; $i++) {
        if ($x % $i == 0) {
            return false;
        }
    }
    
    return true;
}

$text = $x . ' ' . (is_prime($x) ? 'yra' : 'nera'). ' pirminis sk.'

?>
<html>
    <body>
        <h1><?php print $text; ?></h1>
    </body>
</html>