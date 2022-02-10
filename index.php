<?php
require_once './functions.php';

$db = new PDO('mysql:host=db; dbname=gamecollectorapp', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if(isset($_POST['name'])) {
    if(empty($_POST['name'])) {
        echo 'A string is required';
    } else {
        $name = $_POST['name'];
    }
    if(empty($_POST['play_time_in_mins'])) {
        echo 'A Number is required';
    } else {
        $playTime = $_POST['play_time_in_mins'];
        if (preg_match('/[^0-9\s]+$/', $playTime)) {
            echo 'Must be a number';
        }
    }
    if(empty($_POST['expansions_available'])) {
        echo 'A Number is required';
    } else {
        $expansion = $_POST['expansions_available'];
        if (preg_match('/[^0-9\s]+$/', $expansion)) {
            echo 'Must be a number';
        }
    }
    if(empty($_POST['max_number_of_players'])) {
        echo 'A Number is required';
    } else {
        $maxPlayers = $_POST['max_number_of_players'];
        if (preg_match('/[^0-9\s]+$/', $maxPlayers)) {
            echo 'Must be a number';
        }
    }
    if(empty($_POST['min_number_of_players'])) {
        echo 'A Number is required';
    } else {
        $minPlayers = $_POST['min_number_of_players'];
        if (preg_match('/[^0-9\s]+$/', $minPlayers)) {
            echo 'Must be a number';
        }
    }
    $otherQuery = $db->prepare(
        'INSERT INTO `games` (`name`, `play_time_in_mins`, `expansions_available`, `max_number_of_players`, `min_number_of_players`) VALUES (:name, :playTime, :expansion, :maxPlayers, :minPlayers);');


    $otherQuery->execute([':name' => $name, ':playTime' => $playTime, ':expansion' => $expansion, ':maxPlayers' => $maxPlayers, ':minPlayers' => $minPlayers]);
}
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
        <div class="navHexContainer">
            <div class="navHexRow first">
                <a class="navHex" href="index.php">
                    <img src="home.png" alt="home icon">
                    <p>home</p>
                </a>
                <a class="navHex" href="index.php">
                    <img src="folder.png" alt="folder icon">
                    <p>games</p>
                </a>
            </div>
            <div class="navHexRow last">
                <a class="navHex" href="https://www.amazon.co.uk/s?k=board+games&sprefix=boar%2Caps%2C64&ref=nb_sb_ss_ts-doa-p_1_4" target="_blank">
                    <img src="shop.png" alt="online shop icon">
                    <p>shop</p>
                </a>
            </div>
        </div>
        <a class="addGameToCollection" href="addGame.php">
            <p>Add a Game to your Collection:</p>
            <div class="navHex">
                <img src="addTo.png" alt="go to icon">
            </div>
        </a>
    </nav>
    <header>
        <div class="logoBorder">
            <div class="logoHex">
                <h1>Meeple for the People</h1>
            </div>
        </div>
    </header>
    <main>
        <section class="gameCollection">
             <h2>Your Collection</h2>
             <div class="gameCardsContainer">
                   <?= $gameCards ?>
             </div>
        </section>
    </main>

</body>

</html>