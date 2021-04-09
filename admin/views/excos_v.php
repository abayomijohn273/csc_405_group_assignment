<?php
	$usersFound = isset( $allExcos );
	if($usersFound === false){
		trigger_error('admin/view/users_view.php needs $allExcos');
	}
	$return =  "<div class='content Table_one'>
		          	<div class='container-fluid'>
		          		<div class='row'>
		            		<div class='col-xl-12 col-lg-12'>
		            			<div class='card card-chart'>
					                <div class='card-header card-header-info'>
					                  	<h4 class='card-title'>Registered Users</h4>
                  						<p class='card-category'>Click to see user details.</p>";
                  						if($excoCount->excoCount <= 1){
                  							$return .= "<small style='text-align:right;'>$excoCount->excoCount User</small>";
                  						}else{
                  							$return .= "<small style='text-align:right;'>$excoCount->excoCount Users</small>";
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
						                      		<th>Date</th>
					                      		</tr> 
					                    	</thead>
					                    	<tbody>";
					           	while($row = $allExcos->fetchObject()){
					           		$href = "admin.php?ad_page=exco&amp;id=$row->user_id";
					                $return .= "<tr>
							                        <td>$row->user_id</td>
							                        <td class='tab-data'><a href='$href'>$row->fname</a></td>
							                        <td class='tab-data'><a href='$href'>$row->lname</a></td>
							                        <td class='tab-data'><a href='$href'>$row->uname</a></td>
							                        <td class='tab-data'><a href='$href'>$row->email</a></td> ";
							                    	if($row->exco > 0){
							                    		$return .= "<td class='tab-data'><button class='btn btn-success disabled' style='color:#ccc;'>Executive</a></td>";
							                    	}else{
							                    		$return .= "<td class='tab-data'><button class='btn btn-warning disabled' style='color:#ccc;'>Member</a></td>";
							                    	}
										$return .= "<td class='tab-data'><a href='$href'>$row->reg_date</a></td>
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