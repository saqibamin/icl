<!DOCTYPE html>
<html>
<head>
	<title>Get and Set Date Types</title>
</head>
<body>
	
	<?php
		$my_var = 'Some Value';
		$some_int = 15;
		$some_float = 15.5;
		
		echo gettype($my_var);
		echo '<br/>';
		echo gettype($some_int);
		echo '<br/>';

		// int x = 10;
		// double some_var = (double) x/3;
		// Java -> Explicit Type Conversion

		echo gettype( (float) $some_int );
		echo '<br/>';

		echo gettype( intval( $some_float ) );
		echo intval($some_float);

	?>

</body>
</html>