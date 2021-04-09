<?php
	$return =  "<div class='content Table_one'>
		          	<div class='container-fluid'>
		          		<div class='row'>
		            		<div class='col-xl-12 col-lg-12'>
		            			<div class='card card-chart'>
					                <div class='card-header card-header-info'>
					                  	<h4 class='card-title'>Association Dues</h4>
                  						<p class='card-category'>Click to see user details.</p>
                  					</div>
					                <div class='card-body table-responsive'>
					                	<table class='table table-hover'>
					                    	<thead class='text-warning'>
					                    		<tr>
						                      		<th>S/N</th>
						                      	
						                      		<th>Due title</th>
						                      	
						                      		<th>Amount</th>

						                      		<th>Remove</th>
						                      	</tr>
						                    </thead>
						                    <tbody>";
						                   	while($row = $allDues->fetchObject()){
						                   		$href = "admin.php?ad_page=add_dues&amp;id=$row->id";
						                   		$return .= "<tr>
									                        	<td>$row->id</td>
									                        	<td class='tab-data'><a href='$href'>$row->due_title</a></td>
									                        	<td class='tab-data'><a href='$href'>$row->amount</a></td>
									                        	<td class='tab-data'><a href='#'>
									                        		<form action='admin.php?ad_page=add_dues' method='post'> 
			                                                    		<input type='hidden' name='id' value='$row->id'>
			                                                    		<button type='submit' class='btn btn-danger' name='remove_due'>
			                                                    			Delete
			                                                    		</button>
			                                                    	</form>
									                        	</td>
									                        </tr>";
						                   	}
					             $return .= "</tbody>
					                    </table>
					                    <div class='card-footer'>
					                    	<a class='btn btn-info' href='admin.php?ad_page=add_dues'>Add</a>
					                	</div>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
				</div>";
	return $return;
?>