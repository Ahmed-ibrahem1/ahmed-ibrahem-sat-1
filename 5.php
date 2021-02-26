<?php 
$breakLine = "<br>";
$HR = "<hr>";
echo "write a script that removes any duplicates from an array.$breakLine $HR";

$arr = [1,2,3,4,5,2,5,6];
$arrOutput = [];

echo "OLD Array : ";
print_r($arr);
echo $breakLine;

for($p=0 ; $p<COUNT($arr) ; $p++) {

    for($i=0 ; $i<COUNT($arrOutput); $i++) {
        if($arr[$p] == $arrOutput[$i]){
            continue 2;
        }
    }
    $arrOutput[] = $arr[$p];
}


echo "New Array : ";
print_r($arrOutput);
echo $breakLine;

// print_r($outputArray);


?>

