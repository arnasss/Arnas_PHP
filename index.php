<?php

$kokia_kava = rand(0, 2);

if ($kokia_kava === 0) {
    $kava = 'black-coffe';
} elseif ($kokia_kava === 1) {
    $kava = 'latte';
} else {
    $kava = 'tee';
}

$text = "Gersiu $kava";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="includes/normalize.css">
        <style>
            .black-coffe {
                background-color: black;
                color: white;
                display: flex;
            }
            .latte {
                background-color: red;
                display: flex;
            }
            .tee {
                background-color: green;
                display: flex;

            }
            .ligev {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;

            }
        </style>
    </head>
    <body class="<?php print $kava; ?>">
        <div class="ligev">
            <h1><?php print $text; ?></h1>
        </div>
    </body>
</html>