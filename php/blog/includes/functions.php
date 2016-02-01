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


function get_all_posts() {
	global $conn;

	$posts_query = "SELECT * FROM posts";

	$posts_query = mysqli_query($conn, $posts_query);

	$all_posts = array();

	// $counter  = 0;
	while( $post = mysqli_fetch_assoc($posts_query) ) {
		// $all_posts[$counter++] = $post; 
		$all_posts[] = $post; 
	}

	return $all_posts;
}


// get_post('abc');
function get_post($post_id = 0) {
	global $conn;

	$post_id = (int) $post_id;

	$posts_query = "SELECT * FROM posts WHERE post_id={$post_id}";

	$posts_query = mysqli_query($conn, $posts_query);

	if( $posts_query )
		return mysqli_fetch_assoc($posts_query);
	else
		return false;
}
function get_category($category_id = 0) {
	global $conn;

	$category_id = (int) $category_id;

	$category_query = "SELECT * FROM categories WHERE category_id={$category_id}";

	$category_query = mysqli_query($conn, $category_query);

	if( $category_query )
		return mysqli_fetch_assoc($category_query);
	else
		return false;
}

// post_exists($post_id)
// post_exists(587) // must return false
// post_exists(3) // must return true

function post_exists($post_id) {

	return true;
}