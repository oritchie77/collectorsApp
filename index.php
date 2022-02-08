<?php
require_once './functions.php';

$db = new PDO('mysql:host=db; dbname=gamecollectorapp', 'root', 'password');
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
    <header>
        <h1>Meeple for the People</h1>
    </header>
    <main>

        <h2>Your Collection</h2>
        <div class="gameCardsContainer">
            <?= $gameCards ?>
            <div class="gameCard">
                <form>

                </form>

            </div>
        </div>
    </main>

</body>

</html>
