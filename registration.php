<?php

require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';

$form = [

    'title' => 'Registruokis',
    'fields' => [
        'full_name' => [
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter Full Name',
                ]
            ],
            'validators' => [
                'validate_not_empty'
            ]
        ],
        'email' => [
            'type' => 'email',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter Email',
                ]
            ],
            'validators' => [
                'validate_not_empty',
                'validate_email',
                'validate_email_unique'
            ]
        ],
        'password' => [
            'type' => 'password',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter password',
                ]
            ],
            'validators' => [
                'validate_not_empty',
                'validate_password'
            ]
        ],
        'password_repeat' => [
            'type' => 'password',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Repeat password',
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
            'value' => 'Registruotis'
        ],
    ],
    'message' => 'Užpildyk formą!',
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