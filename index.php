<?php

$grikiai = 5000;
$grikiai_start = $grikiai;
for($days = 1; $grikiai >= 0; $days++) {
    $per_day = rand(200, 500);
    $grikiai -= $per_day;
}
$data = date('Y/m/d', strtotime('+' .("$days days")));
$text_h2 = "Rasta grikių: $grikiai_start g.";
$text_h3 = "Išgyvensiu dar $days dienas, iki $data";

?>
<html>
    <body>
        <h1>Kiek dienų galėsi valgyti grikius?</h1>
        <h2><?php print $text_h2; ?></h2>
        <h3><?php print $text_h3; ?></h3>
    </body>
</html>