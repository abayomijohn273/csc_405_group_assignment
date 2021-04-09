<?php
	if( isset($signinErrMssg) === false ) {
        $signinErrMssg = "";
    }
    if( isset($success) === false ) {
        $success = "";
    }
    if( isset($email) === false ) {
        $email = "";
    }
	$return =  "<center>
					<div class='login_bg_img' style='background-image: url(\"admin/img/defaults/BG-2.jpg\"); background-size:fill;'>
						<div class='wrap-login' style='background-color:rgba(26, 32, 53, 0.5);'>
							<div class='login'>
								<div class='myTitle'>
							        <h2 class='card-title txt'>Login</h2>
						        </div>";
								if($signinErrMssg and ($signinErrMssg != $success)){
									$return .= "<div class='alert alert-warning'>
													<div class='container'>
														<div class='alert-icon'>
															<i class='material-icons'>warning</i>
														</div>
														<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
															<span aria-hidden='true'><i class='material-icons'>clear</i></span>
														</button>
														<b>Warning:</b>$signinErrMssg
													</div>
												</div>";
								}else{
									$return .= "";
								}
					$return .= "<form action='admin.php?ad_page=login' method='post'>
									<div class='row input_class'>
										<label for='username' class='label-icon'>
											<i class='material-icons'>person</i>
										</label>
								        <div class='col-md-10 input_div'>
								            <div class='form-group'>
								                <label class='bmd-label-floating'>Username</label>
								                <input type='text' class='form-control' name='username'>
								            </div>
								        </div>
								    </div>
								    <div class='row input_class'>
								    	<label for='username' class='label-icon'>
											<i class='material-icons'>lock</i>
										</label>
								        <div class='col-md-10 input_div'>
								            <div class='form-group'>
												<label class='bmd-label-floating'>Password</label>
								                <input type='password' class='form-control' name='password'>
								            </div>
								       	</div>
								    </div>
								    <button  type='submit' class='btn btn-primary user_btn input_class' name='login_btn'>
								    	Login
								    </button>
								    <!--<small>Don't have a profile? <a href='admin.php?ad_page=signup'>Click here to Register</a></small>-->
								</form>
							</div>
						</div>
					</div>
				</center>";
	return $return;
?>