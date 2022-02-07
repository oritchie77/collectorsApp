<?php
$db = new PDO('mysql:host=127.0.0.1: 3306; dbname=colletor', 'root', 'password');

$query = $db->prepare('SELECT * FROM `games`');

$query->execute();

$allGames = $query->fetchAll();

print_r($allGames);

require_once './functions.php';
?>

<html lang="en-GB">

<head>
    <title>Collector App</title>

</head>

<body>

</body>


</html>
