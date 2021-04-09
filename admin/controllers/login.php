<?php
	include_once "admin/models/Admin_User_Table.class.php";
	$adminUser = new Admin_User_Table($db);

	if(isset($_POST['login_btn'])){
		$uname = $_POST['username'];
		$pwd = $_POST['password'];

		if(!empty($uname) or !empty($pwd)){
			try{
				$adminUser->checkAdminCredentials($uname, $pwd);
				$ad_userLog->login($uname);
				$success = "Welcome '$uname' user!";
				$signinErrMssg = $success;
			}catch(Exception $ad_loginErr){
				$signinErrMssg = $ad_loginErr->getMessage(); 
			}
		}else{
			try{
				$emptyErr = new Exception("Please, fill all fields!");
				throw $emptyErr;
			}catch(Exception $emptyErr){
				$signinErrMssg = $emptyErr->getMessage(); 
			}
		}
	}
	$output = NULL;
	if($ad_userLog->is_LoggedIn()){
		header("location: admin.php");
	}else{
		$output = include_once "admin/views/authentication/login_v.php";
	}
	return $output;
?>