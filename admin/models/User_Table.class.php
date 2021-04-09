<?php
    include_once "admin/models/Table.class.php";
    class User_Table extends Table{
        public function saveNewUser($user_img, $fname, $lname, $uname, $email, $pwd_1){
        	$this->isEmailValid($email);
        	$this->isUnameValid($uname);
        	$this->isPasswdValid($pwd_1);
            $sql = "INSERT INTO users (user_img, fname, lname, uname, email, passwd) VALUES (?, ?, ?, ?, ?, MD5(?))";
            $data = array($user_img, $fname, $lname, $uname, $email, $pwd_1);
            $statement = $this->makeStatement($sql, $data);
            return $statement;
		}
		public function checkLoginCredentials($email, $uname, $passwd){
			$sql = "SELECT email FROM users WHERE email = ? AND uname = ? AND passwd = MD5(?)";
			$data = array($email, $uname, $passwd);
			$statement = $this->makeStatement($sql, $data);
			if($statement->rowCount() === 1){
				$out = true;
			}else{
				$loginErr = new Exception("Login failed! Incorrect Email, Username or Password.");
				throw $loginErr;
			}
		}
        public function isEmailValid($email){
        	$sql = "SELECT email FROM users WHERE email = ?";
        	$data = array($email);
        	$statement = $this->makeStatement($sql, $data);
        	if($statement->rowCount() === 1){
        		$emailErr = new Exception("Email '$email' alredy exists!");
        		throw $emailErr;
        	}
        }
        public function isUnameValid($uname){
        	$sql = "SELECT uname FROM users WHERE uname = ?";
        	$data = array($uname);
        	$statement = $this->makeStatement($sql, $data);
        	if($statement->rowCount() === 1){
        		$unameErr = new Exception("Username '$uname' alredy exists!");
        		throw $unameErr;
        	}
        }
        public function isPasswdValid($pwd_1){
        	$valid = true;

        	$len = strlen($pwd_1);
        	if(($len < 6) || ($len > 16)){
        		$passwdErr = new Exception("Password should have a min of 6 and max of 16 characters.");
        		throw $passwdErr;
        		$valid = false;
        	}

        	if(!preg_match("/[A-Z]/", $pwd_1)){
        		$passwdErr = new Exception("Password must contain at leats one Capital letter.");
        		throw $passwdErr;
        		$valid = false;
        	}

        	if(!preg_match("/[a-z]/", $pwd_1)){
        		$passwdErr = new Exception("Password must contain at leats one small letter.");
        		throw $passwdErr;
        		$valid = false;
        	}

        	if(!preg_match("/\d/", $pwd_1)){
        		$passwdErr = new Exception("Password must contain atleats one digit.");
        		throw $passwdErr;
        		$valid = false;
        	}
		}
		public function getUserData($email, $uname){
			$sql = "SELECT * FROM users WHERE email = ? AND uname = ?";
			$data = array($email, $uname);
			$statement = $this->makeStatement($sql, $data);
			$model = $statement->fetchObject();
			return $model;
		}
		public function getUsers(){
			$sql = "SELECT * FROM users";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getUserCount(){
			$sql = "SELECT COUNT(*) AS userCount FROM users";
			$statement = $this->makeStatement($sql);
			$model = $statement->fetchObject();
			return $model;
		}
		public function getUsersById($id){
			$sql = "SELECT * FROM users WHERE user_id = ?";
			$data = array($id);
			$statement = $this->makeStatement($sql, $data);
			$model = $statement->fetchObject();
			return $model;
		}
		public function getExcos(){
			$sql = "SELECT * FROM users WHERE exco = 1";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getExcoCount(){
			$sql = "SELECT COUNT(*) AS excoCount FROM users WHERE exco = 1";
			$statement = $this->makeStatement($sql);
			$model = $statement->fetchObject();
			return $model;
		}
		public function getExcoById($id){
			$sql = "SELECT * FROM users WHERE user_id = ? AND exco = 1";
			$data = array($id);
			$statement = $this->makeStatement($sql, $data);
			$model = $statement->fetchObject();
			return $model;
		}
		public function deleteUser($id){
			$sql = "DELETE FROM users WHERE user_id = ?";
			$data = array($id);
			$statement = $this->makeStatement($sql, $data);
			return $statement;
		}
		public function verifyUser($id){
			$sql = "UPDATE users SET exco = '1' WHERE user_id = ?";
			$data = array($id);
			$statement = $this->makeStatement($sql, $data);
			return $statement;
		}
		public function unverifyUser($id){
			$sql = "UPDATE users SET exco = '0' WHERE user_id = ?";
			$data = array($id);
			$statement = $this->makeStatement($sql, $data);
			return $statement;
		}
		public function updateOffice($id, $post){
			$sql = "UPDATE users SET office = ? WHERE user_id = ?";
			$data = array($post, $id);
			$statement = $this->makeStatement($sql, $data);
			return $statement;
		}
		public function getUsersByOffice($exco, $post){
			$sql = "SELECT * FROM users WHERE exco = 1 AND office = ?";
			$data = $array($exco, $post);
			$statement = $this->makeStatement($sql, $data);
			$model = $statement->fetchObject();
			return $model;
		}
		public function searchMembers($searchTerm){
			$sql = "SELECT * FROM users WHERE fname LIKE ? OR lname LIKE ? OR uname LIKE ? OR email LIKE ? OR office LIKE ?";
			$data = array("%$searchTerm%","%$searchTerm%","%$searchTerm%","%$searchTerm%", "%$searchTerm%");
			$statement = $this->makeStatement($sql, $data);
			if(!$statement){
				$searchErr = new Exception("Something went wrong!");
				throw $searchErr;
			}else{
				return $statement;
			}
		}
    }
?>