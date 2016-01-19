<!DOCTYPE html>
<html>
<head>
	<title>Working with Date and Time in PHP</title>
</head>
<body>
	
	<?php 

		/*
			Unix Timestamp - epoch machine
				Number of seconds since 1st of January, 1970
		*/
	
		// returns current unix timestamp
		echo time();

		echo '<br/>';
		// date function returns current date in a described format
		// takes two arguments, 1: Format 2: Timestamp (default current ts)
		// 
		// Database Format for date time is: Y-m-d H:i:s
		echo date( 'd/m/Y');
		echo '<br/>';
		
		echo date( 'd/m/Y', time() - (24*60*60)); // 24 hours earlier
		echo '<br/>';

		$some_timestamp =  strtotime("10 December 2015");

		echo date('Y-m-d', $some_timestamp);
		echo '<br/>';

		echo date('Y-m-d', strtotime("+3 days"));
		echo '<br/>';

		echo date('Y-m-d', strtotime("-3 days"));
		echo '<br/>';

		echo date('Y-m-d', strtotime("last year"));
		echo '<br/>';

		echo date('Y-m-d', strtotime("-2 years"));
		echo '<br/>';

		// returns timestamp H,i,s,m,d,Y 
		$some_timestamp = mktime(0,0,0,12,10,2015);
		echo date('Y-m-d', $some_timestamp);
		echo '<br/>';
		echo '<br/>';
		echo '<br/>';

		// 20/2/1980
		$dob_timestamp = mktime(0, 0,0, 2, 20, 1980);
		$dob = date('d/m/Y', $dob_timestamp);
		echo $dob;
		echo '<br/>';
		
		$current_ts = time();
		$dob_in_seconds = $current_ts - $dob_timestamp;

		$dob_in_days = floor( (($dob_in_seconds / 60) / 60 ) / 24 );
		echo $dob_in_days;

		echo '<br/>';
		$dob_in_years = $dob_in_days / 365;
		echo round($dob_in_years, 0) . ' Years Approx';
	?>

</body>
</html>