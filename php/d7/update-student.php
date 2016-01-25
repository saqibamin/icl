<?php

require_once( 'connection.php');

$student_name = $_POST['student_name'];
$father_name = $_POST['father_name'];
$class = $_POST['class_name'];

$roll_num =  (int) $_POST['roll_num'];

// vulnerable to SQL - Injection
$update_query = 

	"UPDATE student
		SET
	student_name='{$student_name}',
	father_name='{$father_name}',
	class={$class}
	
	WHERE roll_num = {$roll_num}";

mysqli_query($conn, $update_query);
mysqli_close($conn);


header('Location: view-students.php?msg=Student Record Updated Successfully');

