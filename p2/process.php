<?php

session_start();

$playerMove = $_POST['choice'];

$computerMove = ['rock', 'paper', 'scissors'][rand(0, 2)];

$tie = $playerMove == $computerMove;

if (! $tie) {
    $winner = determineWinner($playerMove, $computerMove);
}

$_SESSION['results'] = [
    'winner' => $winner,
    'tie' => $tie,
    'playerMove' => $playerMove,
    'computerMove' => $computerMove,
];

header('Location: index.php');

function determineWinner($playerMove, $computerMove)
{
    if ($playerMove == 'rock' and $computerMove == 'scissors' or $playerMove == 'scissors' and $computerMove == 'paper' or $playerMove == 'paper' and $computerMove == 'rock') {
        $playerWon = true;
    } else {
        $playerWon = false;
    }
    return $playerWon;
}