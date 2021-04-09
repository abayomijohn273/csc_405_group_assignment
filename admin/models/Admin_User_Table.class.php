<?php
    include_once "admin/models/Table.class.php";
    class Admin_User_Table extends Table{
        public function checkAdminCredentials($uname, $passwd){
            $sql = "SELECT uname FROM admin_user WHERE uname = ? AND passwd = MD5(?)";
            $data = array($uname, $passwd);
            $statement = $this->makeStatement($sql, $data);
            if($statement->rowCount() === 1){
                $out = true;
            }else{
                $ad_loginErr = new Exception("Login failed! Incorrect Username or Password.");
                throw $ad_loginErr;
            }
            return $out;
        }
        public function getAdusers(){
			$sql = "SELECT * FROM admin_user";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getAduserCount(){
			$sql = "SELECT COUNT(*) AS aduserCount FROM admin_user";
			$statement = $this->makeStatement($sql);
			$model = $statement->fetchObject();
			return $model;
        }
        public function deleteAduser($id){
			$sql = "DELETE FROM admin_user WHERE admin_id = ?";
			$data = array($id);
			$statement = $this->makeStatement($sql, $data);
			return $statement;
		}
    }
?>