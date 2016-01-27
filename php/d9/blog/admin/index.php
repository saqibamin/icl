<?php
	
	require_once('../load.php');
	
	require_once('includes/header.php');
	
	if( is_logged_in() ) {
		require_once('includes/nav.php');

		if( isset($_GET['page']) ) {
			// new-category
			// new-user
			// all-posts

			$valid_pages = array('new-category', 'new-user');
			$page = $_GET['page'];
			
			if( in_array($page, $valid_pages) )
				require_once('includes/' . $page . '.php');
			else 
				require_once('includes/new-post.php');


		} else {
			require_once('includes/new-post.php');
		}


	} else {
		require_once('includes/login.php');
	}

	require_once('includes/footer.php');