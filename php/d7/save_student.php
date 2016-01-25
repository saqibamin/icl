<?php
if( isset($_POST['submit']) ) {

	$student_name = $_POST['student_name'];
	$father_name = $_POST['father_name'];
	$class = $_POST['class_name'];

	require_once( 'connection.php' );
	
	// vulnerable to SQL injection
	$insert_query = 
		"INSERT INTO student(student_name, father_name, class)
		VALUES('{$student_name}', '{$father_name}', {$class})";

	mysqli_query($conn, $insert_query); // check if returns true or not

	echo 'Record has been inserted successfully';// redirect back to form with message

	mysqli_close($conn);
}