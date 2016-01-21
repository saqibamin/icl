<!DOCTYPE html>
<html>
<head>
	<title>Working with Databases</title>
</head>
<body>
	
	<?php 
		/*
			1: Connect to Database Server and Select a Database - Start of Script
				mysqli_connect($server, $user, $password, $db_name);		
			
			2: Write/Execute Queries
				resource mysqli_query($connection_handle, $query);

			3: Use returned Data
				mysqli_fetch_assoc($resource_name);

			4: Close the connection - at end of script
				mysqli_close($connection_handle);
		*/
		$db_host = 'localhost';
		$db_user = 'root';
		$db_pass = '';
		$db_name = 'test';
		$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

		if( !$conn ) die('Unable to connect to Database');

		$query = 
				"SELECT *
				FROM student";
		$returned_data = mysqli_query( $conn, $query );

		$total_students_returned = mysqli_num_rows( $returned_data );
		echo  'Total Students in Database: ' . $total_students_returned . '<br/>';

		while( $student = mysqli_fetch_assoc($returned_data) ) {
			echo '<pre>';
			print_r($student);
			echo '</pre>';
		}

		// $query = "INSERT INTO student(student_name, father_name, class) VALUES('John Doe', 'Anonymous', 15)";
		// if( mysqli_query($conn, $query) ) {
		// 	echo 'Record Inserted Successfully';
		// } else {
		// 	echo 'There was some error.';
		// }

		// $new_id = mysqli_insert_id($conn);

		// echo 'New Student ID is: ' . $new_id . '<br/>';

		$query = 
			"UPDATE student
			SET student_name='Jane Doe'
			WHERE roll_num = 7";

		if( mysqli_query($conn, $query) ) {
			echo 'Record Updated Successfully';
		} else {
			echo 'There was some error.';
		}

		mysqli_close($conn);
	?>

</body>
</html>