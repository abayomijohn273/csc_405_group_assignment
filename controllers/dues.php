<?php
	include_once "admin/models/Due_Table.class.php";
	$dueData = new Due_Table($db);
	
	$allDues = $dueData->getDues();
	$allDues2 = $dueData->getDues_auto();
	
	$output = include_once "views/dues_v.php";
	return $output;
?>