<?php

function is_logged_in() {
	// if( isset($_SESSION['user_id']) )
	// 	return true;
	// else
	// 	return false;

	return isset($_SESSION['user_id']);
}