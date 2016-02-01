<?php
	
	require_once('../load.php');
	
	require_once(ADMIN_PATH . 'includes/header.php');
	
	if( is_logged_in() ) {
		require_once(ADMIN_PATH . 'includes/nav.php');

		if( isset($_GET['page']) ) {
			// new-category
			// new-user
			// all-posts

			$valid_pages = 
				array('new-category', 'new-user', 'all_posts',
					'edit_post', 'all_cats', 'edit_cat');
			$page = $_GET['page'];
			
			if( in_array($page, $valid_pages) )
				require_once(ADMIN_PATH . 'includes/' . $page . '.php');
			else 
				require_once(ADMIN_PATH . 'includes/new-post.php');

		} else {
			require_once(ADMIN_PATH . 'includes/new-post.php');
		}


	} else {
		require_once(ADMIN_PATH . 'includes/login.php');
	}

	require_once(ADMIN_PATH . 'includes/footer.php');