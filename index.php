<?php

$grazinti2 = rand(101, 200);
$grazinti1 = rand(201, 300);
$skola = rand(301, 400);

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Skolos skaiciuokle</h1>
        <h2>Jei paėmei <?php print $skola; ?> eurų</h2>
        <h3>Su dviem kabančiais gražinsi <?php print $grazinti1; ?></h3>
        <h3>Su vienu kabančiu gražinsi <?php print $grazinti2; ?></h3>
    </body>
</html>