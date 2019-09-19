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

foreach ($banko_report as $israso_idx => $israsas) {
    if ($israsas['amount'] > 0) {
        $banko_report[$israso_idx]['css_class'] = 'income';
    } else {
        $banko_report[$israso_idx]['css_class'] = 'expense';
    }
};

?>
<html>
    <head>
        <style>
            .income {
                color: green;
            }
            .expense {
                color: red;
            }
        </style>
    </head>
    <body>
        <h1>Banko ataskaita</h1>
        <ul>
<?php foreach ($banko_report as $israsas) {
    print "<li class='$israsas[css_class]'>$israsas[name]: $israsas[amount]</li>";
}
?>
        </ul>
    </body>
</html>