<?php

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
        <section class="formContainer">
            <div class="hexBorder addGameForm">
                <div class="hexBody addGameForm">
                     <form method="post" action="index.php" class="addGameForm">
                         <div><label for="name">Game name:</label><input type="text" id="name" name="name"></div>
                         <div><label for="playTime">Play time: </label><input type="number" id="playTime" name="play_time_in_mins" placeholder="in mins?"></div>
                         <div><label for="minPlayers">Min number of Players:</label><input type="Number" id="minPlayers" name="min_number_of_players" placeholder="0"></div>
                         <div><label for="maxPlayers"></label>Max number of Players<input type="Number" id="maxPlayers" name="max_number_of_players" placeholder="0"></div>
                         <div> <label for="expansions"></label>Number of Expansions available: <input type="Number" id="expansions" name="expansions_available" placeholder="0"></div>
                         <div> <input type="submit" value="Add to Collection!">
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>

