<?php
require_once('../../load.php');

unset($_SESSION['user_id']);
unset($_SESSION['logged_in']);

header('location: ../index.php?msg=Logged+Out');