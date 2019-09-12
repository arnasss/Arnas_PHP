<?php
$laikas = date('s');
$mazejantis = 59 - $laikas;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            .bomb {
                background-color: blue;
                height: 100px;
                width: 100px;
                color: white;
            }
            .kabum0 {
                background-color: red;
            }
            h1 {
                padding-top:  30px;
                padding-left: 30px;
            }
        </style>
    </head>
    <body>
        <div class="bomb kabum<?php print $mazejantis; ?>">
            <h1><?php print $mazejantis; ?></h1>
        </div>
    </body>
</html>