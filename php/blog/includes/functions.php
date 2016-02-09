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

	$posts_query = "SELECT * FROM posts ORDER BY publish_date DESC";

	$posts_query = mysqli_query($conn, $posts_query);

	$all_posts = array();

	// $counter  = 0;
	while( $post = mysqli_fetch_assoc($posts_query) ) {
		// $all_posts[$counter++] = $post; 
		$all_posts[] = $post; 
	}

	return $all_posts;
}

function get_current_page() {
	$current_page = 1;

	if( isset($_GET['paged']) && !empty($_GET['paged']) ) {
		$current_page = (int) $_GET['paged'];

		if( $current_page == 0 ) $current_page = 1;
	}

	return $current_page;
}
function get_posts() {
	global $conn;

	$post_per_page = get_posts_per_page();
	
	$current_page = get_current_page();

	$offset = ($current_page - 1) * $post_per_page;

	$posts_query = 
		"SELECT *
		FROM posts
		ORDER BY publish_date DESC
		LIMIT $offset, $post_per_page";

	$posts_query = mysqli_query($conn, $posts_query);

	$all_posts = array();

	// $counter  = 0;
	while( $post = mysqli_fetch_assoc($posts_query) ) {
		// $all_posts[$counter++] = $post; 
		$all_posts[] = $post; 
	}

	return $all_posts;
}

function get_category_posts($category_id = 0) {
	global $conn;

	$post_per_page = get_posts_per_page();
	
	$current_page = get_current_page();

	$offset = ($current_page - 1) * $post_per_page;

	$posts_query = 
		"SELECT *
		FROM posts
		WHERE category_id={$category_id}
		ORDER BY publish_date DESC
		LIMIT $offset, $post_per_page";

	$posts_query = mysqli_query($conn, $posts_query);

	$all_posts = array();

	// $counter  = 0;
	while( $post = mysqli_fetch_assoc($posts_query) ) {
		// $all_posts[$counter++] = $post; 
		$all_posts[] = $post; 
	}

	return $all_posts;
}
function get_user_posts($user_id = 0) {
	global $conn;

	$post_per_page = get_posts_per_page();
	
	$current_page = get_current_page();

	$offset = ($current_page - 1) * $post_per_page;

	$posts_query = 
		"SELECT *
		FROM posts
		WHERE user_id={$user_id}
		ORDER BY publish_date DESC
		LIMIT $offset, $post_per_page";

	$posts_query = mysqli_query($conn, $posts_query);

	$all_posts = array();

	// $counter  = 0;
	while( $post = mysqli_fetch_assoc($posts_query) ) {
		// $all_posts[$counter++] = $post; 
		$all_posts[] = $post; 
	}

	return $all_posts;
}

function get_all_users() {
	global $conn;

	$users_query = "SELECT * FROM users";

	$users_query = mysqli_query($conn, $users_query);

	$all_users = array();

	// $counter  = 0;
	while( $user = mysqli_fetch_assoc($users_query) ) {
		// $all_users[$counter++] = $user; 
		$all_users[] = $user; 
	}

	return $all_users;
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

function get_user($user_id = 0) {
	global $conn;

	$user_id = (int) $user_id;

	$user_query = "SELECT * FROM users WHERE user_id={$user_id}";

	$user_query = mysqli_query($conn, $user_query);

	if( $user_query )
		return mysqli_fetch_assoc($user_query);
	else
		return false;
}

function get_user_name_by_id($user_id = 0) {
	global $conn;

	$user_id = (int) $user_id;

	$user_query = "SELECT full_name FROM users WHERE user_id={$user_id}";

	$user_query = mysqli_query($conn, $user_query);

	if( $user_query ) {
		$user_query = mysqli_fetch_assoc($user_query);
		return array_shift($user_query);
	}
	else
		return '';
}

function get_total_posts_count() {
	global $conn;

	$posts_count = "SELECT COUNT(*) FROM posts";

	$posts_count = mysqli_query($conn, $posts_count);

	if( $posts_count ) {
		$posts_count = mysqli_fetch_assoc($posts_count);
		return array_shift($posts_count);
	}
	else
		return '';
}

function get_cat_posts_count($category_id = 0) {
	global $conn;

	$posts_count = "SELECT COUNT(*) FROM posts WHERE category_id={$category_id}";

	$posts_count = mysqli_query($conn, $posts_count);

	if( $posts_count ) {
		$posts_count = mysqli_fetch_assoc($posts_count);
		return array_shift($posts_count);
	}
	else
		return '';
}

function get_user_posts_count($user_id = 0) {
	global $conn;

	$posts_count = "SELECT COUNT(*) FROM posts WHERE user_id={$user_id}";

	$posts_count = mysqli_query($conn, $posts_count);

	if( $posts_count ) {
		$posts_count = mysqli_fetch_assoc($posts_count);
		return array_shift($posts_count);
	}
	else
		return '';
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

function post_exists($post_id = 0) {

	if( !get_post($post_id) ) {
		return false;
	} else return true;
}

function get_posts_per_page() {
	return 4;
}