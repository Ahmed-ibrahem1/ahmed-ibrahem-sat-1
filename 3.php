<?php 
$breakLine = "<br>";
$HR = "<hr>";
echo 
"3 -write a script to display this shape: $breakLine
*$breakLine
* *$breakLine
* * *$breakLine
* * * *$breakLine
* * * * *$breakLine
* * * * *$breakLine
* * * *$breakLine
* * *$breakLine
* *$breakLine
* $breakLine
$HR";

echo "Sol.$breakLine";

for ($i=0 ; $i<5 ; $i++){
    for ($j=0 ; $j<=$i ; $j++){
        echo " * ";
    }
    echo "<br>";
}
for ($i=4 ; $i>0 ; $i--) {
    for ($j=0 ; $j<=$i ; $j++) {
        echo " * ";
    }
    echo "<br>";
}









?>