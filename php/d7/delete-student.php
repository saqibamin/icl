<?php 


require_once('connection.php');

$roll_num = (int) $_GET['roll_num'];

$delete_query = "DELETE FROM student WHERE roll_num={$roll_num}";

mysqli_query($conn,$delete_query);
mysqli_close($conn);

header('Location: view-students.php?msg=Student Has been deleted successfully');