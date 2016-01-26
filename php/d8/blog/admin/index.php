<?php
	
	require_once('../load.php');
	
	require_once('includes/header.php');
	
	if( is_logged_in() ) {
		require_once('includes/nav.php');
	} else {
		require_once('includes/login.php');
	}

	require_once('includes/footer.php');