<?php 

date_default_timezone_set("Europe/Vilnius");

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP lydės ir <?php print date("Y/m/d", strtotime('+1 day'));?></title>
</head>
<body>
    <h1>Arnas - PHP su manim buvo <br> ir <?php print date("H:i:s", strtotime('-1 hour'))?></h1>
    <p><?php print date('Y', strtotime('+1 year'));?> ne už kalnų!</p>
</body>
</html>

<html>
<head>
    <meta charset="UTF-8">
    <title><?php print 'Aš , '. date("l") .' ir PHP';?> </title>
</head>
<body>
    <h1>Arnas - HTML <?php print 'ir PHP';?> asas <br> jau nuo ,<?php print  date("Y");?> metų</h1>
    <p>Viskas prasidėjo <?php print  date("m") .'<br>' .'mėnesio, ' . date("d") .' dieną!';?> </p>
</body>
</html>
