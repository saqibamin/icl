<!DOCTYPE html>
<html>
<head>
	<title>View Student</title>
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

	Roll Number: <?php echo $student_data['roll_num'];?><br/>
	Name: <?php echo $student_data['student_name'];?><br/>
	Father Name: <?php echo $student_data['father_name'];?><br/>
	Class:  <?php echo $student_data['class'];?><br/>

</body>
</html>
<?php mysqli_close($conn); ?>