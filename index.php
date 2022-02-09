<?php
require_once './functions.php';

$db = new PDO('mysql:host=db; dbname=gamecollectorapp', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if(isset($_POST['name'])) {
    $otherQuery = $db->prepare(
        'INSERT INTO `games` (`name`, `play_time_in_mins`, `expansions_available`, `max_number_of_players`, `min_number_of_players`) VALUES (:name, :playTime, :expansion, :maxPlayers, :minPlayers);');

    $name = $_POST['name'];
    $playTime = $_POST['play_time_in_mins'];
    $expansion = $_POST['expansions_available'];
    $maxPlayers = $_POST['max_number_of_players'];
    $minPlayers = $_POST['min_number_of_players'];

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
            <div class="navHex">
                <img src="home.png" alt="home icon">
            </div>
            <div class="navHex">
                <img src="folder.png" alt="folder icon">
            </div>
            <div class="navHex">
                <img src="user.png" alt="user icon">
            </div>
        </div>
        <div class="navHexRow last">
            <div class="navHex">
                <img src="friends.png" alt="group icon">
            </div>
            <div class="navHex">
                <img src="shop.png" alt="online shop icon">
            </div>
        </div>
    </div>
    <div class="addGameToCollection">
        <p>Add a Game to your Collection:</p>
        <div class="navHex">
            <a href="addGame.php"><img src="addTo.png"></a>
        </div>
    </div>
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
                  <div class="gameCard newGame">
                        <a href="addGame.php"><h3>Add a new Game!!!</h3></a>

                  </div>
             </div>
        </section>
    </main>

</body>

</html>
