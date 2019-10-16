<?php

require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';

$nickname = $_COOKIE['player_info_nickname'];

$form = [
    'title' => "Go for it, $nickname",
    'fields' => [
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Kick the ball'
        ],
    ],
    'callbacks' => [
        'success' => 'form_success'
    ]
];


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Templates</title>
    </head>
    <body>
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>