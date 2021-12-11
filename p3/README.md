# Project 3
+ By: Nicola Gallagher
+ URL: <http://e2p3.nicolaphp.me>

## Graduate requirement
*x one of the following:*
+ [x] I have integrated testing into my application
+ [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources
N/A

## Notes for instructor
N/a

## Codeception testing output
```
Codeception PHP Testing Framework v4.1.22
Powered by PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Acceptance Tests (7) ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
P3Cest: Play game
Signature: P3Cest:playGame
Test: tests/acceptance/P3Cest.php:playGame
Scenario --
 I am on page "/"
 I fill field "[test=rock-radio]","rock"
 I click "[test=game-submit]"
 I see element "[test=result-output]"
 I grab text from "[test=player-move]"
 I grab text from "[test=computer-move]"
 The player selected the move: rock
 The computer selected the move: scissors
 I see element "[test=won-output]"
 Result: Player won
 PASSED 

P3Cest: Validate form
Signature: P3Cest:validateForm
Test: tests/acceptance/P3Cest.php:validateForm
Scenario --
 I am on page "/"
 I click "[test=game-submit]"
 I see element "[test=error-output]"
 PASSED 

P3Cest: Click history navigation
Signature: P3Cest:clickHistoryNavigation
Test: tests/acceptance/P3Cest.php:clickHistoryNavigation
Scenario --
 I am on page "/"
 I click "[test=history-nav]"
 I see element "[test=history-title]"
 PASSED 

P3Cest: Show history and click round
Signature: P3Cest:showHistoryAndClickRound
Test: tests/acceptance/P3Cest.php:showHistoryAndClickRound
Scenario --
 I am on page "/history"
 I grab multiple "[test=round-link]"
 I assert greater than or equal 10,93
 I grab text from "[test=round-link]"
 I click "2021-12-10 19:31:11"
 I see "2021-12-10 19:31:11"
 PASSED 

P3Cest: Click home navigation
Signature: P3Cest:clickHomeNavigation
Test: tests/acceptance/P3Cest.php:clickHomeNavigation
Scenario --
 I am on page "/history"
 I click "[test=home-nav]"
 I see element "[test=home-title]"
 PASSED 

P3Cest: Show round details
Signature: P3Cest:showRoundDetails
Test: tests/acceptance/P3Cest.php:showRoundDetails
Scenario --
 I am on page "/history"
 I grab text from "[test=round-link]"
 I click "2021-12-10 19:31:11"
 I see "2021-12-10 19:31:11"
 I grab text from "[test=round-id]"
 I grab text from "[test=player-move]"
 I grab text from "[test=computer-move]"
 Round number: 93
 Player move: rock
 Computer move: scissors
 I see element "[test=won-output]"
 Result: Player won
 PASSED 

P3Cest: Click history navigation from round
Signature: P3Cest:clickHistoryNavigationFromRound
Test: tests/acceptance/P3Cest.php:clickHistoryNavigationFromRound
Scenario --
 I am on page "/round?id=10"
 I click "[test=history-nav-round]"
 I see element "[test=history-title]"
 PASSED 

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


Time: 00:00.186, Memory: 12.00 MB

OK (7 tests, 11 assertions)
```