<?php
    if(isset($signupErrMssg) === false ) {
		$signupErrMssg = "";
    }
    if(isset($success) == false){
        $success = "";
    }
    $return =  "<form action='index.php?page=register' method='POST' enctype='multipart/form-data'>
                    <center>
                        <h2 style='color:#575757;'>Register</h2>
                    </center>";
                    if($signupErrMssg){
                        if($signupErrMssg != $success){
                            $return .= "<div id='err_block' class='alert alert-warning alert-dismissible fade show' role='alert'>
                                            <i class='material-icons'>warning</i>
                                            <b>Warning:</b> $signupErrMssg
                                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                                                <span aria-hidden='true' class='close'>
                                                    <i class='material-icons'>clear</i>
                                                </span>
                                            </button>
                                        </div>";
                        }else{
                            $return .= "<div id='err_block' class='alert alert-success alert-dismissible fade show' role='alert'>
                                            <i class='material-icons'>check</i>
                                            <b>Warning:</b> $signupErrMssg
                                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                                                <span aria-hidden='true' class='close'>
                                                    <i class='material-icons'>clear</i>
                                                </span>
                                            </button>
                                        </div>";
                        }
                    }else{
                        $return .= "";
                    }
        $return .= "<div class='div_row'>
                        <label>Name</label>
                        <div class='inner_row'>
                            <input class='mail_input' type='file' name='user_pic'>
                        </div>
                    </div>
                    <div class='div_row'>
                        <label>Name</label>
                        <div class='inner_row'>
                            <input type='text' name='firstname' placeholder='Firstname'>
                            <input type='text' name='lastname' placeholder='Lastname'>
                        </div>
                    </div>
                    <div class='div_row'>
                        <div class='div_inner'>
                            <label>Username</label>
                            <div class='inner_row'>
                                <input class='mail_input' type='text' name='username' placeholder='Username'>
                            </div>
                        </div>
                        <div class='div_inner'>
                            <label>E-mail</label>
                            <div class='inner_row'>
                                <input class='mail_input' type='email' name='email' placeholder='Enter email address'>
                            </div>
                        </div>
                    </div>
                    <div class='div_row'>
                        <label>Password</label>
                        <div class='inner_row'>
                            <input type='password' name='passwd_1' placeholder='Password'>
                            <input type='password' name='passwd_2' placeholder='Confirm password'>
                        </div>
                    </div>
                    <div class='div_row'>
                        <button name='reg_btn'> Create Profile</button>
                    </div>
                    <center>
                        <small>Already have an account?<a href='index.php?page=login'>Login</a></small>
                    </center>
                </form>";
    return $return;
?>