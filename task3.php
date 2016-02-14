<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="task3.php" method="get">
		<select name="city">
			<option value="Sofia">Sofia</option>
			<option value="Paris">Paris</option>
			<option value="London">UK</option>	
		</select>
		<input type="submit" name="submit" value="choose">

	</form>
<?php

if (!empty($_GET['submit'])) {
	$city = $_GET['city'];
}	
		$citycountry = array('Bulgaria' => 'Sofia', 
				 			'France' => 'Paris',
				 			'UK' => 'London');
$a = 'Sofia';
$b = 'Paris';
$c = 'London';

	foreach ($citycountry as $key => $value) {
		if ($value == $a) {
			echo "<p>".$a.' se namira v '.$key.".</p>";
		} elseif ($value == $b) {
			echo "<p>".$b.' se namira v '.$key.".</p>";
		} elseif ($value == $c) {
			echo "<p>".$c.' se namira v '.$key.".</p>";
		}
			
	}
?>
</body>
</html>
