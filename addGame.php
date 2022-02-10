<?php
require_once './functions.php';
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
             </a>
             <a class="navHex" href="index.php">
                <img src="folder.png" alt="folder icon">
             </a>
          </div>
            <div class="navHexRow last">

                <a class="navHex" href="https://www.amazon.co.uk/s?k=board+games&sprefix=boar%2Caps%2C64&ref=nb_sb_ss_ts-doa-p_1_4" target="_blank">
                    <img src="shop.png" alt="online shop icon">
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
        <section class="formContainer">
            <div class="hexBorder">
                <div class="hexBody">
                     <form method="post" action="index.php">
                         <div class="addGameForm">
                             <div>
                                 <h3>Add a Game</h3>
                             </div>
                            <div>
                                <label for="name">Game name:</label><input type="text" id="name" name="name">
                            </div>
                            <div>
                                <label for="playTime">Play time: </label><input type="number" id="playTime" name="play_time_in_mins" placeholder="in mins?">
                            </div>
                            <div>
                                <label for="minPlayers">Min number of Players:</label><input type="Number" id="minPlayers" name="min_number_of_players" placeholder="0">
                            </div>
                             <div>
                                 <label for="maxPlayers"></label>Max number of Players<input type="Number" id="maxPlayers" name="max_number_of_players" placeholder="0">
                             </div>
                             <div>
                                 <label for="expansions"></label>Number of Expansions: <input type="Number" id="expansions" name="expansions_available" placeholder="0">
                             </div>
                             <div>
                                 <input type="submit" value="Add to Collection!">
                             </div>
                         </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>

