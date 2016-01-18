<!DOCTYPE html>
<html>
<head>
	<title>Loops in PHP</title>
</head>
<body>
		
	<?php 

		for ( $i = 0; $i <= 10; $i++ ) {
			echo $i . '<br/>';
		}
		
		$i = 0;
		while ( $i <= 10 ) {
			echo $i . '<br/>';
			$i++;
		}

		$i = 0;

		do {
			echo $i . '<br/>';
		} while( $i++ <= 10 );

		$arr = array(3, 4, 5, 6);

		for( $i = 0; $i < count($arr); $i++ ) {
			echo $arr[$i] . ' - ';
		}
		echo '<br/>';

		// foreach
		foreach( $arr as $value ) {
			echo $value . ' - ';	
		}
		echo '<br/>';


	?>

</body>
</html>