<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;
class Functions extends TestCase
{

    public function testSuccessDisplayAllGameCards()
    {
        $input = [['id' => 1, 'name' => 'Catan', 'play_time_in_mins' => 120, 'expansions_available' => 1, 'max_number_of_players' => 3, 'min_number_of_players' => 4]];
        $expectedOutput = '<div class="gameCard"><h3>Catan</h3><p>Play time: 120</p><p>Players: 4 - 3</p><p>Number of expansions: 1</p></div>';
        $actualOutput = displayAllGameCards($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testFailureDisplayAllGameCards()
    {
        $input = ['id' => 1, 'name' => 'Catan', 'play_time_in_mins' => 120, 'expansions_available' => 1, 'max_number_of_players' => 3, 'min_number_of_players' => 4];
        $expectedOutput = 'Incorrect Data type! Must be a Multidimensional array';
        $actualOutput = displayAllGameCards($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testMalformedDisplayAllGameCards()
    {
        $input = 'banana';
        $this->expectException(TypeError::class);
        $output = displayAllGameCards($input);
    }
}


