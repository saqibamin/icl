<!DOCTYPE html>
<html>
<head>
	<title><?php echo "This is output of php"; ?></title>
</head>
<body>

	<h1>This is outside PHP Block</h1>
	<?php echo 'Hello World<br/>'; ?>
	<?php echo 'Hello World Again<br/>'; ?>
	<?php
		// outputting a concatenated string
		echo 'This is first part' . ' This is second part<br/>';

		// creating a variable
		// data_type var_name [ = value];

		$first_name = 'Raheela';
		$last_name = 'Altaf';

		echo $first_name . ' ' . $last_name . '<br/>';

		echo "Name of Student is: <b>{$first_name} {$last_name}</b><br/>" ;
		
		echo 5.5+6.1 . '<br/>';

		// constants in PHP
		define('PI', 3.14);
		// PI = 'somenewvalue';
		$first_name = 'New';
		echo PI;
	?>
</body>
</html>