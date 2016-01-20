<?php session_start();?><!DOCTYPE html>
<html>
<head>
	<title>Session in PHP</title>
</head>
<body>
	
	<?php
		// page x > 10 person accessing
		// $_SESSION['somesecretvalue'] = 'This is a secret thing and not accessible within browser resources panel';	
		
		echo $_SESSION['somesecretvalue'];
	?>

</body>
</html>
