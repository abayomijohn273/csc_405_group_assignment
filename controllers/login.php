<?php
    include_once "admin/models/User_Table.class.php";
    $userData = new User_Table($db);

    if(isset($_POST['login_btn'])){
        $email = $_POST['email'];
        $uname = $_POST['username'];   
        $passwd = $_POST['passwd'];

        if(!empty($email) || !empty($uname) || !empty($passwd)){
            try{
                $userData->checkLoginCredentials($email, $uname, $passwd);
				$userLog->logIn($email, $uname);
				$success = "$email was logged in successfully!";
				$signinErrMssg = $success;
            }catch(Exception $loginErr){
                $loginErrMssg = $loginErr->getmessage();
            }
        }else{
            try{
                $emptyErr = new Exception("Please fill all fields!");
                throw $emptyErr;
            }catch(Exception $emptyErr){
                $loginErrMssg = $emptyErr->getMessage();
            }
        }
    }
    $output = null;
    if($userLog->isLoggedIn()){
        header("Location: index.php");
    }else{
        $output = include_once "views/login_v.php";
    }
    return $output;
?>