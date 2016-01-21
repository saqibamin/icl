<?php session_start(); ?><!DOCTYPE html>
<html>
<head>
	<title>Clearing Session Data</title>
</head>
<body>
	
	<?php 
		// $var = '123';
		// unset( $var ); // unset is used to un-set/delete a variable

		unset( $_SESSION['somesecretvalue'] );
		session_destroy(); // clear all data for current session
		
		echo $var;
		echo '<pre>';
		print_r($_SESSION);
		echo '</pre>';
	?>

</body>
</html>