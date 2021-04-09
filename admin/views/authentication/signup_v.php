<?php
	if( isset($adminSignupErrMssg) === false ) {
        $adminSignupErrMssg = "";
    }
    if( isset($email) === false ) {
        $email = "";
    }
    $success = "New user created for $email!";
	$return =  "<div class='content Table_one'>
		          	<div class='container-fluid'>
		          		<div class='row' style='padding-top:5%; padding-left:10%; padding-right:10%;'>
		            		<div class='col-xl-12 col-lg-12'>
		            			<div class='card card-chart'>
					                <div class='card-header card-header-success'>
					                  	<h4 class='card-title'>Add Administrative Users</h4>
                  						<p class='card-category'>You can add people you want to have access to this module.</p>
					                </div>
					                <div class='card-body'>";
					                if($adminSignupErrMssg){
										if($adminSignupErrMssg != $success){
											$return .= "<div class='alert alert-warning'>
				                                            <div class='container'>
				                                              <div class='alert-icon'>
				                                                <i class='material-icons'>warning</i>
				                                              </div>
				                                              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				                                                <span aria-hidden='true'><i class='material-icons'>clear</i></span>
				                                              </button>
				                                              <b>Warning:</b>$adminSignupErrMssg
				                                            </div>
				                                        </div>";
										}else{
											$return .= "<div class='alert alert-success'>
				                                            <div class='container'>
				                                              <div class='alert-icon'>
				                                                <i class='material-icons'>check</i>
				                                              </div>
				                                              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				                                                <span aria-hidden='true'><i class='material-icons'>clear</i></span>
				                                              </button>
				                                              <b>Success Alert:</b> $adminSignupErrMssg
				                                            </div>
				                                        </div>";
										}
									}else{
										$return .= "";
									}
					        $return .= "<form class='submit_user' action='admin.php?ad_page=signup' method='post' enctype='multipart/form-data'>
					                    	<div class='row'>
					                      		<div class='col-md-12'>
					                        		<div class=''>
					                          			<label class='bmd-label-floating'>File Upload</label>
					                          			<input type='file' name='profile_pic' class='form-control p-input btn btn-primary' style='background-color:rgba(0, 0, 0, 0); padding:3%; border-radius:5px; color:#999;'>
					                        		</div>
					                      		</div>
					                      	</div>
					                      	<div class='row'>
					                      		<div class='col-md-5'>
					                        		<div class='form-group'>
								                        <label class='bmd-label-floating'>Username</label>
								                        <input type='text' class='form-control' name='username'>
					                        		</div>
					                      		</div>
						                      	<div class='col-md-7'>
							                        <div class='form-group'>
							                          	<label class='bmd-label-floating'>Email address</label>
							                          	<input type='email' class='form-control' name='email'>
							                        </div>
						                      	</div>
					                    	</div>
					                    	<div class='row'>
					                    		<div class='col-md-6'>
					                        		<div class='form-group'>
					                          			<label class='bmd-label-floating'>Password</label>
					                          			<input type='password' class='form-control' name='password_1'>
					                        		</div>
					                      		</div>
					                      		<div class='col-md-6'>
					                        		<div class='form-group'>
					                          			<label class='bmd-label-floating'>Confirm Password</label>
					                          			<input type='password' class='form-control' name='password_2'>
					                        		</div>
					                      		</div>
					                    	</div>
					                    	<center>
						                    	<button type='submit' class='btn btn-primary user_btn' name='add_user'>
						                    		Create Profile
						                    	</button><br/>
						                    	<small>Already have a profile? <a href='admin.php?ad_page=login'>Click here to login</a></small>
					                    	</center>
					                    	<div class='clearfix'></div>
					                  	</form>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
				</div>";
	$return .= "<div class='content Table_two'>
		          	<div class='container-fluid'>
		          		<div class='row'>
		            		<div class='col-xl-12 col-lg-12'>
		            			<div class='card card-chart'>
					                <div class='card-header card-header-success'>
					                  	<h4 class='card-title'>Add Administrative Users</h4>
                  						<p class='card-category'>You can add people you want to have access to this module.</p>
					                </div>
					                <div class='card-body'>";
					                if($adminSignupErrMssg){
										if($adminSignupErrMssg != $success){
											$return .= "<div class='alert alert-warning'>
				                                            <div class='container'>
				                                              <div class='alert-icon'>
				                                                <i class='material-icons'>warning</i>
				                                              </div>
				                                              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				                                                <span aria-hidden='true'><i class='material-icons'>clear</i></span>
				                                              </button>
				                                              <b>Warning:</b>$adminSignupErrMssg
				                                            </div>
				                                        </div>";
										}else{
											$return .= "<div class='alert alert-success'>
				                                            <div class='container'>
				                                              <div class='alert-icon'>
				                                                <i class='material-icons'>check</i>
				                                              </div>
				                                              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				                                                <span aria-hidden='true'><i class='material-icons'>clear</i></span>
				                                              </button>
				                                              <b>Success Alert:</b> $adminSignupErrMssg
				                                            </div>
				                                        </div>";
										}
									}else{
										$return .= "";
									}
					        $return .= "<form class='submit_user' action='admin.php?ad_page=signup' method='post' enctype='multipart/form-data'>
					                    	<div class='row'>
					                      		<div class='col-md-12'>
					                        		<div class=''>
					                          			<label class='bmd-label-floating'>File Upload</label>
					                          			<input type='file' name='profile_pic' class='form-control p-input btn btn-primary' style='background-color:rgba(0, 0, 0, 0); padding:3%; border-radius:5px; color:#999;'>
					                        		</div>
					                      		</div>
					                      	</div>
					                      	<div class='row'>
					                      		<div class='col-md-6'>
					                        		<div class='form-group'>
								                        <label class='bmd-label-floating'>Username</label>
								                        <input type='text' class='form-control' name='username'>
					                        		</div>
					                      		</div>
						                      	<div class='col-md-6'>
							                        <div class='form-group'>
							                          	<label class='bmd-label-floating'>Email address</label>
							                          	<input type='email' class='form-control' name='email'>
							                        </div>
						                      	</div>
					                    	</div>
					                    	<div class='row'>
					                    		<div class='col-md-6'>
					                        		<div class='form-group'>
					                          			<label class='bmd-label-floating'>Password</label>
					                          			<input type='password' class='form-control' name='password_1'>
					                        		</div>
					                      		</div>
					                      		<div class='col-md-6'>
					                        		<div class='form-group'>
					                          			<label class='bmd-label-floating'>Confirm Password</label>
					                          			<input type='password' class='form-control' name='password_2'>
					                        		</div>
					                      		</div>
					                    	</div>
					                    	<center>
						                    	<button type='submit' class='btn btn-primary user_btn' name='add_user'>
						                    		Create Profile
						                    	</button><br/>
					                    		<small>Already have a profile? <a href='admin.php?ad_page=login'>Click here to login</a></small>
					                    	</center>
					                    	<div class='clearfix'></div>
					                  	</form>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
				</div>";
	return $return; 
?>