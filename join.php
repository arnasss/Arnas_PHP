<?php

require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';

function get_options() {
    $teams = file_to_array('data/teams.txt');
    if (!empty($teams)) {
        foreach ($teams as $team) {
            $team_names[$team['team_name']] = $team['team_name'];
        }
        return $team_names;
    }
}



$form = [
    'title' => 'Join Team',
    'fields' => [
        'player_name' => [
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Player name',
                ]
            ],
            'validators' => [
                'validate_not_empty',
                'validate_player'
            ]
        ],
        'team_select' => [
            'type' => 'select',
            'value' => '',
            'options' => get_options(),
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
        'success' => 'form_success'
    ]
];

function form_success($filtered_input, $form) {
    $teams = file_to_array('data/teams.txt'); 
    foreach ($teams as &$team) {
        if ($team['team_name'] === $filtered_input['team_select']) {
            $team['players'][] = [
                    'nickname' => $filtered_input['player_name'],
                    'score' => 0
                ];
        }
    }
    array_to_file($teams, 'data/teams.txt');
    
    setcookie('cookie_team' ,$team['team_name'] , time() + 36000,  "/" );
    setcookie('cookie_nickname', $filtered_input['player_name'] , time() + 36000,  "/");

}

function validate_player($field_input, &$field) {
    $teams = file_to_array('data/teams.txt');
    foreach ($teams as $team) {
        foreach ($team['players'] as $player) {
            if(strtoupper($player['nickname']) == strtoupper($field_input)){
                $field['error'] = 'Toks zaidejas jau yra';
                return false;
            }
        }
    }
    return true;
}

$filtered_input = get_form_input($form);

if (!empty($filtered_input)) {
    $success = validate_form($filtered_input, $form);
}

function form_fail($filtered_input, $form) {
}

if (isset($_COOKIE['cookie_nickname'])) {
    $text = 'Jau prisijunges kaip ' .$_COOKIE['cookie_nickname'];
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Templates</title>
    </head>
    <body>
        <?php if (isset($_COOKIE['cookie_nickname'])): ?>
        <h2><?php print $text; ?></h2>
        <?php else: ?>
        <?php require 'templates/form.tpl.php'; ?>
        <?php endif; ?>
    </body>
</html>