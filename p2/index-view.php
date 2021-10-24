<!DOCTYPE html>
<html lang='en'>
    
    <head>

        <title>Project 2 - Rock, Paper, Scissors</title>
        <meta charset='utf-8'>
        <link href=data: , rel=icon>

    </head>

    <body>
        
        <h1>Project 2 - Rock, Paper, Scissors</h1>

        <form method='POST' action='process.php'>
            
            <input type='radio' id='rock' name='choice' value='rock' checked><label for='rock'>Rock</label>
            <input type='radio' id='paper' name='choice' value='paper'><label for='paper'>Paper</label>
            <input type='radio' id='scissors' name='choice' value='scissors'><label for='scissors'>Scissors</label>

            <button type='submit'>Play Move</button>
        </form>

        <?php if(isset($results)) { ?>
        <h2>Results</h2>
        <ul>
            <li>You threw <strong><?php echo $playerMove ?></strong>.</li>
            <li>The other person threw <strong><?php echo $computerMove ?></strong>.</li>  
            <?php if($tie) { ?>
            <li>Your move is the same the other player's move. You tied!</li>
            <?php } if($winner) { ?>
            <li><strong><?php echo ucwords($playerMove) ?></strong> beats <strong><?php echo $computerMove ?></strong>. You won!</li>
            <?php } if((! $winner) and (! $tie)) { ?>
            <li><strong><?php echo ucwords($playerMove) ?></strong> is beaten by <strong><?php echo $computerMove ?></strong>. You lost, please try again!</li>
            <?php } ?>
        </ul>
        <?php } ?>
        </body>
</html>