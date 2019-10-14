<?php

require 'functions/form/core.php';
require 'functions/html/generators.php';

$form = [
    'attr' => [
        'action' => 'index.php',
    ],
    'fields' => [
//       
        'teemname' => [
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

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Templates</title>
        <style>
            .button-container {
                display:inline-block;
            }
            .field-container {
                display:inline-block;
            }
        </style>
    </head>
    <body>
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>