<?php
require_once './functions.php';

$db = new PDO('mysql:host=127.0.0.1: 3306; dbname=colletor', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT * FROM `games`');
$query->execute();
$allGames = $query->fetchAll();


 $gameCards = displayAllGameCards($allGames);
?>

<html lang="en-GB">

<head>
    <title>Collector App</title>
    <link rel="stylesheet" href="normalize.css" type="text/css">
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>

<body>
    <nav>
        <h1>Meeple for the People</h1>
    </nav>
    <main>

        <h2>Your Collection</h2>
        <div class="gameCardsContainer">
            <?= $gameCards ?>
        </div>
    </main>

</body>

</html>
