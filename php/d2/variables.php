<!DOCTYPE html>
<html>
<head>
	<title>Variables in PHP</title>
</head>
<body>
	
	<?php
		// start with $ symbol
		$my_variable = 'Some Value';
		echo  $my_variable . '<br/>';
		echo  "Value of Variable is: " . $my_variable . '<br/>';

		// variables in double quotes are interpreted
		echo  "Value of Variable is:  $my_variable <br/>";
		
		// variables in single quotes are NOT interpreted
		echo  'Value of Variable is:  $my_variable <br/>';


	?>

</body>
</html>