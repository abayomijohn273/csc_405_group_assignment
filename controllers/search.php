<?php
	include_once "admin/models/Blog_Entry_Table.class.php";
	$blogTable = new Blog_Entry_Table($db);

	include_once "admin/models/Due_Table.class.php";
	$dueTable = new Due_Table($db);

	include_once "admin/models/User_Table.class.php";
	$userTable = new User_Table($db);

	$output = "";
	$searchInit = isset($_POST['search_term']);
	if($searchInit){
		$searchTerm = $_POST['searchTerm'];
		if(!empty($searchTerm)){
			try{
				$searchData = $blogTable->searchBlogRecords($searchTerm);
				$searchData1 = $userTable->searchMembers($searchTerm);
				$searchData2 = $dueTable->searchDues($searchTerm);
			}catch(Exception $searchErr){
				$searchTermErr = $searchErr->getMessage();
			}
		}else{
			try{
				$emptyErr = new Exception("Search can't be empty! Please input a search term.");
				throw $emptyErr;
			}catch(Exception $emptyErr){
				$searchTermErr = $emptyErr->getMessage();
			}
		}
	}

	$output = include_once "views/search_v.php";
	return $output;
?>