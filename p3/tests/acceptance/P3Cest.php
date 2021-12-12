<?php

class P3Cest
{
    public function playGame(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('[test=rock-radio]', 'rock');
        $I->click('[test=game-submit]');
        $I->seeElement('[test=result-output]');

        $playerMove = $I->grabTextFrom('[test=player-move]');
        $computerMove = $I->grabTextFrom('[test=computer-move]');
        $I->comment('The player selected the move: ' . $playerMove);
        $I->comment('The computer selected the move: ' . $computerMove);

        // Check that the correct styling is outputted depending on the result
        if ($playerMove == $computerMove) {
            $I->seeElement('[test=tie-output]');
            $result = 'Tie';
        } else if ($playerMove == 'rock' and $computerMove == 'scissors' or $playerMove == 'scissors' and $computerMove == 'paper' or $playerMove == 'paper' and $computerMove == 'rock') {
            $I->seeElement('[test=won-output]');
            $result = 'Player won';
        } else {
            $I->seeElement('[test=lost-output]');
            $result = 'Player lost';
        }

        $I->comment('Result: ' . $result);
    }

    public function validateForm(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('[test=game-submit]');
        $I->seeElement('[test=error-output]');
    }

    public function clickHistoryNavigation(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('[test=history-nav]');
        $I->seeElement('[test=history-title]');
    }

    public function showHistoryAndClickRound(AcceptanceTester $I) 
    {
        $I->amOnPage('/history');

        $roundCount = count($I->grabMultiple('[test=round-link]'));
        $I->assertGreaterThanOrEqual(10, $roundCount);

        $timestamp = $I->grabTextFrom('[test=round-link]');

        $I->click($timestamp);
        $I->see($timestamp);

    }

    public function clickHomeNavigation(AcceptanceTester $I)
    {
        $I->amOnPage('/history');
        $I->click('[test=home-nav]');
        $I->seeElement('[test=home-title]');
    }

    public function showRoundDetails(AcceptanceTester $I) 
    {
        $I->amOnPage('/history');
        $timestamp = $I->grabTextFrom('[test=round-link]');

        $I->click($timestamp);
        $I->see($timestamp);

        $id = $I->grabTextFrom('[test=round-id]');
        $playerMove = $I->grabTextFrom('[test=player-move]');
        $computerMove = $I->grabTextFrom('[test=computer-move]');

        $I->comment('Round number: ' . $id);
        $I->comment('Player move: ' . $playerMove);
        $I->comment('Computer move: ' . $computerMove);

        // Ensure that the correct styling is outputted for the result
        if ($playerMove == $computerMove) {
            $I->seeElement('[test=tie-output]');
            $result = 'Tie';
        } else if ($playerMove == 'rock' and $computerMove == 'scissors' or $playerMove == 'scissors' and $computerMove == 'paper' or $playerMove == 'paper' and $computerMove == 'rock') {
            $I->seeElement('[test=won-output]');
            $result = 'Player won';
        } else {
            $I->seeElement('[test=lost-output]');
            $result = 'Player lost';
        };

        $I->comment('Result: ' . $result);
    }

    public function clickHistoryNavigationFromRound(AcceptanceTester $I)
    {
        $I->amOnPage('/round?id=10');
        $I->click('[test=history-nav-round]');
        $I->seeElement('[test=history-title]');
    }

    public function statisticsPageLogic(AcceptanceTester $I)
    {
        $I->amOnPage('/statistics');

        $I->seeElement('[test=statistics-title]');

        $roundsCount = $I->grabTextFrom('[test=rounds-count]');

        $I->seeElement('[test=most-played-image]');
        $mostPlayedDisplayed = strtolower($I->grabTextFrom('[test=most-played]'));

        $playerWonCount = $I->grabTextFrom('[test=player-won-count]');
        $tieCount = $I->grabTextFrom('[test=tie-count]');
        $computerWonCount = $I->grabTextFrom('[test=computer-won-count]');

        $totalCount = $playerWonCount + $tieCount + $computerWonCount;

        // Compare rounds counts for accuracy
        $I->comment('Total rounds count: ' . $roundsCount);
        $I->comment('Total rounds count from result breakdown: ' . $roundsCount);

        if ($roundsCount == $roundsCount) {
            $I->comment('Rounds numbers are correct!');
        } else {
            $I->comment('Rounds numbers are incorrect!');
        }


        $playerWonPercent = $I->grabTextFrom('[test=player-won-percent]');
        $tiePercent = $I->grabTextFrom('[test=tie-percent]');
        $computerWonPercent = $I->grabTextFrom('[test=computer-won-percent]');

        $totalPercent = $playerWonPercent + $tiePercent + $computerWonPercent;

        // Compare result percent with 100
        $I->comment('Total results percent (should be ~100 due to rounding): ' . $totalPercent);

        $rockChoice = $I->grabTextFrom('[test=rock-choice]');
        $paperChoice = $I->grabTextFrom('[test=paper-choice]');
        $scissorsChoice = $I->grabTextFrom('[test=scissors-choice]');

        // Compare result percent with 100
        $ChoicePercent = $rockChoice + $paperChoice + $scissorsChoice;
        $I->comment('Total moves choice percent (should be ~100 due to rounding): ' . $ChoicePercent);
        
        if ($rockChoice > $paperChoice and $rockChoice > $scissorsChoice) { 
            $mostPlayedPercent = 'rock';
        } elseif ($paperChoice > $rockChoice and $rockChoice > $scissorsChoice) {
            $mostPlayedPercent = 'paper';
        } elseif ($scissorsChoice > $rockChoice and $scissorsChoice > $paperChoice) {
            $mostPlayedPercent = 'scissors';
        }
        
        // Compare most played statistics for accuracy
        if ($mostPlayedDisplayed == $mostPlayedPercent)
        $I->comment('Most played displayed: ' . $mostPlayedDisplayed);
        $I->comment('Most played calculated: ' . $mostPlayedPercent);

        if ($mostPlayedDisplayed == $mostPlayedPercent) {
            $I->comment('Most played is correct!');
        } else {
            $I->comment('Most played is incorrect!');
        }
        
    }
}
