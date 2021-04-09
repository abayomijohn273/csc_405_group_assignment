<?php
	include_once "admin/models/Due_Table.class.php";
	$dueData = new Due_Table($db);
 
	if(isset($_POST['save'])){
		$due_title = $_POST['due_title'];
		$amount = $_POST['amount'];

		if(!empty($due_title) || !empty($amount)){
			try{
				$dueData->saveDues($due_title, $amount);
				header("location: admin.php?ad_page=dues");
			}catch(Exception $e){

			}
		}
	}
	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$due_title = $_POST['due_title'];
		$amount = $_POST['amount'];

		if(!empty($due_title) || !empty($amount)){
			try{
				$dueData->updateDues($id, $due_title, $amount);
				header("location: admin.php?ad_page=dues");
			}catch(Exception $e){
				
			}
		}
	}
	if(isset($_POST['remove_due'])){
    	$id = $_POST['id'];
		$userData = $dueData->deleteDues($id);
        header("Location: admin.php?ad_page=dues");
    }
	$entryRequested = isset($_GET['id']);
	if($entryRequested){
	 	$id = $_GET['id'];
	 	$entryData = $dueData->getDuesById($id);
	 	$entryData->id = $id;
	}
	$output = include_once "admin/views/edit_dues.php";
	return $output;
?>