<?php
$countries = array("Bulgaria" => 'Sofia',
					"France" => 'Paris',
					"UK" => 'London');


echo "<table border='1'>";
foreach ($countries as $key => $value) {	
		echo	"<tr>
				<td>$key</td>
				<td>$value</td>
				</tr>";	 	
}
echo "</table>";


$cities = array("UK" => 'London',
				"France" => 'Paris',
				"Bulgaria" => 'Sofia');
echo "<p><table border='1'>";
foreach ($cities as $key => $value) {	
		echo	"<tr>
				<td>$key</td>
				<td>$value</td>
				</tr>";	 	
}
echo "</table></p>";



