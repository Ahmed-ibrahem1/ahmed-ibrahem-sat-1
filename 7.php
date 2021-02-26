<?php 

$x = 3 ;
$y=$x++;   // y = 3 , x = 4

$y+= ++$x;  // y = 8 , x = 5   --> pre-increment for x

if ($y == 7) {
 	$x++;
 	echo $x ."<br>";
 }
else if ($y == 8){
 	$x--;             // x = 4
 	echo $x ."<br>";
	}
else if ($y == 9) {
	$x+=2;
	echo $x ."<br>";
}
else { 
	$x= 0;
	echo $x ."<br>"; }

?>