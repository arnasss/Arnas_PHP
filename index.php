<?php

$sauleta = rand(0, 1);
$lyja = rand(0, 1);

if ($sauleta && $lyja) {
    $ispausdink = 'Saulėta su lietum';
    $oras = 'sauleta_su_lietum';
} elseif ($sauleta && !$lyja) {
    $ispausdink = 'Saulėta';
    $oras = 'sauleta';
} elseif (!$sauleta && $lyja) {
    $ispausdink = 'Lyja';
    $oras = 'lyja';
} else {
    $ispausdink = 'Debesuota';
    $oras = 'debesuota';
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <style>
            .sauleta{
                background-image: url(https://pngimg.com/uploads/sun/sun_PNG13449.png);
            }
            .lyja {
                background-image: url(http://img.clipartlook.com/rain-20cloud-20clipart-rain-cloud-clipart-400_400.png);
            }
            .debesuota {
                background-image: url(https://www.overtsoftware.com/wp-content/uploads/2011/12/img-thing.jpg);
            }
            .sauleta_su_lietum {
                background-image: url(http://pluspng.com/img-png/rain-and-sun-png-cloud-drizzle-rain-shower-storm-sun-weather-icon-512.png);
            }
            .ligevimui {
                    display: inline-block;
            }
            .pav_nust {
                height: 300px;
                width: 300px;
                background-size: cover;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <div class="<?php print $oras; ?> pav_nust"></div>
        <h1 class="ligevimui"><?php print $ispausdink; ?></h1>
    </body>
</html>