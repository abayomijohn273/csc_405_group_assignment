<?php
    if(isset($loginErrMssg) === false ) {
		$loginErrMssg = "";
    }
    if(isset($success) == false){
        $success = "";
    }
    $return =  "<form class='login_form' action='index.php?page=login' method='POST'>
                    <center>
                        <h2 style='color:#575757;'>Login</h2>
                    </center>";
                    if($loginErrMssg and ($loginErrMssg != $success)){
                            $return .= "<div id='err_block' class='alert alert-warning alert-dismissible fade show' role='alert'>
                                            <i class='material-icons'>warning</i>
                                            <b>Warning:</b> $loginErrMssg
                                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                                                <span aria-hidden='true' class='close'>
                                                    <i class='material-icons'>clear</i>
                                                </span>
                                            </button>
                                        </div>";
                    }else{
                        $return .= "";
                    }
        $return .= "<div class='div_row'>
                        <label>Email</label>
                        <div class='inner_row'>
                            <input class='mail_input' type='email' name='email' placeholder='E-mail'>
                        </div>
                    </div>
                    <div class='div_row'>
                        <label>Username</label>
                        <div class='inner_row'>
                            <input class='mail_input' type='text' name='username' placeholder='Username'>
                        </div>
                    </div>
                    <div class='div_row'>
                        <label>Password</label>
                        <div class='inner_row'>
                            <input class='mail_input' type='password' name='passwd' placeholder='Password'>
                        </div>
                    </div>
                    <div class='div_row'>
                        <button name='login_btn'>Sign in</button>
                    </div>
                    <center>
                        <small>Need an account?<a href='index.php?page=register'>Register</a></small>
                    </center>
                </form>";
    return $return;
?>