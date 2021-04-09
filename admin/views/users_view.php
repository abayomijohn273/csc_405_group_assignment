<?php
	$usersFound = isset( $allUsers );
	if($usersFound === false){
		trigger_error('admin/view/users_view.php needs $allUsers');
	}
	$return =  "<div class='content Table_one'>
		          	<div class='container-fluid'>
		          		<div class='row'>
		            		<div class='col-xl-12 col-lg-12'>
		            			<div class='card card-chart'>
					                <div class='card-header card-header-info'>
					                  	<h4 class='card-title'>Registered Users</h4>
                  						<p class='card-category'>Click to see user details.</p>";
                  						if($userCount->userCount <= 1){
                  							$return .= "<small style='text-align:right;'>$userCount->userCount User</small>";
                  						}else{
                  							$return .= "<small style='text-align:right;'>$userCount->userCount Users</small>";
                  						}
					    $return .= "</div>
					                <div class='card-body table-responsive'>
					                	<table class='table table-hover'>
					                    	<thead class='text-warning'>
					                    		<tr>
						                      		<th>ID</th>
						                      		<th>Firstname</th>
						                      		<th>Lastname</th>
						                      		<th>Username</th>
						                      		<th>Email</th>
						                      		<th>Status</th>
						                      		<th>Office</th>
						                      		<th>Date</th>
					                      		</tr> 
					                    	</thead>
					                    	<tbody>";
					           	while($row = $allUsers->fetchObject()){
					           		$href = "admin.php?ad_page=users&amp;id=$row->user_id";
					                $return .= "<tr>
							                        <td>$row->user_id</td>
							                        <td class='tab-data'><a href='$href'>$row->fname</a></td>
							                        <td class='tab-data'><a href='$href'>$row->lname</a></td>
							                        <td class='tab-data'><a href='$href'>$row->uname</a></td>
							                        <td class='tab-data'><a href='$href'>$row->email</a></td>
							                        <td class='tab-data'>";
							                    	if($row->exco > 0){
							                    		$return .= "<button class='btn btn-success disabled' style='color:#ccc;'>Executive</button>";
							                    	}else{
							                    		$return .= "<button class='btn btn-warning disabled' style='color:#ccc;'>Member</button>";
							                    	}
										$return .= "</td>
													<td class='tab-data'><a href='$href'>";
													if(!empty($row->office)){
														$return .= "$row->office";
													}else{
														$return .= "<i>None</i>";
													}
										$return .= "</a></td>
													<td class='tab-data'><a href='$href'>$row->reg_date</a></td>
							                    </tr>";
					           	}

					            $return .= "</tbody>
					                  	</table>
					                </div>
					                <div class='card-footer'>

					                </div>
					            </div>
					        </div>
					    </div>
					</div>
				</div>";
	return $return; 
?>