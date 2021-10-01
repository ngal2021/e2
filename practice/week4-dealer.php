<?php

$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($cards);

$playerCards = [];
$computerCards = [];

// foreach($cards as $card ) {
//     $playerCards = $card[1] + $card[3] + $card[5] + $card[7] + $card[9];
//     $computerCards = $card[0] + $card[2] + $card[4] + $card[6] + $card[8];
// }

for($i = 0; $i < 9; $i++) {
    $playerCards = [];
    $computerCards = [];
}

var_dump($playerCards);
var_dump($computerCards);

#making changes to see if git is still connected