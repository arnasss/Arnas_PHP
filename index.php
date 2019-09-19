<?php

$banko_report = [
    [
        'name' => 'IKI Darbo Užmokestis',
        'amount' => 600
    ],
    [
        'name' => 'Kalvarijų Načnykas',
        'amount' => -15
    ],
    [
        'name' => 'Circle K',
        'amount' => -30
    ],
    [
        'name' => 'Sweddbank bankomatas Antakalnis',
        'amount' => -100
    ]
];

foreach($banko_report as $israso_idx => $israsas){
    if ($israsas['amount'] > 0) {
        $banko_report[$israso_idx]['css_class'] = 'income';
    } else {
        $banko_report[$israso_idx]['css_class'] = 'expense';
    }    
    }
    
var_dump($banko_report);
