<?php
	$return =  "<div class='blog_wrapp'>
                    <div class='blog_inner' style='padding:5%; margin:0.5% auto;'>
                    	<div class='user_contain'>
	                    	<div class='user_page user_img'>
	                    		<img src='$userData->user_img' alt='user_image' style='width:350px; height:350px; border-radius:20px;'>
	                    	</div>
	                    	<div class='user_page user_data'>
	                    		<table class='table table-striped' style='margin:2% auto;'>
		                    		<tbody>
		                    			<tr>
			                				<th>Name</th>
											<td class='tab-data'>$userData->fname $userData->lname</td>
					                    </tr>
					                    <tr>
					                    	<th>Username</th>
											<td class='tab-data'>$userData->uname</td>
										</tr>
										<tr>
					                    	<th>Status</th>";
					                    	if($userData->exco > 0){
					                    		$return .= "<td class='tab-data'><button class='btn btn-success disabled' style='color:#ccc;'>Executive</a></td>";
					                    	}else{
					                    		$return .= "<td class='tab-data'><button class='btn btn-danger disabled' style='color:#ccc;'>Member</a></td>";
					                    	}
							$return .= "</tr>
										<tr>
					                    	<th>Executive Office</th>
											<td class='tab-data'>";
			                                    if(!empty($row->office)){
			                                        $return .= "$row->office";
			                                    }else{
			                                        $return .= "<i>None</i>";
			                                    }
                        		$return .= "</td>
										</tr>
										<tr>
					                    	<th>Email</th>
											<td class='tab-data'>$userData->email</td>
										</tr>
										<tr>
					                    	<th>Registeration Date</th>
											<td class='tab-data'>$userData->reg_date</td>
										</tr>
		                    		</tbody>
		                    	</table>
		                    </div>
		                </div>
                    </div>
                </div>";
	return $return;
?>