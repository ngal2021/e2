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
    $playerCards[] = array_pop($cards);
    $computerCards[] = array_pop($cards);
    $i++;
}

// # Variation 1 - variable outside the loop and then alter it in the loop
// $dealTo = 'player';
// foreach ($cards as $key => $card) {
//     if ($dealTo =='player') {
//         $playerCards[] = array_pop($cards);
//         $dealTo = 'computer';
//     } else {
//         $computerCards[] = array_pop($cards);
//         $dealTo = 'player';
//     }
// }

// # Variation 2 - modulo operator
// foreach ($cards as $key => $card) {
//     if ($key % 2 == 0) {
//         $playerCards[] = array_pop($cards);
//     } else {
//         $computerCards[] = array_pop($cards);
//     }
// }

// # Variation 3 - popping the dealt card before the loop
// foreach ($cards as $key => $card) {
//     $cardToDeal = array_pop($cards);

//     if ($key % 2 == 0) {
//         $playerCards[] = $cardToDeal;
//     } else {
//         $computerCards[] = $cardToDeal;
//     }
// }

// # variable variables - dynamic variables
// foreach ($cards as $key => $card) {
//     if ($key % 2 == 0) {
//         $dealTo = 'playerCards';
//     } else {
//         $dealTo = 'computerCards';
//     }

//     $$dealTo[] = array_pop($cards);
// }


// # using a while loop
// $dealTo = 'player';
// while (count($cards) > 0) {
//     if ($dealTo == 'player') {
//         $playerCards[] = array_pop($cards);
//         $dealTo = 'computer';
//     } else {
//         $computerCards[] = array_pop($cards);
//         $dealTo = 'player';
//     }
// }

var_dump($playerCards);
var_dump($computerCards);

#making changes to see if git is still connected