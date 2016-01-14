<!DOCTYPE html>
<html>
<head>
	<title>Numbers and Arithmetic Operations</title>
</head>
<body>
	
	<?php $num_1 = 10;?>
	<?php $num_2 = 50;?>
	<?php $num_3 = 50.564565;?>

	<?php $price = 10000000.34545; ?>

	<?php 
		/*
			+, -, *, ++, --, +=, -=...
			
			CEIL
			FLOOR
		 */
		
	 ?>
	Some Complex Maths: <?php echo ( ($num_1 + $num_2 * 3) / 2 );?><br/>
	
	<?php echo round( $num_3, 2 );?> <br/>
	<?php echo ceil( $num_3 );?> <br/>
	<?php echo floor( $num_3 );?><br/>
	<?php echo rand(10, 100);?><br/>
	<?php echo number_format($price, 2);?><br/>
</body>
</html>