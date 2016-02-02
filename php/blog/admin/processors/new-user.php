<?php

require_once('../../load.php');

if( !isset($_POST['new_user_btn']) || !is_logged_in() ) {
	header('Location: ../index.php');
	die();
}


$full_name = mysqli_escape_string( $conn, $_POST['full_name'] );
$username = mysqli_escape_string( $conn, $_POST['username'] );

$password = mysqli_escape_string( $conn, $_POST['password'] );
$password = md5($password);

$insert_query = 
	"INSERT INTO users(full_name, username, password)
	VALUES('$full_name', '$username', '$password')";


if(mysqli_query($conn, $insert_query) ) {
	// user had been added in db
	mysqli_close($conn);
	header('location: ../?page=all_users&msg=User was successfully added');

} else {
	// there was an error, username might be the reason for this error in most cases
	mysqli_close($conn);
	header('location: ../?page=all_users&msg=Unable to create user. Please check username.');
}