<?php
header('Content-Type: text/html; charset=utf-8');
$n = "a";
$x = 1;
$c = 1;
  
while ( $x <= 29) {

	while ( $c<= $x) {
		echo $n;
		$c++;
	}
	echo "<br>";
	$c = 1;
	$x++;
}

