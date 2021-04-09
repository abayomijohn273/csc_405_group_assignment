<?php
	$entriesFound = isset( $allEntries );
	if($entriesFound === false){
		trigger_error('view/blog_post_list_view.php needs $allEntries');
	}
	$return =  "<div class='content Table_one'>
		          	<div class='container-fluid'>
		          		<div class='row'>
		            		<div class='col-xl-12 col-lg-12'>
		            			<div class='card card-chart'>
					                <div class='card-header card-header-success'>
					                  	<h4 class='card-title'>Blog Entries</h4>
                  						<p class='card-category'>Click on blog entry to edit.</p>
					                </div>
					                <div class='card-body table-responsive'>
					                  	<table class='table table-hover'>
					                    	<thead class='text-warning'>
					                    		<tr>
						                      		<th>ID</th>
						                      		<th>Blog Image</th>
						                      		<th>Category</th>
						                      		<th>Author</th>
						                      		<th>Blog title</th>
						                      		<th>Blog Entry</th>
						                      		<th>Date Posted</th>
					                      		</tr> 
					                    	</thead>
					                    	<tbody>";
					           	while($row = $allEntries->fetchObject()){
					           		$href = "admin.php?ad_page=blog_editor_ctrl&amp;id=$row->id";
					                $return .= "<tr>
							                        <td>$row->id</td>
							                        <td class='tab-data'><a href='$href'><img src='$row->blog_pic' alt='blog_pic' style='height:50px; width:75px; border-radius:0;'></a></td>
							                        <td class='tab-data'><a href='$href'>$row->category</a></td>
							                        <td class='tab-data'><a href='$href'>$row->author</a></td>
							                        <td class='tab-data'><a href='$href'>$row->title_intro</a></td>
							                        <td class='tab-data'><a href='$href'>$row->post_intro</a></td>
							                        <td class='tab-data'><a href='$href'>$row->date_created</a></td>
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
	$return .= "<div class='content Table_two'>
		          	<div class='container-fluid'>
		          		<div class='row'>
		            		<div class='col-xl-12 col-lg-12'>
		            			<div class='card card-chart'>
					                <div class='card-header card-header-success'>
					                  	<h4 class='card-title'>Blog Editor</h4>
                  						<p class='card-category'>Create new blog entries.</p>
					                </div>	           
					                <div class='card-body table-responsive'>
					                  	<table class='table table-hover'>
					                    	<tbody>";
					           	while($row1 = $allEntries2->fetchObject()){
					           		$href2 = "admin.php?ad_page=blog_editor_ctrl&amp;id=$row1->id";
					                $return .= "<tr>
					                				<th>ID</th>
							                        <td>$row1->id</td>
							                    </tr>
							                    <tr>
					                				<th>Blog Image</th>
							                        <td class='tab-data'><a href='$href2'><img src='$row1->blog_pic' alt='blog_pic' style='height:50px; width:75px; border-radius:0;'></a></td>
							                    </tr>
							                    <tr>
					                				<th>Category</th>
							                        <td class='tab-data'><a href='$href2'>$row1->category</a></td>
							                    </tr>
							                    <tr>
					                				<th>Author</th>
							                        <td class='tab-data'><a href='$href2'>$row1->author</a></td>
							                    </tr>
							                    <tr>
					                				<th>Blog title</th>
							                        <td class='tab-data'><a href='$href2'>$row1->title_intro</a></td>
							                    </tr>
							                    <tr>
					                				<th>Blog Entry</th>
							                        <td class='tab-data'><a href='$href2'>$row1->post_intro</a></td>
							                    </tr>
							                    <tr>
					                				<th>Date Posted</th>
							                        <td class='tab-data'><a href='$href2'>$row1->date_created</a></td>
							                    </tr>
							                    <tr>
							                    	<th><br/></th>
							                        <td class='tab-data'><br/></td>
							                    </tr>";
					           	}

					            $return .= "</tbody>
					                  	</table>
					                </div>
					                <div class='card-footer'>
					                	kjxoichvvj
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
				</div>";
	return $return; 
?>