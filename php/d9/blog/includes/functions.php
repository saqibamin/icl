<?php

function is_logged_in() {
	// if( isset($_SESSION['user_id']) )
	// 	return true;
	// else
	// 	return false;

	return isset($_SESSION['user_id']);
}

function get_all_categories() {
	global $conn;

	$cats_query = "SELECT * FROM categories";

	$cats_query = mysqli_query($conn, $cats_query);

	$all_cats = array();

	// $counter  = 0;
	while( $cat = mysqli_fetch_assoc($cats_query) ) {
		// $all_cats[$counter++] = $cat; 
		$all_cats[] = $cat; 
	}

	return $all_cats;
}