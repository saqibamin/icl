<!DOCTYPE html>
<html>
<head>
	<title>URL Values</title>
</head>
<body>

	<?php 

		// Super Global Variables
		/*
				$_GET
				$_POST
				$_FILES
				$_COOKIE
				$_SESSION...
		 */
		
		if( isset( $_GET['something'] ) && !empty( $_GET['something'] ) ) {
			echo 'You are here for ' . $_GET['something'];
		} else {
			echo 'You came here for nothing';
		}


	?>
</body>
</html>