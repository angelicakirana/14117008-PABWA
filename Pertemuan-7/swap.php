<?php

$a=2;
$b=20;

echo "before : $a & $b <br>";

function swap(&$a,&$b){
	$temp=$a;
	$a=$b;
	$b=$temp;

}


swap($a, $b);

echo "after : $a & $b";
?>