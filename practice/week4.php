<?php

# ----------0--------1---------2
$moves = ['rock', 'paper', 'scissors']; # Array of strings

$strawsLengths= [2, 2, 2, 2, 2, 1];

$mixed = ['rock', 1, .04, true];

// echo $moves[0];
// echo $moves[1];
// echo $moves[2];
// echo $moves[3]; Undefined, can't take the data from outside the array

// var_dump($moves); # helpful for debugging

$randomNumber = rand(0, 2);

# Test each line of code as you go
// var_dump($randomNumber);

$move = $moves[$randomNumber];

// var_dump($move);

# Associative array

// $coin_values = [
//     'penny' => .01, 
//     'nickel' => .05, 
//     'dime' => .10, 
//     'quarter' => .25
// ];

// $coin_counts = [
//     'penny' => 100, 
//     'nickel' => 25, 
//     'dime' => 100, 
//     'quarter' => 34
// ];

// var_dump($coin_values['quarter']);

// asort($coin_counts);

// arsort($coin_counts);

// ksort($coin_counts);

// krsort($coin_counts);

// var_dump($coin_counts);

// $cards = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// shuffle($cards);

// var_dump($cards);

#                       alias    alias (can be anything)
// foreach($coin_counts as $key => $value) {
//     var_dump($key);
//     var_dump($value);
// }

// foreach($coin_counts as $coin => $count) {
//     var_dump($coin);
//     var_dump($count);
// }

// $total = 0;

// foreach($coin_counts as $coin => $count) {

//     $total = $total + ($count * $coin_values[$coin]);

// }

// var_dump($total);

# Multidimensional Array
// $coins = [
//     'penny' => [100, .01],
//     'nickel' => [25, .05],
//     'dime' => [100, .10],
//     'quarter' => [34, .25],
//     'halfDollar' => [10, .50]
// ];

// $total = 0;

// foreach($coins as $coin => $info) {

//     $total = $total + ($info[0] * $info[1]);

// }

# Associative Array
$coins = [
    'penny' => [
        'count' => 100, 
        'value' => .01
    ],
    'nickel' => [
        'count' => 25, 
        'value' => .05
    ],
    'dime' => [
        'count' => 100, 
        'value' => .10
    ],
    'quarter' => [
        'count' => 34, 
        'value' => .25
    ],
    'halfDollar' => [
        'count' => 10, 
        'value' => .50
    ]
];


$total = 0;

foreach($coins as $coin => $info) {

    $total = $total + ($info['count'] * $info['value']);

}

// var_dump($total);


$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];

shuffle($cards);
#                    array ---  start ----- length
$playerCards = array_splice($cards, 0, count($cards) / 2);

// var_dump($playerCards);
// var_dump($cards);
$computerCards = $cards;

# negative to start at 0th position
// $playerDraw = $playerCards[count($playerCards) - 1];

// var_dump($playerCards);

$playerDraw = array_pop($playerCards);

// var_dump($playerCards);
// var_dump($playerDraw);

// var_dump(date('F j Y', ));
// var_dump(strtolower('AbCddD'));
// var_dump(strtoupper('AbCddD'));

// var_dump(rand());
// var_dump(rand(0, 10));

// $foo = 'Cat';
// $newFoo = strtoupper($foo);

// var_dump($foo);
// var_dump($newFoo);


// $coin = ['heads', 'tails'];

// # Player's choice
// $randomNumber = rand(0, 1);
// $player1Choice = $coin[$randomNumber];

// # Coin flip
// $randomNumber = rand(0, 1);
// $flip = $coin[$randomNumber];

// if ($player1Choice == $flip) {
//     var_dump('Player 1 wins!');
// } else {
//     var_dump('Player 1 lost :(');
// }


// $moves = ['rock', 'paper', 'scissors'];
// $player1Move = $moves[rand(0, 2)];
// $player2Move = $moves[rand(0, 2)];

// var_dump($player1Move);
// var_dump($player2Move);

// if ($player1Move == $player2Move) {
//     var_dump('Tie');
// } elseif ($player1Move == 'rock' and $player2Move == 'paper') {
//     var_dump('Player 2 wins');
// } elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
//     var_dump('Player 1 wins');
// }

// var_dump($player1Choice);

// $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// foreach ($numbers as key => $number) {
//     var_dump($number);
// }

// for ($i = 0, $i <= 10; $i++) {
//     var_dump($i);
// }

// for ($i = 0, $i <= 10; $i++) {
//     var_dump($i);
// }

// for ($i = 0, $i <= 10; $i) {
//     var_dump($i);
// }

$i = 0;
while ($i < 10) {
    var_dump($i);
    $i++;
}