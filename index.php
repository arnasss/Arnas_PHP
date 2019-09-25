<?php
$x = rand(1, 20);

function is_prime($x) {
    for ($i = 2; $i < $x; $i++) {
        if ($x % $i == 0) {
            return 'nėra';
        }
    }
    return 'yra';
}

$text = $x . ' ' . is_prime($x) . ' pirminis sk.'

?>
<html>
    <body>
        <h1><?php print $text; ?></h1>
    </body>
</html>