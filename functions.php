<?php

function displayAllGameCards(array $allGames): string {
    if (count($allGames) === count($allGames, COUNT_RECURSIVE)) {
        return 'Incorrect Data type! Must be a Multidimensional array';
    } else {
        $returnedHtml = '';
        foreach ($allGames as $game) {
            $returnedHtml .= '<div class="gameCardBorder"><div class="gameCard"><h3>' . $game['name'] . '</h3>' .
                '<p>Play time: ' . $game['play_time_in_mins'] . '</p>' .
                '<p>Players: ' . $game['min_number_of_players'] . ' - ' . $game['max_number_of_players'] . '</p>' .
                '<p>Number of expansions: ' . $game['expansions_available'] . '</p></div></div>';
        }
        return $returnedHtml;
    }
}

function displayNavBar(){
    return'<nav>
    <div class="navHexContainer">
        <div class="navHexRow first">
            <a class="navHex" href="index.php">
                <img src="home.png" alt="home icon">
            </a>
            <a class="navHex" href="index.php">
                <img src="folder.png" alt="folder icon">
            </a>
            <a class="navHex" href="#">
                <img src="user.png" alt="user icon">
            </a>
        </div>
        <div class="navHexRow last">
            <a class="navHex" href="#">
                <img src="friends.png" alt="group icon">
            </a>
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
</nav>';
}