<?php
	class Admin_Session_Log{
		private $_loggedIn = false;

		public function __construct(){
			session_start();
		}

		public function is_LoggedIn(){
			$admin_session = isset($_SESSION['admin_session']);
			if($admin_session){
				$out = $_SESSION['admin_session'];
			}else{
				$out = false;
			}
			return $out;
		}

		public function login($uname){
			$_SESSION['admin_session'] = true;
			$_SESSION['uname'] = $uname;
		}

		public function logout(){
			session_destroy($_SESSION['admin_session']);
			$_SESSION['admin_session'] = false;
		}
	}
?>