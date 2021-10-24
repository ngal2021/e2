<?php

session_start();

if(isset($_SESSION['results'])){
    $results = $_SESSION['results'];
    $winner = $results['winner'];
    $tie = $results['tie'];
    $playerMove = $results['playerMove'];
    $computerMove = $results['computerMove'];
}

require 'index-view.php';