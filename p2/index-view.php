<!DOCTYPE html>
<html lang='en'>
    
    <head>

        <title>Project 2 - Rock, Paper, Scissors</title>
        <meta charset='utf-8'>
        <link href=data: , rel=icon>
        
        <style>
        .won {
            color: green;
            font-size: x-large;
            font-weight: bold;
        }
        .lost {
            color: red;
            font-size: x-large;
            font-weight: bold;
        }
        .tie {
            color: blue;
            font-size: x-large;
            font-weight: bold;
        }
        </style>

    </head>

    <body>
        
        <h1>Project 2 - Rock, Paper, Scissors</h1>
        
        <h2>Instructions</h2>
        
        <ul>
            <li>You and the other player, the computer, randomly throw a move, either rock, paper, or scissors.</li>
            <li>If you and the other player throw the same move, and thus, a winner cannot be determined, a tied is declared.</li>
            <li>Otherwise: rock beats scissors, scissors beats paper, and paper beats rock.</li>
        </ul>
       
        <h2>Play</h2>
        
        <div>
        <ul>
            <li>Select your move, and then press <strong>Play Move</strong>. You can play as many times as you would like!</li>
        <ul>
        </div>
        
        <div> 
        <form method='POST' action='process.php'>
            
            <input type='radio' id='rock' name='choice' value='rock' 
                <?php echo (!isset($playerMove) or $playerMove == 'rock') ? 'checked': '' ?>><label for='rock'>Rock</label>
            <input type='radio' id='paper' name='choice' value='paper' 
                <?php echo (isset($playerMove) and $playerMove == 'paper') ? 'checked': '' ?>><label for='paper'>Paper</label>
            <input type='radio' id='scissors' name='choice' value='scissors' 
                <?php echo (isset($playerMove) and $playerMove == 'scissors') ? 'checked': '' ?>><label for='scissors'>Scissors</label>

            <button type='submit'>Play Move</button>
        
        </form>
        </div>  
        
        <?php if(isset($game)) { ?>
        <h2>Results</h2>
        <ul>
            
            <li>You threw <strong><?php echo $playerMove ?></strong>.</li>
            <li>The other person threw <strong><?php echo $computerMove ?></strong>.</li>  
            
            <?php if($results == 'tie') { ?>
            
            <li>Your move is the same the other player's move.</li>
            <div class='tie'>You tied with the other player!</div>
            
            <?php } else if($results == 'player') { ?>
            
            <li><strong><?php echo ucwords($playerMove) ?></strong> beats <strong><?php echo $computerMove ?></strong>.</li> 
            <div class='won'>Congratulations, you won!</div>
            
            <?php } else { ?>
            
            <li><strong><?php echo ucwords($playerMove) ?></strong> is beaten by <strong><?php echo $computerMove ?></strong>.</li>
            <div class='lost'>Oh no, you lost!</div>
            
            <?php } ?>

        </ul>
        <?php } ?>

    </body>
    
</html>