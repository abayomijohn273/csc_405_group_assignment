<?php
	include_once "admin/models/User_Table.class.php";
	$userTable = new User_Table($db);
	$allUsers = $userTable->getUsers();
	$userCount = $userTable->getUserCount();

	$userRequested = isset( $_GET['id'] );
	if($userRequested) {
	 	$id = $_GET['id'];
	 	$userData = $userTable->getUsersById($id);
	 	$userData->user_id = $id;
	 	$return = include_once "admin/views/user_view.php";
	}else{
		$return = include_once "admin/views/users_view.php";
	}
	return $return;
?>