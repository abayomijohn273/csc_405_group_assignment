<?php
	$return =  "<div class='content'>
		          	<div class='container-fluid'>
		          		<div class='row'>
		            		<div class='col-xl-12 col-lg-12'>
		            			<div class='card card-chart'>
		            				<div class='card-header card-header-primary'>
						                <h4 class='card-title'>User Details</h4>
	                  					<p class='card-category'>Manage user here.</p>
						            </div>	           
						            <div class='card-body table-responsive'>
						             	<table class='table table-hover'>
						                  	<tbody>
							                    <tr>
					                				<th>ID</th>
													<td>$userData->user_id</td>
							                    </tr>
							                    <tr>
					                				<th>Firstname</th>
													<td class='tab-data'>$userData->fname</td>
							                    </tr>
							                    <tr>
							                    	<th>Lastname</th>
													<td class='tab-data'>$userData->lname</td>
												</tr>
												<tr>
							                    	<th>Username</th>
													<td class='tab-data'>$userData->uname</td>
												</tr>
												<tr>
							                    	<th>Email</th>
													<td class='tab-data'>$userData->email</td>
												</tr>
												<tr>
							                    	<th>Status</th>";
							                    	if($userData->exco > 0){
							                    		$return .= "<td class='tab-data'><button class='btn btn-success disabled' style='color:#ccc;'>Executive</a></td>";
							                    	}else{
							                    		$return .= "<td class='tab-data'><button class='btn btn-warning disabled' style='color:#ccc;'>Member</a></td>";
							                    	}
									$return .= "</tr>
							                    <tr>
							                    	<th>Date</th>
													<td class='tab-data'>$userData->reg_date</td>
							                    </tr>
					           				</tbody>
					                  	</table>
					                </div>
					                <div class='card-footer'>
						                <form class='submit_user' action='admin.php?ad_page=user_ctrl' method='post' style='width:100%;'>
						                	<input type='hidden' name='id' value='$userData->user_id'>
						                	<center>
							                	<button class='btn btn-secondary user_btn' name='return_To_Users_pg'>
							                		&lsaquo;&lsaquo; Back
							                	</button>";
							                	if($userData->exco == 0){
													$return .= "<button class='btn btn-success user_btn' name='verify'>
																	Verify
															    </button>
															    <button class='btn btn-warning user_btn' name='unverify' disabled>
																	UnVerify
															    </button>";
												}else{
													$return .= "<button class='btn btn-success user_btn' name='verify' disabled>
																	Verify
															    </button>
															    <button class='btn btn-warning user_btn' name='unverify'>
																	UnVerify
															    </button>";
												}
									$return .= "<button class='btn btn-danger user_btn' name='remove_user'>
									           		Delete
									       		</button>
								       		</center>
						           		</form>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
				</div>";
	return $return;
?>