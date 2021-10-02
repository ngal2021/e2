<?php

// Create an array with the moves of the game, with three elements: Rock, Paper, Scissors
$moves = ['rock', 'paper', 'scissors'];

// For Player A, choose a random element from the moves array
$playerA_move = $moves[rand(0, 2)];

// For Player B, choose a random element frm the moves array
$playerB_move = $moves[rand(0, 2)];

// Debugging and checking process along the way
var_dump($playerA_move);
var_dump($playerB_move); 

// Compare Player A and Player B's moves to determine if it is a tie or if there is a winner.
// If the moves match, it is a tie.
// Else, compare the moves. Rock beats scissors, scissors beats paper, and paper beats rock.
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

var_dump($winner);

// In the view, report the results: Player A's move, Player B's move, the winner

require 'index-view.php';