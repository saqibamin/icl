<?php

require_once('../../load.php');

if( !isset($_POST['edit_cat_btn']) || !isset($_POST['category_id']) || !is_logged_in() ) {
	header('Location: ../index.php?page=all_cats');
	die();
}


$category_name = mysqli_escape_string( $conn, $_POST['category_name'] );
$category_id = (int) $_POST['category_id'];


$update_query = 
	"UPDATE categories
		SET
	category_name='{$category_name}'

	WHERE
	category_id={$category_id}";

if(mysqli_query($conn, $update_query) ) {
	mysqli_close($conn);
	header('location: ../?page=all_cats&msg=Category was successfully Updated');

} else {
	// unsuccessfull
	// echo mysqli_error($conn);
	// die();
	mysqli_close($conn);
	header('location: ../?page=all_cats&msg=There was some error in updating category. Please try agian later.');
}