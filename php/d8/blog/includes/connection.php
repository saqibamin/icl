<?php 

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'icl_blog';

$conn = mysqli_connect( $db_host, $db_user, $db_pass, $db_name );

if( !$conn ) die("Unable to Connect to Database");


