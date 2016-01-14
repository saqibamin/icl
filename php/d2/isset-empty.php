<!DOCTYPE html>
<html>
<head>
	<title>isset() and empty() </title>
</head>
<body>
	
	<?php $my_variable_1 = 100; ?>
	<?php $my_variable_2 = 0; ?>
	<?php $my_variable_3 = ''; ?>
	<?php define('PI', 3.14); ?>
	
	<?php
		if( isset( $my_variable_1 ) )
			echo $my_variable_1; 

		echo '<br/>';

		if( !empty( $my_variable_3 ) ) {
			echo  'It Works';
		}
		echo '<br/>';
		if( !empty( $my_variable_2 ) ) {
			echo  'It Works';
		}
		echo '<br/>';

		if( isset($my_variable_1) && !empty($my_variable_1) ) {
			echo '$my_variable_1 is defined and it has some value too';
		}


		echo '<br/>';
		// checking if a constant is defined
		if( defined('PI') ) echo 'PI is defined somewhere';
	?>

</body>
</html>