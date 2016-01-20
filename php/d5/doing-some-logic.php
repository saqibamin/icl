<!DOCTYPE html>
<html>
<head>
	<title>Student Records</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
		}
		tr.even-row {
			background: #ddd;
		}
		tr.odd-row {
			background: #cb0009;
		}
	</style>
</head>
<body>
	
	<?php
		$students = array(
				array(
					'full_name'	=> 'Raheela Altaf',
					'roll_num'	=> 200,
					'marks'		=> 400
				),
				array(
					'full_name'	=> 'Naveeda Razzaq',
					'roll_num'	=> 201,
					'marks'		=> 402
				),
				array(
					'full_name'	=> 'Irsa Rehma',
					'roll_num'	=> 202,
					'marks'		=> 404
				),
				array(
					'full_name'	=> 'Ammama Ali',
					'roll_num'	=> 203,
					'marks'		=> 404
				),
				array(
					'full_name'	=> 'Maryam Yousaf',
					'roll_num'	=> 204,
					'marks'		=> 407
				),
		);

		$students = array();

		// if students array is empty then show message: No Students Found.
	?>
	<table border="1px">
		<tr>
			<th>Sr.#</th>
			<th>R.#</th>
			<th>Name</th>
			<th>Marks</th>
		</tr>
		
		<?php  $sr_num = 0;?>
		<?php foreach( $students as $student ) { ?>
			<?php /*Output even-row or odd-row here for alternative rows*/ ?>
			<tr class="">
				<td><?php echo ++$sr_num; ?></td>
				<td><?php echo $student['roll_num']?></td>
				<td><?php echo $student['full_name'];?></td>
				<td><?php echo $student['marks'];?></td>
			</tr>
		<?php } ?>

	</table>

</body>
</html>