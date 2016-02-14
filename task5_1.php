<?php 
header('Content-Type: text/html; charset=utf-8');
$n = $_GET['number'];
$a = 1;
$f = 1;
while ( $f <= $n) {
	$a = $a*$f;
	$f = $f + 1;	
}
 echo 'Факториелът на '.$n.' e '.$a.';';
	