# Project 1
+ By: Nicola Gallagher
+ URL: <http://e2p1.nicolaphp.me>

## Game planning
+ Create an array with the moves of the game, with three elements: rock, paper, scissors.
+ For Player A, choose a random element from the moves array.
+ For Player B, choose a random element from the moves array.
+ Compare Player A's and Player B's moves to determine if it is a tie or if there is a winner.
    + If the moves match, it is a tie.
    + Else, compare the moves. Rock beats scissors, scissors beats paper, and paper beats rock.
+ In the view, report the results: Player A's move, Player B's move, and the result.

## Outside resources
+ I looked at the discussion 'Conditional Statements in PHP code Between HTML Code' on StackOverflow to help with addressing separation of concerns.
+ The link is accessible below:
<https://stackoverflow.com/questions/3812526/conditional-statements-in-php-code-between-html-code>

## Notes for instructor
+ I did my best in regard to separation of concerns, and my final output is the best balance that I could achieve. 
+ The one challenge I had was with lines 12-13 of my controller file, index.php. The code is below:

```php
if ($playerA_move == $playerB_move) {
    $winner ='undetermined. Player A and Player B tie';
```

+ The winner variable contains a long string.
+ I did this in order to remove as much logic from the views file, index-view.php, as I could and to streamline the 'winner' output, so that it worked for all three game results: 
    + The winner is Player A.
    + The winner is Player B. 
    + The winner is undetermined. Player A and Player B tie. 
+ Here is the html code, line 13 in index-view.php, below:

```html
<li>The winner is <?php echo $winner ?>!</li>
```

### Alternative way of balancing separation of concerns
+ Something I tried was setting a variable called 'tie' for lines 12-13 of the controller file. An example is below:

```php
if ($playerA_move == $playerB_move) {
     $tie ='tie';
```

+ I then tried to treat the variables as boolean values to output certain text to the views file. An example is below:

```html
<?php if ($winner) { ?>
    <li>The winner is <?php echo $winner ?>!</li>
<?php } elseif ($tie) { ?>
    <li>Tie! Player A and Player B threw the same move.</li>
<?php } ?>
```
+ This was a bit too difficult for my current skill and comfort level, but I look forward to being able to execute something more dynamic like this in the future.