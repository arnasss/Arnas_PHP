<?php

$months = 12;
$wallet = 1000;
$month_income =700;
$month_expenses = rand(450, 800);

for($x = 0; $x <= $months; $x++) {
    $wallet = $wallet + $month_income - $month_expenses;
}

$text = "Po $months m. prognuzuojamas likutis :$wallet"
        
?>

<html>
    <body>
        <h1>Walet Forecast</h1>
        <h2><?php print $text; ?></h2>
    </body>
</html>