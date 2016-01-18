<!DOCTYPE html>
<html>
<head>
	<title>Functions in PHP</title>
</head>
<body>
	
	<?php 

		$some_var = 'This is working';

		function greetings( ) {
			echo 'Hello World!';
		}
			
		// parametrized function
		function greetings_to( $name ) {
			echo 'Hello ' . $name;
		}
			
		// function with default arguments
		function say_hello_to( $name = 'John Doe' ) {
			echo 'Hello ' . $name;
		}

		function calculate_sum( $x = 0, $y = 0 ) {
			$sum =  $x + $y;
			return $sum;
		}	

		// using global variables in functions
		function use_variable() {
			global $some_var;
			echo $some_var;
		}

		greetings(); // calling a function
		echo '<br/>';
		echo '<br/>';
		greetings_to( 'John Doe' ); // calling function with args
		echo '<br/>';
		echo '<br/>';
		say_hello_to('Jane Doe');
		echo '<br/>';
		echo '<br/>';

		echo calculate_sum( 15, 68 );
		
		echo '<br/>';
		echo '<br/>';
		echo calculate_sum();
		
		echo '<br/>';
		echo '<br/>';
		echo use_variable();
	?>

</body>
</html>