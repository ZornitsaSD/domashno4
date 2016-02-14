<?php
header('Content-Type: text/html; charset=utf-8');

$friends = array('Sophia' => '31',
				'Jacob' => '41',
				'William' => '49',
				'Ramesh' => '40');


	echo "<pre><p>Възходящ ред според value:</p>";
	asort($friends);
	print_r($friends);
	echo "</pre>";

	echo "<pre><p>Възходящ ред според key:</p>";
	ksort($friends);
	print_r($friends);
	echo "</pre>";

	echo "<pre><p>Низходящ ред според value:</p>";
	arsort($friends);
	print_r($friends);
	echo "</pre>";

	echo "<pre><p>Низходящ ред според key:</p>";
	rsort($friends);
	print_r($friends);
	echo "</pre>";
