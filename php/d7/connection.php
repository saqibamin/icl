<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'test';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if( !$conn ) die('Unable to connect to Database');