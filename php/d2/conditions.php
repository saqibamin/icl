<!DOCTYPE html>
<html>
<head>
	<title>Conditions</title>
</head>
<body>
	
	<?php
		$x = 12;
		$y = 11;
		/*
			<, >, >=, <=, ==, ===, !=, &&, ||, !

		 */
		if( $x < $y ) {
			echo  'X is less than Y';
		} else {
			echo 'Y is less than X';
		}
		echo '<br/>';

		$num = 100;
		$num1 = '100';

		if( $num == $num1 ) {
			echo 'Both Values are Equal';
		} else {
			echo 'Values are not Equal';
		}
		echo '<br/>';

		if( $num === $num1 ) {
			echo 'Both Values and Type are Equal';
		} else {
			echo 'Value or Type is not same';
		}

		echo '<br/>';
		$char = 'x';
		switch( $char ) {

			case 'a': 
					echo  'Vowel';
					break;
			case 'e': 
					echo  'Vowel';
					break;
			case 'i': 
					echo  'Vowel';
					break;
			case 'o': 
					echo  'Vowel';
					break;
			case 'u': 
					echo  'Vowel';
					break;

			default: echo  'Not Vowel';
		}
		echo '<br/>';
		switch( $char ) {

			case 'a': 
			case 'e': 
			case 'i': 
			case 'o': 
			case 'u': 
					echo  'Vowel';
					break;

			default: echo  'Not Vowel';
		}

		echo '<br/>';

		// Conditional Operator
		//  condition ? true : false;

		echo ( $num == 100 ? 'Century' : 'Work Hard');

		// short-circuiting of logical operators
		/*
			&&
			x y r
			T T T
			T F F
			F T F 
			F F F
	
			x  = F
			x && y > F
			x = T 
			x || y > T

 		 */

	?>

</body>
</html>