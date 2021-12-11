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
}
