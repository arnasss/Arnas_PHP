<?php

require('functions/file.php');

session_start();
var_dump($_SESSION);
if (isset($_SESSION['user'])) {
    $array = file_to_array('data/users.txt');
    foreach ($array as $user) {
        if ($_SESSION['user'] === $user['email']) {
            $name = $user['full_name'];
            break;
        }
    }
    $status = "Sveiki sugrįžę, $name! Jūs prisijungęs!";
} else {
    $status = 'Jūs neprisijungęs';
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1><?php print $status; ?></h1>
</body>
</html>