<!DOCTYPE html>
<html>
<head>
	<title>Simple Arrays in PHP</title>
</head>
<body>
	
	<?php 

		// data_type var_name[size] [ = somevalue]; // C-Style
		// x = []; // JS
		// $arr_name = array(1, 3, 5); // PHP

		$my_array = array( 10, 3, 4, 60, 39 );
		$my_array_2 = array( 10, 10.3, 'Some String', 60, 39 );

		echo $my_array[4];
		echo '<br/>';
		
		// echo $my_array; // will output Array
		echo '<pre>';
		print_r( $my_array ); // will output array in Readable Format
		echo '</pre>';

		echo count( $my_array ) . '<br/>'; // returns number of elements in array
		echo max( $my_array ) . '<br/>'; // returns largest value
		echo min( $my_array ) . '<br/>'; // returns smallest value

		sort( $my_array );
		echo '<pre>';
		print_r( $my_array ); // will output array in Readable Format
		echo '</pre>';

		$my_array = array_reverse($my_array);		
		echo '<pre>';
		print_r( $my_array ); // will output array in Readable Format
		echo '</pre>';

		rsort( $my_array );
		echo '<pre>';
		print_r( $my_array ); // will output array in Readable Format
		echo '</pre>';


		echo '<br/>';
		echo '<pre>';
		print_r( $my_array_2 ); // will output array in Readable Format
		echo '</pre>';

		
		
		echo '<hr />';
		

		echo '<pre>';
		print_r( $my_array ); // will output array in Readable Format
		echo '</pre>';

		/*
			Push
			Pop
		*/
		array_push($my_array, 150);
		echo '<pre>';
		print_r( $my_array ); // will output array in Readable Format
		echo '</pre>';
		
		$popped_element = array_pop($my_array);
		echo $popped_element;
		echo '<pre>';
		print_r( $my_array ); // will output array in Readable Format
		echo '</pre>';
		
		/*
			Push
			Pop
		*/
		array_unshift($my_array, 150);
		echo '<pre>';
		print_r( $my_array ); // will output array in Readable Format
		echo '</pre>';
		
		$popped_element = array_shift($my_array);
		echo $popped_element;
		echo '<pre>';
		print_r( $my_array ); // will output array in Readable Format
		echo '</pre>';
?>
</body>
</html>