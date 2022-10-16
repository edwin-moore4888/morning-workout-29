<?php
// @TODO no.1 replace following functions with only one more general function.
// have you heard about DRY principal? DRY stands for don't repeat yourself
// if you don't know the syntax for modulo operator, you can check it at https://www.php.net/manual/en/language.operators.arithmetic.php
// think of the name for the new function
function isMultipleOfX($number, $divisor)
{
    return ($number % $divisor) === 0;
}


$myNumber = 15;

echo $myNumberIsMultipleOf3 = isMultipleOfX($myNumber, 3);
echo $myNumberIsMultipleOf5 = isMultipleOfX($myNumber, 5);
echo $myNumberIsMultipleOf8 = isMultipleOfX($myNumber, 8);
echo $myNumberIsMultipleOf15 = isMultipleOfX($myNumber, 15);




// @TODO no.2
function greatestDivisor($number)
{
    // Implement this function which will give you the greatest divisor for any positive number.
    // Do not return 1 or the number itself. if the number is prime number, return null.
    // For example for number 3 you should return null, for number 8 you should return 4.
    for ($divisor = intval($number / 2); $divisor > 1; $divisor--) {
        if (isMultipleOfX($number, $divisor)) {
            return $divisor;
        }
    }
    return null;
}




echo ('number 3 is ' . (greatestDivisor(3) ?? 'prime number'));
echo ('<br />');
echo ('number 8 is ' . (greatestDivisor(8) ?? 'prime number'));
echo ('<br />');
echo ('number 15 is ' . (greatestDivisor(15) ?? 'prime number'));
echo ('<br />');
echo ('number 99 is ' . (greatestDivisor(99) ?? 'prime number'));
echo ('<br />');
echo ('number 100 is ' . (greatestDivisor(100) ?? 'prime number'));
echo ('<br />');
echo ('<br />');



// @TODO no.3 Fix the bugs! Try to make code as good and as readable as possible, formatting is up to you, but please clean up this mess.
// Here is dynamically generated two dimensional array representing chess board.
// Values of nested array should be 0 or 1 representing white or black.



$board = [];

for ($i = 0; $i < 8; $i++) {
    $row = [];

    for ($j = 0; $j < 8; $j++) {
        if ($i % 2 === 0) {
            $row[] = (($j) % 2) === 0 ? 0 : 1;
        } else {
            $row[] = (($j) % 2) === 0 ? 1 : 0;
        }
    }

    $board[] = $row;
}



// @TODO no.4 You can use html template with some css to display good looking chessboard. Use grid, flex or any other approach.
echo ('<div>');

foreach ($board as $row) {
    echo ('<div>');

    foreach ($row as $square) {
        echo ('<span>' . $square . '</span>');
    }

    echo ('</div>');
}

echo ('</div>');
