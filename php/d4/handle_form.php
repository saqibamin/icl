<!DOCTYPE html>
<html>
<head>
	<title>Form Handling in PHP</title>
</head>
<body>
	<?php
		// $_GET
		// $_POST
		// $_REQUEST
	?>
	<?php /*if( (isset( $_REQUEST['name'] ) && !empty( $_REQUEST['name'] )) && ( isset( $_REQUEST['email'] ) && !empty( $_REQUEST['email'] ) ) ) {*/ ?>
	<?php
		$required_fields = array('name', 'email', 'comments');
		$error = false;
		
		foreach( $required_fields as $field ) {
			if( !isset($_REQUEST[$field] ) || empty($_REQUEST[$field]) ) {
				$error = true;
			}
		}
		
		if( !$error ) {
	?>
	<h1>New User Account has been created successfully, Details are:</h1>
	Name: <?php echo $_REQUEST['name']; ?><br/>
	Email: <?php echo $_REQUEST['email']; ?><br/>
	Gender: <?php echo $_REQUEST['gender']; ?><br/>
	DOB: <?php echo $_REQUEST['dobd'] . ' ' . $_REQUEST['dobm'] . ' ' . $_REQUEST['doby']; ?><br/>
	Comments: <?php echo $_REQUEST['comments']; ?><br/>
	<?php } else { ?>
	<h3>Invalid Details</h3>
	<?php } ?>
	
</body>
</html>