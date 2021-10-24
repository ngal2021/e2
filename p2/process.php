<?php

session_start();

$playerMove = $_POST['choice'];

$computerMove = ['rock', 'paper', 'scissors'][rand(0, 2)];

$results = determineWinner($playerMove, $computerMove);

$_SESSION['game'] = [
    'results' => $results,
    'playerMove' => $playerMove,
    'computerMove' => $computerMove,
];

header('Location: index.php');

function determineWinner($playerMove, $computerMove)
{
    if ($playerMove == $computerMove) {
        return 'tie';
    } else if ($playerMove == 'rock' and $computerMove == 'scissors' or $playerMove == 'scissors' and $computerMove == 'paper' or $playerMove == 'paper' and $computerMove == 'rock') {
        return 'player';
    } else {
        return 'computer';
    }
}