<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;
class Functions extends TestCase
{

    public function testSuccessDisplayGameCard()
    {
        $input = [ ['id' => 1, 'name' => 'Catan', 'play_time_in_mins' => 120, 'expansions_available' => 1, 'max_number_of_players' => 3, 'min_number_of_players' => 4]];
        $expectedOutput = "<div class='gameCard'><h3> Game: Catan</h3><p>Play time: 120</p><p>Players: 4 - 3</p><p>Number of expansions: 1</p></div>";
        $actualOutput = displayGameCard($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testFailureDisplayGameCard()
    {
        $input = ['id' => 1, 'name' => 'Catan', 'play_time_in_mins' => 120, 'expansions_available' => 1, 'max_number_of_players' => 3, 'min_number_of_players' => 4];
        $expectedOutput = 'this is not an array';
        $actualOutput = displayGameCard($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testMalformedDisplayGameCard()
    {
        $input = 'banana';
        $this->expectException(TypeError::class);
        $output = displayGameCard($input);
    }
}
