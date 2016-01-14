<!DOCTYPE html>
<html>
<head>
	<title>Strings and String Functions in PHP</title>
</head>
<body>
	
	<?php $first_name = 'John';?>
	<?php $last_name = 'Doe';?>

	<?php /*Concatenation of Strings*/?>
	Full Name: <?php echo $first_name . ' ' . $last_name; ?><br>

	<?php $first_name = ' Jane        '; ?>
	<?php $last_name = ' Doe '; ?>

	<?php $first_name = trim($first_name);?>
	<?php  $last_name = trim($last_name);?>
	Full Name: <?php echo $first_name . ' ' . $last_name; ?><br>
		
	<?php $first_name = 'rAheELa';?>
	<?php $last_name = 'aLtAf';?>
	<?php $random_name = '  naveeda razzaq  ';?>
		
	<?php 
		// conver to lower case
		$first_name = strtolower( $first_name );
		$last_name = strtolower( $last_name );
		echo $first_name . '<br/>';
		echo $last_name . '<br/>';


		// convert first character to uppercase
		$first_name = ucfirst( $first_name );
		$last_name = ucfirst( $last_name );
		echo $first_name . '<br/>';
		echo $last_name . '<br/>';

		echo "Full Name: {$first_name} {$last_name} <br/>";

		// trim and uppercase first character of every word
		$random_name = trim($random_name);
		$random_name = ucwords( $random_name );
		echo $random_name . '<br/>';
		echo '<br/>';

		$long_string = 'It has been a Long day Today and it is going on for now';
		echo strlen( $long_string ) . '<br/>';
		echo strtolower( $long_string ) . '<br/>';
		echo strtoupper( $long_string ) . '<br/>';
		echo ucwords(strtolower( $long_string )) . '<br/>';


		// search for a string in string
		echo strstr( $long_string, 'today' ) . '<br/>'; // case sensitive
		echo stristr( $long_string, 'today' ) . '<br/>'; // case-insensitive

		// str_replace and str_ireplace for replacing a string inside a string
		echo str_ireplace('long', 'short', $long_string) . '<br/>';

		$contains_html = '<h1>This is a heading</h1>';
		// delete all html tags
		echo strip_tags($contains_html) . '<br/>';

		echo substr( $long_string, 0, 20 ) . '....<br/>';

	?>
</body>
</html>