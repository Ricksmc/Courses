<?php

$a = 1000;

$b = $a * 0.5;

echo $b;

echo '<br>';
echo '=========================================================';
echo '<br>';

$a = 100;
$b = 3 * $a;
echo $b;

echo '<br>'; 
echo '=========================================================';
echo '<br>';
			// também poderia utilizar a seguinte estratégia
$a = 20;		// $a = 20;
echo $a++;        	// echo '<br>';
echo '<br>'; 		// echo ++$a;
echo $a;

echo '<br>'; 
echo '=========================================================';
echo '<br>';

$a = 100;
$b = 250;
$c = $a + $b;
echo ++$c;

?>
