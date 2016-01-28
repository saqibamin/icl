<?php

require_once('../../load.php');

if( !isset($_POST['edit_post_btn']) || !isset($_POST['post_id']) || !post_exists($_GET['post_id']) || !is_logged_in() ) {
	header('Location: ../index.php?page=all_posts');
	die();
}


$post_title = $_POST['post_title'];
$post_content = $_POST['post_content'];
$category_id = (int) $_POST['category_name'];
$post_id = (int) $_POST['post_id'];


$update_query = 
	"UPDATE posts
		SET
	post_title='{$post_title}',
	post_content='{$post_content}',
	category_id={$category_id}
	
	WHERE
	post_id={$post_id}";

if(mysqli_query($conn, $update_query) ) {
	mysqli_close($conn);
	header('location: ../?page=all_posts&msg=Post was successfully Updated');

} else {
	// unsuccessfull
	// echo mysqli_error($conn);
	// die();
	mysqli_close($conn);
	header('location: ../?page=all_posts&msg=There was some error in updating post. Please try agian later.');
}