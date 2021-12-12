# Project 3
+ By: Nicola Gallagher
+ URL: <http://e2p3.nicolaphp.me>

## Graduate requirement
*x one of the following:*
+ [x] I have integrated testing into my application
+ [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources
+ I designed the logo and icons, so no outside reference was necessary.

## Notes for instructor
+ I added a *statistics* page, which outputs key statistics, a breakdown of the results, and information about the player's moves.

## Codeception testing output
```
Codeception PHP Testing Framework v4.1.22
Powered by PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Acceptance Tests (8) ----------------------------------------------------------------------------------------------------------------------------------------------------------------------
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
 The computer selected the move: rock
 I see element "[test=tie-output]"
 Result: Tie
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
 I assert greater than or equal 10,13
 I grab text from "[test=round-link]"
 I click "2021-12-12 18:25:08"
 I see "2021-12-12 18:25:08"
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
 I click "2021-12-12 18:25:08"
 I see "2021-12-12 18:25:08"
 I grab text from "[test=round-id]"
 I grab text from "[test=player-move]"
 I grab text from "[test=computer-move]"
 Round number: 13
 Player move: rock
 Computer move: rock
 I see element "[test=tie-output]"
 Result: Tie
 PASSED 

P3Cest: Click history navigation from round
Signature: P3Cest:clickHistoryNavigationFromRound
Test: tests/acceptance/P3Cest.php:clickHistoryNavigationFromRound
Scenario --
 I am on page "/round?id=10"
 I click "[test=history-nav-round]"
 I see element "[test=history-title]"
 PASSED 

P3Cest: Statistics page logic
Signature: P3Cest:statisticsPageLogic
Test: tests/acceptance/P3Cest.php:statisticsPageLogic
Scenario --
 I am on page "/statistics"
 I see element "[test=statistics-title]"
 I grab text from "[test=rounds-count]"
 I see element "[test=most-played-image]"
 I grab text from "[test=most-played]"
 I grab text from "[test=player-won-count]"
 I grab text from "[test=tie-count]"
 I grab text from "[test=computer-won-count]"
 Total rounds count: 13
 Total rounds count from result breakdown: 13
 Rounds numbers are correct!
 I grab text from "[test=player-won-percent]"
 I grab text from "[test=tie-percent]"
 I grab text from "[test=computer-won-percent]"
 Total results percent (should be ~100 due to rounding): 100
 I grab text from "[test=rock-choice]"
 I grab text from "[test=paper-choice]"
 I grab text from "[test=scissors-choice]"
 Total moves choice percent (should be ~100 due to rounding): 100
 Most played displayed: scissors
 Most played calculated: scissors
 Most played is correct!
 PASSED 

-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


Time: 00:00.244, Memory: 12.00 MB

OK (8 tests, 13 assertions)
```