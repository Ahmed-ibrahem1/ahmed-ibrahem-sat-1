<?php 
$breakLine = "<br>";
$HR = "<hr>";
echo "1 - you have an array of numbers. write a script to find minimum and maximum numbers in the array. $breakLine $HR";
 
$numbers = [1,2,3,100,5,6,0.3 , -1 , "Ahmed"];  

$minPointer = $numbers[0];
$maxPointer = $numbers[0];

foreach($numbers as $num){
    if($num > $maxPointer && gettype($num) != "string" ){
        $maxPointer = $num;
    }

    if($num < $minPointer && gettype($num) != "string" ){
        $minPointer = $num;
    }
}

echo "Minmum Number is : $minPointer $breakLine";

echo "Maxmun Number is : $maxPointer $breakLine";



?>