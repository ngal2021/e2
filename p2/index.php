<?php

session_start();

if(isset($_SESSION['results'])){
    $results = $_SESSION['results'];
    $tie = $results['tie'];
    $player = $results['player'];
    $playerMove = $results['playerMove'];
    $computerMove = $results['computerMove'];

    $_SESSION['results'] = null;
}

require 'index-view.php';