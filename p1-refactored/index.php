<?php

// Refactor selecting move from array
function selectMove()
{
    $moves = ['rock', 'paper', 'scissors'];
    return $moves[rand(0, 2)];
}

// Refactor determining winner
function determineWinner($playerA_move, $playerB_move)
{
    if ($playerA_move == 'rock' and $playerB_move == 'scissors') {
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
    return $winner;
}

// Select player A's move
$playerA_move = selectMove();

// Select player B's move
$playerB_move = selectMove();

// Decide the winner
determineWinner($playerA_move, $playerB_move);

require 'index-view.php';