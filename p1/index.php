<?php

$moves = ['rock', 'paper', 'scissors'];

// Select player A's move
$playerA_move = $moves[rand(0, 2)];

// Select player B's move
$playerB_move = $moves[rand(0, 2)];

// Decide the winner
if ($playerA_move == $playerB_move) {
    $winner ='undetermined. Player A and Player B tie';
} elseif ($playerA_move == 'rock' and $playerB_move == 'scissors') {
    $winner = 'Player A';
} elseif ($playerA_move == 'scissors' and $playerB_move == 'paper') {
    $winner = 'Player A';
} elseif ($playerA_move == 'paper' and $playerB_move == 'rock') {
    $winner = 'Player A';
} elseif ($playerA_move == 'scissors' and $playerB_move == 'rock') {
    $winner = 'Player B';
} elseif ($playerA_move == 'paper' and $playerB_move == 'scissors') {
    $winner = 'Player B';
} elseif ($playerA_move == 'rock' and $playerB_move == 'paper') {
    $winner = 'Player B';
}

require 'index-view.php';