<?php

require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';

function get_options() {
    $array = file_to_array('data/teams.txt');
    foreach ($array as $value) {
        $komandos[] = $value['team_name'];
    }
}

$form = [
    'fields' => [
        'team_name' => [
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Team name',
                ]
            ],
            'validators' => [
                'validate_not_empty',
                'validate_team'
            ]
        ],
        'team_select' => [
            'type' => 'select',
            'value' => '',
            'options' =>
            $komandos
            ,
            'validators' => [
                'validate_not_empty'
            ]
        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Join'
        ],
    ],
    'callbacks' => [
        'fail' => 'form_fail',
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