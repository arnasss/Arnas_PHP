<?php
require 'functions/form/core.php';
require 'functions/html/generators.php';

$form = [
    'fields' => [
        'teamname' => [
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Team name',
                ]
            ],
            'validators' => [
                'validate_not_empty'
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
        'teams_name' => 'pirma',
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
        'teams_name' => 'antra',
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

function array_to_file($array, $file) {
    $data = json_encode($array);
    $failas = file_put_contents($file, $data);
    if ($failas !== false){
        return TRUE;
    } 
}


function file_to_array($file){
    $data = file_get_contents($file);
    if ($data !== 0){
        $array = json_decode($data, true);
        return $array;
    } else {
        return false;
    }
}

function form_success($new_team) {
    $array = file_to_array('data/teams.txt');
    $new_team['players'] = [];
    $array[] = $new_team;
    array_to_file($array, 'data/teams.txt');
}

$filtered_input = get_form_input($form);
if($filtered_input) {
    validate_form($filtered_input, $form);
}
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