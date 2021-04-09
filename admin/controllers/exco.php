<?php
    include_once "admin/models/User_Table.class.php";
	$userTable = new User_Table($db);
	$allExcos = $userTable->getExcos();
    $excoCount = $userTable->getExcoCount();
    
    $userRequested = isset( $_GET['id'] );
	if($userRequested) {
	 	$id = $_GET['id'];
	 	$userData = $userTable->getExcoById($id);
	 	$userData->user_id = $id;
	 	$return = include_once "admin/views/exco_v.php";
	}else{
		$return = include_once "admin/views/excos_v.php";
    }
    return $return;
?>