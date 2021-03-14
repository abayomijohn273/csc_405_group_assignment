<?php
    include_once "admin/models/Table.class.php";
    class User_Table extends Table{
        public function saveNewUser($fname, $lname, $uname, $email, $pwd_1){
        	$this->isEmailValid($email);
        	$this->isUnameValid($uname);
        	$this->isPasswdValid($pwd_1);
            $sql = "INSERT INTO users (fname, lname, uname, email, passwd) VALUES (?, ?, ?, ?, MD5(?))";
            $data = array($fname, $lname, $uname, $email, $pwd_1);
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
        		$passwdErr = new Exception("Password must contain atleats one Capital letter.");
        		throw $passwdErr;
        		$valid = false;
        	}

        	if(!preg_match("/[a-z]/", $pwd_1)){
        		$passwdErr = new Exception("Password must contain atleats one small letter.");
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
    }
?>