<?php
	include_once "admin/models/User_Table.class.php";
	$userTable = new User_Table($db);

	$removeUser = isset($_POST['remove_user']);
	$verifyUser = isset($_POST['verify']);
	$unverifyUser = isset($_POST['unverify']);
	$updateOffice = isset($_POST['office_update']);
	$return_To_Users_Pg = isset($_POST['return_To_Users_pg']);

	if($removeUser){
		$id = $_POST['id'];
		$userData = $userTable->deleteUser($id);
		$return = include_once "admin/controllers/users.php";
	}else if($verifyUser){
		$id = $_POST['id'];
		$userData = $userTable->verifyUser($id);
		$return = include_once "admin/controllers/users.php";
	}else if($unverifyUser){
		$id = $_POST['id'];
		$userData = $userTable->unverifyUser($id);
		$return = include_once "admin/controllers/users.php";
	}else{
		$return = include_once "admin/controllers/users.php";
	}
	if($updateOffice){
		$id = $_POST['id'];
		$post = $_POST['office'];
		$userData = $userTable->updateOffice($id, $post);
		$return .= include_once "admin/controllers/users.php";
	}
	return $return;
?>