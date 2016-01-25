<!DOCTYPE html>
<html>
<head>
	<title>Update Student Data</title>
</head>
<body>
		
	<?php require_once('connection.php');?>
	<?php
		$roll_num = (int) $_GET['roll_num'];
		$student_data = "SELECT * FROM student WHERE roll_num={$roll_num}";
		$student_data = mysqli_query($conn, $student_data);

		$students_returned = mysqli_num_rows($student_data);		
		if( $students_returned <= 0 ) {
			echo 'Invalid Roll Number';
			mysqli_close($conn);
			die();
		}
		$student_data = mysqli_fetch_assoc($student_data);
	?>

	<form action="update-student.php" method="post">
		<label>Student Name: <input value="<?php echo $student_data['student_name'];?>" type="text" name="student_name"></label>
		<label>Father Name: <input value="<?php echo $student_data['father_name']?>" type="text" name="father_name"></label>
		<label>Class: <input value="<?php echo  $student_data['class'];?>" type="text" name="class_name"></label>

		<input type="hidden" name="roll_num" value="<?php echo $roll_num;?>">
		
		<input type="submit" name="submit" value="Update Student">
	</form>

</body>
</html>