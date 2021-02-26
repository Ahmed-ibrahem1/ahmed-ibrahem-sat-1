<?php 
$breakLine = "<br>";
$HR = "<hr>";
echo 
"2 - you have a variable that contains any digit from 0 to 9. write a script to display the english equivalent of this number. $breakLine
For example: $breakLine
digit = 3 → three $HR";


$digit = 9;

$englishEquivalent = match ($digit) {
    0 => 'Zero',
    1 => 'One',
    2 => 'Two',
    3 => 'Thre',
    4 => 'Four',
    5 => 'Five',
    6 => 'Six',
    7 => 'Seven',
    8 => 'Eight',
    9 => 'Nine'
}; 

echo "English Equivalent is : $englishEquivalent $breakLine";




?>