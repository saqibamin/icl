<?php 

require_once('../../load.php');

if( !isset($_GET['user_id']) || !is_logged_in() || $_GET['user_id'] == $_SESSION['user_id'] ) {
	header('Location: ../index.php?page=all_users');
	die();
}


$user_id = (int) $_GET['user_id'];

$del_query = "DELETE FROM users WHERE user_id={$user_id}";
if( mysqli_query($conn, $del_query) ) {
	// deletion successfull
	
	$del_posts = "DELETE FROM posts WHERE user_id={$user_id}";
	mysqli_query($conn, $del_posts);

	mysqli_close($conn);
	header('location: ../?page=all_users&msg=User was successfully deleted.');
} else {
	// there was an error in deleting
	mysqli_close($conn);
	header('location: ../?page=all_users&msg=Unable to delete the user');
}