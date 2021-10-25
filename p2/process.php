<?php

session_start();

$playerMove = $_POST['choice'];

# Select computer's move
$computerMove = ['rock', 'paper', 'scissors'][rand(0, 2)];

# Determine outcome
$results = determineOutcome($playerMove, $computerMove);

$_SESSION['game'] = [
    'results' => $results,
    'playerMove' => $playerMove,
    'computerMove' => $computerMove,
];

header('Location: index.php');

# Function determines if there is a tie or who the winner is
function determineOutcome($playerMove, $computerMove)
{
    if ($playerMove == $computerMove) {
        return 'tie';
    } else if ($playerMove == 'rock' and $computerMove == 'scissors' or $playerMove == 'scissors' and $computerMove == 'paper' or $playerMove == 'paper' and $computerMove == 'rock') {
        return 'player';
    } else {
        return 'computer';
    }
}