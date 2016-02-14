 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 
 	span {
 		color: green;
 	}
 	body {
 		color: red;
 		
 	}
 	</style>
 </head>
 <body>
 
 <?php
header('Content-Type: text/html; charset=utf-8');

$str = 'Поражениетo на византийците и покоряването от страна на прабългарите на завареното население завършва със сключването на мирен договор през лятото на 681г., чрез който Аспарухова България е призната от Византия.';

 $text = explode(' ',$str);
 
 foreach ($text as $key => $value) {
 	if ($key%2==0) {
 		
 		echo "<span>$value</span>";
 	} 
 	else {
 		echo ' '.$value.' ';
	 }
} 
?>
</body>
 </html>