<?php

function displayGameCard($allGames) {
     $returnedHtml = '';
    foreach($allGames as $game) {
        $returnedHtml .= "<div class='gameCard'><h3> Game: " . $game['name'] . "</h3>" .
            "<p> Play time: " . $game['play_time_in_mins'] . "</p>" .
            "<p> Players: " . $game['min_number_of_players'] . " - " . $game['max_number_of_players'] . "</p>" .
            "<P> Number of expansions: ". $game['expansions_available'] . "</p></div>";
    }
    return $returnedHtml;
}