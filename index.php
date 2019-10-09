<?php

require 'functions/form/core.php';
require 'functions/html/generators.php';

$form = [
    'attr' => [
        'action' => 'index.php',
        'class' => 'bg-black'
    ],
//    'title' => 'Kalėdų norai',
    'fields' => [
//        'first_name' => [
//            'type' => 'text',
//            'label' => 'Vardas:',
//            'extra' => [
//                'attr' => [
//                    'placeholder' => 'Enter Name',
//                    'class' => 'input-text',
//                    'id' => 'first-name'
//                ]
//            ],
//            'validators' => [
//                'validate_not_empty'
//            ]
//        ],
        'nickname' => [
            'type' => 'text',
            'label' => 'Nickname:',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter Nickname',
                    'class' => 'input-text',
                ]
            ],
            'validators' => [
                'validate_not_empty'
            ]
        ],
        'Password' => [
            'type' => 'password',
            'label' => 'Password:',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter Name',
                    'class' => 'input-text',
                    'id' => 'first-name'
                ]
            ],
            'validators' => [
                'validate_not_empty',
                'validate_password'
            ]
        ],
//        'last_name' => [
//            'type' => 'text',
//            'label' => 'Pavardė:',
//            'extra' => [
//                'attr' => [
//                    'placeholder' => 'Enter Surname',
//                    'class' => 'input-text',
//                    'id' => 'last-name'
//                ]
//            ],
//            'validators' => [
//                'validate_not_empty'
//            ]
//        ],
//        'age' => [
//            'type' => 'text',
//            'label' => 'Metai:',
//            'extra' => [
//                'attr' => [
//                    'placeholder' => 'Enter Age',
//                    'class' => 'input-text',
//                    'id' => 'last-name'
//                ]
//            ],
//            'validators' => [
//                'validate_not_empty',
//                'validate_is_number',
//                'validate_is_positive',
//                'validate_max_100'
//            ]
//        ],
//        'wish' => [
//            'type' => 'select',
//            'value' => 'tv',
//            'label' => 'Kalėdom noriu:',
//            'extra' => [
//                'attr' => [
//                    'class' => 'input-select',
//                    'id' => 'wish'
//                ]
//            ],
//            'options' => [
//                'car' => 'BMW',
//                'tv' => 'Teliko',
//                'socks' => 'Kojinių'
//            ],
//            'validators' => [
//                'validate_not_empty'
//            ]
//        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Siųsti'
        ],
//        'reset' => [
//            'type' => 'reset',
//            'value' => 'Išvalyti'
//        ]
    ],
    'message' => 'Užpildyk formą!',
    'callbacks' => [
        'fail' => 'form_fail',
        'success' => 'form_success'
    ]
];

function form_fail($filtered_input, &$form) {
    $form['message'] = 'Retard alert!';
}

function form_success($filtered_input, &$form) {
    $form['message'] = 'You In';
}

$filtered_input = get_form_input($form);
if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Templates</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body>
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>