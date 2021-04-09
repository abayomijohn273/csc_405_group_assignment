<?php
	include_once "admin/models/User_Table.class.php";
    $userData = new User_Table($db);

	$output = include_once "views/history_v.php";
	return $output;
?>