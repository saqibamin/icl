<?php

require_once('../../load.php');

if( !isset($_POST['new_cat_btn']) || !is_logged_in() ) {
	header('Location: ../index.php');
	die();
}


$category_name = mysqli_escape_string( $conn, $_POST['category_name'] );

$insert_query = 
	"INSERT INTO categories(category_name)
	VALUES('$category_name')";


if(mysqli_query($conn, $insert_query) ) {
	mysqli_close($conn);
	header('location: ../index.php?page=new-category&msg=Category was successfully Created');

} else {
	// unsuccessfull
	mysqli_close($conn);
	header('location: ../index.php?page=new-category&msg=There was some error in creating new category. Please try agian later.');
}