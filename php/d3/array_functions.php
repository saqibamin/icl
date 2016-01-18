<!DOCTYPE html>
<html>
<head>
	<title>Array Functions</title>
</head>
<body>
	
	<?php 

		$arr = array(1, 3, 5, 645, 23, 32);
		echo '<br/>';
		print_r($arr);
		shuffle( $arr );
		print_r($arr);
		echo '<br/>';

		// Imploding and Exploding
		echo '<br/>';

		$imploded_array = implode( '**', $arr );
		echo $imploded_array;
		$exploded_array = explode('**', $imploded_array);

		echo '<br/>';
		print_r($exploded_array);

		echo '<br/>';
		echo '<br/>';

		$date = '1/18/2016';
		$date_parts = explode('/', $date);

		// 18/1/2016

		echo '<br/>';
		echo $date_parts[1] . '/' . $date_parts[0] . '/' .$date_parts[2];

	?>


</body>
</html>