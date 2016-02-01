<?php 

require_once('../../load.php');

if( !isset($_GET['category_id']) || !is_logged_in() || $_GET['category_id'] == 0 ) {
	header('Location: ../index.php?page=all_cats');
	die();
}


$category_id = (int) $_GET['category_id'];

$del_query = "DELETE FROM categories WHERE category_id={$category_id}";
if( mysqli_query($conn, $del_query) ) {
	// deletion successfull
	
	$update_post_ids = "UPDATE posts SET category_id=0 WHERE category_id={$category_id}";
	mysqli_query($conn, $update_post_ids);

	mysqli_close($conn);
	header('location: ../?page=all_cats&msg=Category was successfully Deleted');
} else {
	// there was an error in deleting
	mysqli_close($conn);
	header('location: ../?page=all_cats&msg=There was an error in deleting the Category');
}