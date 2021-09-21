<?php

# Define 5 different variables, which will
# each represent how much a given coin is worth
$penny_value = .01;
$nickel_value = .05;
$dime_value = .10;
$quarter_value = .25;
$half_value = .50;

# Define 5 more variables, which will each
# represent how many of each coin is in the bank
$pennies = 100;
$nickels = 5;
$dimes = 0;
$quarters = 125;
$half = 33;

# Add up how much money is in the piggy bank
$total = ($pennies * $penny_value) + ($nickels * $nickel_value) + ($dimes * $dime_value) + ($quarters * $quarter_value) + ($half * $half_value);

?>
<!DOCTYPE html>
<html lang='en'>

<head>

    <title>PHPiggy Bank</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>

</head>

<body>

    <img alt='PHPiggy Bank Logo' src='https://s3.amazonaws.com/making-the-internet/php-piggy-bank-logo@2x.png'
        style='width:202px;'>

    <p>
        You have $<?php echo $total; ?> in your piggy bank.
    </p>

    <!-- Undefined variable error example -->
    <!-- <?php echo $goal ?> -->

</body>

</html>