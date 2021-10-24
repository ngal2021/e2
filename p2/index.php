<?php

session_start();

if(isset($_SESSION['game'])){
    $game = $_SESSION['game'];
    $results = $game['results'];
    $playerMove = $game['playerMove'];
    $computerMove = $game['computerMove'];

    $_SESSION['results'] = null;
}

require 'index-view.php';