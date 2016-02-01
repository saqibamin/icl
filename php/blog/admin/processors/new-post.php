<?php

require_once('../../load.php');

if( !isset($_POST['new_post_btn']) || !is_logged_in() ) {
	header('Location: ../index.php');
	die();
}


$post_title = mysqli_escape_string( $conn, $_POST['post_title'] );
$post_content = mysqli_escape_string( $conn, $_POST['post_content'] );
$category_id = (int) $_POST['category_name'];
$user_id = $_SESSION['user_id'];

$insert_query = 
	"INSERT INTO posts(user_id,post_title, post_content, category_id)
	VALUES($user_id, '$post_title', '$post_content', $category_id)";


if(mysqli_query($conn, $insert_query) ) {
	mysqli_close($conn);
	header('location: ../index.php?msg=Post was successfully Published');

} else {
	// unsuccessfull
	mysqli_close($conn);
	header('location: ../index.php?msg=There was some error in publishing post. Please try agian later.');
}