<?php

require_once('../../load.php');

if( !isset($_POST['edit_user_btn']) || !isset($_POST['user_id']) || !is_logged_in() ) {
	header('Location: ../index.php');
	die();
}


$user_id = (int) $_POST['user_id'];

$full_name = mysqli_escape_string( $conn, $_POST['full_name'] );
$username = mysqli_escape_string( $conn, $_POST['username'] );

$password = mysqli_escape_string( $conn, $_POST['password'] );

// don't write too many queries

$update_query = 
	"UPDATE users
		SET
	full_name='{$full_name}',
	username='{$username}'";

if( !empty($password) ) {
	$password = md5($password);
	$update_query .= ", password='{$password}'";
}

$update_query .= " WHERE user_id={$user_id}";


if(mysqli_query($conn, $update_query) ) {

	mysqli_close($conn);
	header('location: ../?page=all_users&msg=User data was successfully updated');

} else {
	
	mysqli_close($conn);
	header('location: ../?page=all_users&msg=There was an error in updating user data.');
}