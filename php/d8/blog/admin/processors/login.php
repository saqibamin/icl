<?php

require_once('../../load.php');

if( !isset($_POST['login_btn']) ) {

	header('Location: ../index.php');
	die();
}


$username = $_POST['username'];
$password = $_POST['password'];


// Hacking
// SQL-Injection -> Special Characters
// username: admin
// password: ' OR '' = '; DROP users;#

$check_auth = 
	"SELECT * FROM users
	WHERE username='{$username}' AND password='{$password}'";

/*
	// user input must be escaped
	SELECT * FROM users
	WHERE username='admin' AND password='\' OR \'\' = \'; DROP users;#'
*/

$check_auth = mysqli_query($conn, $check_auth);
if( mysqli_num_rows($check_auth) > 0 ) {
	// successfull
	$user_data = mysqli_fetch_assoc($check_auth);
	$_SESSION['logged_in'] = true;
	$_SESSION['user_id'] = $user_data['user_id'];

	mysqli_close($conn);
	header('location: ../index.php?msg=Logged+In');

} else {
	// unsuccessfull
	mysqli_close($conn);
	header('location: ../index.php?msg=Invalid+Credentials');
}