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
</head>

<body>
    <main>
      <h1>Board Games</h1>
        <h2>Your Collection</h2>
        <div class="GameCardsContainer">
            <?= $gameCards ?>
        </div>
    </main>

</body>

</html>
