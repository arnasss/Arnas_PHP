<?php
require 'functions/form/core.php';
require 'functions/html/generators.php';

$form = [
    'attr' => [
        'action' => 'index.php',
    ],
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

function form_success($array, $file) {
    $data = json_encode($array);
    $failas = file_put_contents($file, $data);
    if ($failas !== false){
        return TRUE;
    } 
}

form_success($teams, 'data/teams.txt');

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