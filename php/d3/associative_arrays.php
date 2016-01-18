<!DOCTYPE html>
<html>
<head>
	<title>Associative Arrays in PHP</title>
</head>
<body>
	
	<?php 

		$arr = array(1, 3, 6, 6);
		$student = array(
			 	 'last_name'	 	=> 'Doe',
			 	 'first_name' 		=> 'John',
			 	 'roll_number'		=> 15
			);

		// echo $student[0];
		echo $student['first_name'];
		echo $student['last_name'];
		echo $student['roll_number'];

		$custom_arr = array(1 => 3, 5, 6, 3);

		echo '<br/>';
		print_r($custom_arr);
		echo '<br/>';

		foreach( $student as $key => $value ) {
			echo  $key . ' -> ' . $value . '<br/>';
		} 

		$students = array(
				array(
					'first_name'		=> 'John',
					'last_name'			=> 'Doe',
					'roll_number'		=> 16
				),
				array(
					'first_name'		=> 'Jane',
					'last_name'			=> 'Doe',
					'roll_number'		=> 18
				),
				array(
					'first_name'		=> 'Muhammad',
					'last_name'			=> 'Ali',
					'roll_number'		=> 19
				)
			);

		foreach( $students as $student ) {
			echo '<pre>';
			print_r($student);
			echo '</pre>';
		}
?>

</body>
</html>