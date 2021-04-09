<?php
    include_once "admin/models/User_Table.class.php";
    $userData = new User_Table($db);
    
    $numOfUsers = $userData->getUserCount();
    $numOfExco = $userData->getExcoCount();

    $allExco = $userData->getExcos();
    $excoCount = $userData->getExcoCount();

    include_once "admin/models/Admin_User_Table.class.php";
    $adminData = new Admin_User_Table($db);
    $numOfAd_Users = $adminData->getAduserCount();

    include_once "admin/models/Blog_Entry_Table.class.php";
	$blogEntry = new Blog_Entry_Table($db);
	$allEntries = $blogEntry->getBlogEntires();

    $output = include_once "admin/views/dashboard_v.php";
    return $output;
?>