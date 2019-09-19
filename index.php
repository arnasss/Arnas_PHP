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

$balance = 0;
$total_income = 0;
$total_expenses = 0;

foreach ($banko_report as $israso_idx => $israsas) {
    $balance += $israsas['amount'];

    if ($israsas['amount'] > 0) {
        $total_income += $israsas['amount'];
        $banko_report[$israso_idx]['css_class'] = 'income';
    } else {
        $total_expenses += $israsas['amount'];
        $banko_report[$israso_idx]['css_class'] = 'expense';
    }
    $banko_report[$israso_idx]['text'] = "{$israsas['name']}: {$israsas['amount']}";
};

$text_h2 = "Balansas: $balance eur.";
$text_h3 = "Įplaukos: $total_income eur.";
$text_h3_2 = "Išlaidos: $total_expenses eur.";

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
        <h2><?php print $text_h2; ?></h2>
        <h3><?php print $text_h3; ?></h3>
        <h3><?php print $text_h3_2; ?></h3>
        <ul>
            <?php foreach ($banko_report as $israsas): ?> 
                <li class="<?php print $israsas['css_class'] ?>"><?php print $israsas['text']; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>