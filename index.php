<?php

$rand1 = rand(1, 100);
$rand2 = rand(101, 200);
$rand3 = rand(201, 300);
$rand4 = rand(301, 400);

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="body">
            <h1>Skolos skaiciuokle</h1>
            <h3>Jei paėmei <?php print $rand4; ?> eurų</h3>
            <h3>Su dviem kabančiais gražinsi <?php print $rand3; ?></h3>
            <h3>Su vienu kabančiu gražinsi <?php print $rand2; ?></h3>
        </div>
    </body>
</html>