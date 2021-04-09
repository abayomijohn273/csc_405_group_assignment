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
	 	$output = include_once "views/member.php";
	}else{
		$output = include_once "views/members_v.php";
	}
    return $output;
?>