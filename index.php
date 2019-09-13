<?php

$sunny = rand(0, 1);

if ($sunny) {
    $isvada = 'sauleta';
} else {
    $isvada = 'debesuota';
}

?>
<html>
        <head>
            <meta charset="UTF-8">
            <style>
                .sauleta {
                    background-image: url(https://solarsystem.nasa.gov/system/basic_html_elements/x11561_Sun.png.pagespeed.ic.0igPUXQBpc.png);
                    height: 100px;
                    width: 100px;
                    background-size: cover;
                }
                .debesuota {
                    background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_QOa5pS-meIekvdMFUsW_Rwio2Sj9fj8IOR5ylllrJajpSo-j);
                    height: 100px;
                    width: 100px;
                    background-size: cover;
            </style>
        </head>
        <body>
            <div class="<?php print $isvada?>"></div>
    </body>
</html>