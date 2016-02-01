<?php 

require_once('../../load.php');

if( !isset($_GET['post_id']) || !is_logged_in() ) {
	header('Location: ../index.php?page=all_posts');
	die();
}


$post_id = (int) $_GET['post_id'];

$del_query = "DELETE FROM posts WHERE post_id={$post_id}";
if( mysqli_query($conn, $del_query) ) {
	// deletion successfull
	mysqli_close($conn);
	header('location: ../?page=all_posts&msg=Post was successfully Deleted');
} else {
	// there was an error in deleting
	mysqli_close($conn);
	header('location: ../?page=all_posts&msg=There was an error in deleting the post');
}