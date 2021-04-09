<?php
	include_once "admin/models/Due_Table.class.php";
	$dueData = new Due_Table($db);

	$allDues = $dueData->getDues();
	$allDues2 = $dueData->getDues_auto();

	/*$save = isset($_POST['add']);
	$update = isset($_POST['update']);

	if($save){
		//$id = $_POST['id'];
		$due_title = $_POST['due_title'];
		$amount = $_POST['amount'];

		if(!empty($due_title) || !empty($amount)){
			try{
				$dueData->saveDues($due, $price);
				header("location: admin.php?ad_page=dues");
			}catch(Exception $e){

			}
		}
	}elseif($update){
		$id = $_POST['id'];
		$due_title = $_POST['due_title'];
		$amount = $_POST['amount'];

		if(!empty($due_title) || !empty($amount)){
			try{
				$dueData->updateDues($id, $due, $price);
				header("location: admin.php?ad_page=dues");
			}catch(Exception $e){
				
			}
		}
	}
	$entryRequested = isset($_GET['id']);
	if($entryRequested){
	 	$id = $_GET['id'];
	 	$entryData = $dueData->getDuesById($id);
	 	$entryData->id = $id;
	}*/
	$output = include_once "admin/views/dues_v.php";
	return $output;
?>