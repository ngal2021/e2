<?php

// Create an array with the moves of the game, with three elements: Rock, Paper, Scissors
$moves = ['rock', 'paper', 'scissors'];

// For Player A, choose a random element from the moves array
$player1Move = $moves[rand(0, 2)];

// For Player B, choose a random element frm the moves array
$player2Move = $moves[rand(0, 2)];

// Debugging and checking process along the way
var_dump($player1Move);
var_dump($player2Move); 

// Compare Player A and Player B's moves to determine if it is a tie or if there is a winner.
// If the moves match, it is a tie.
// Else, compare the moves. Rock beats scissors, scissors beats paper, and paper beats rock.
// In the view, report the results: Player A's move, Player B's move, the winner

require 'index-view.php';