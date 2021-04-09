<?php
	$usersFound = isset( $allAdminUsers );
	if($usersFound === false){
		trigger_error('admin/views/users_view.php needs $allAdminUsers');
	}
	$return =  "<div class='content Table_one'>
		          	<div class='container-fluid'>
		          		<div class='row'>
		            		<div class='col-xl-12 col-lg-12'>
		            			<div class='card card-chart'>
					                <div class='card-header card-header-info'>
					                  	<h4 class='card-title'>Remove Admin</h4>
                  						<p class='card-category'>Click to see user details.</p>";
                  						if($adusersCount->aduserCount <= 1){
                  							$return .= "<small style='text-align:right;'>$adusersCount->aduserCount User</small>";
                  						}else{
                  							$return .= "<small style='text-align:right;'>$adusersCount->aduserCount Users</small>";
                  						}
					    $return .= "</div>
					                <div class='card-body table-responsive'>
					                	<table class='table table-hover'>
					                    	<thead class='text-warning'>
					                    		<tr>
						                      		<th>ID</th>
						                      		<th>Username</th>
                                                      <th>Password</th>
                                                      <th>Remove</th>
					                      		</tr> 
					                    	</thead>
					                    	<tbody>";
					           	while($row = $allAdminUsers->fetchObject()){
					                $return .= "<tr>
							                        <td>$row->admin_id</td>
							                        <td class='tab-data'><a href='#'>$row->uname</a></td>
                                                    <td class='tab-data'><a href='#'>$row->passwd</a></td>
                                                    <td class='tab-data'>
                                                    	<form action='admin.php?ad_page=remove_adUser' method='post'> 
                                                    		<input type='hidden' name='id' value='$row->admin_id'>
                                                    		<button type='submit' class='btn btn-danger' name='access_point_restriction'>
                                                    			Delete
                                                    		</button>
                                                    	</form>
                                                    </td>
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