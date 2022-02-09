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