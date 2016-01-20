<!DOCTYPE html>
<html>
<head>
	<title>Handling Cookies</title>
</head>
<body>
	
	<?php 
		/*
			Networking/E-Commerce
				> HTTP is a stateless protocol

			Cookie:
				A text file that is sent to the server with every request that this particular sever backed
		*/
	
		setcookie('testcookie', 'this is some text', strtotime('+7 days'));

		if( isset($_COOKIE['testcookie']) ) {
			echo $_COOKIE['testcookie'];
		} else {
			echo 'this is your first visit';
		}


		$visits = 1;

		if( isset($_COOKIE['visitcounter']) ) {
			$visits  = $_COOKIE['visitcounter'] + 1;
		}

		setcookie('visitcounter', $visits, strtotime('+365 days'));

		echo 'Your visit number: ' . $visits;
	?>

</body>
</html>