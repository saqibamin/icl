<!DOCTYPE html>
<html>
<head>
	<title>View Students</title>
</head>
<body>
	
	<?php require_once('connection.php');?>
	
	<?php
		if( isset($_GET['msg']) )
			// vulnerable to XSS - Attack
			echo '<h2>' . $_GET['msg'] . '</h2>';
	?>	

	<table border="1px" cellspacing="0" cellpadding="0">
		<tr>
			<th>Roll Number</th>
			<th>Student Name</th>
			<th>Father Name</th>
			<th>View</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	
		<?php
			$students = "SELECT * FROM student";
			$students = mysqli_query($conn, $students);

			while( $student = mysqli_fetch_assoc($students) ) {
				echo  
					"<tr>
						<td>{$student['roll_num']}</td>
						<td>{$student['student_name']}</td>
						<td>{$student['father_name']}</td>
						<td><a href='view-student.php?roll_num={$student['roll_num']}'>View</a></td>
						<td><a href='edit-student.php?roll_num={$student['roll_num']}'>Edit</a></td>
						<td><a onclick='if(confirm(\"Are you sure?\")) return true; else return false; ' href='delete-student.php?roll_num={$student['roll_num']}'>Delete</a></td>
					</tr>";			
			}

		?>

	</table>

	<br/>

	<a href="add-student.php">Add New Student</a>
</body>
</html>
<?php mysqli_close($conn);?>
<?php
	// Cryptography
	// SQL - Injection
?>