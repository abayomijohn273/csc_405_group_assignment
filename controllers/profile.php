<?php
    include_once "admin/models/User_Table.class.php";
    $userData = new User_Table($db);
    if($userLog->isLoggedIn()){
        $email = $_SESSION['email'];
        $uname = $_SESSION['uname'];
        try{
            $loggedUser = $userData->getUserData($email, $uname);
            //$success = "User '$uname' with email '$email' was successfully logged in!";

            $_SESSION['message'] = "You have clicked on button successfully";
            //header("location:index.php?page=message");

            $loggedErrMssg = $_SESSION['message'];
        }catch(Exception $e){
            $loggedErrMssg = $e->getMessage();
        }
    }
    $return = include_once "views/profile_v.php";
    return $return;
?>