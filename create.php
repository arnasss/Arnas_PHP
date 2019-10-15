<?php

require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';

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
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Create'
        ],
    ],
    'callbacks' => [
        'fail' => 'form_fail',
        'success' => 'form_success'
    ]
];


$teams = [
    [
        'team' => 'pirma',
        'players' => [
            [
                'nickname' => '',
                'score' => ''
            ],
            [
                'nickname' => '',
                'score' => ''
            ]
        ]
    ],
    [
        'team' => 'antra',
        'players' => [
            [
                'nickname' => '',
                'score' => ''
            ],
            [
                'nickname' => '',
                'score' => ''
            ]
        ]
    ]
];

function form_success($new_team) {
    $array = file_to_array('data/teams.txt');
    $new_team['players'] = [];
    $array[] = $new_team;
    array_to_file($array, 'data/teams.txt');
}

$filtered_input = get_form_input($form);

if ($filtered_input) {
    validate_form($filtered_input, $form);
}

function validate_team($field_input, &$field) {
    $array = file_to_array('data/teams.txt');
    var_dump($array);
    if (!empty($array)) {
        foreach ($array as $value) {
            if ($value['team_name'] == $field_input) {
                $field['error'] = 'Tokia komanda jau yra!';
                return false;
            }
        }
    }
    return true;
}

function form_fail(){}

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