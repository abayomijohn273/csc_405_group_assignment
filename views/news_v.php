<?php
	$return = "	<div class='blog_wrapp'>
					<div class='blog_inner'>
						<center>
							<div class='blog_left blog_side'>";
								while($row = $entries->fetchObject()){
									$href = "index.php?page=news&amp;id=$row->id";
									$return .= "<div class='blog_card_main element-animate'>
													<div class='blog_card_img'>
														<a class='all_blog' href='".$href."'>
													    	<img class='img_size' src='$row->blog_pic' alt='blog_img'>
													    </a>
													</div>
													<div class='blog_card_body'>
													 	<h3> $row->blog_title </h3>
													    <h5> $row->author </h5>";
													    if(empty($row->category)){
														    $return .= "<small>No Category</small>";
														}else{
													    	$return .= "<small> $row->category</small>";
													    }
											$return .= "<small class='text-muted'><p>Created:$row->date_created</p></small>
														<a href='".$href."' style='text-decoration:none; text-align:left;' class='btn btn-success'>
															<div name='read_more' class='contact_input form-button' >Read more</div>
														</a>
													</div>
												</div> ";
								}
					$return .= "<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
									<nav class='pagination_nav' aria-label='Page navigation example'>
								  		<ul class='pagination justify-content-center'>";
										if($page_no <= 1){
											$return .= "<li class='page-item disabled'>
															<a class='page-link '>
																&lsaquo;&lsaquo; First Page
															</a>
														</li>";
										}else{
											$return .= "<li class='page-item'>
															<a class='page-link' href='index.php?page=news&amp;page_no=1'>
																&lsaquo;&lsaquo; First Page
															</a>
														</li>";
										}
										if($page_no <= 1){
											$return .= "<li class='page-item disabled'>
												      		<a class='page-link'>
												      			&lsaquo; Previous
												      		</a>
												    	</li>";
										}else{
											$return .= "<li class='page-item'>
															<a class='page-link' href='index.php?page=news&amp;page_no=$previous_page'>
																&lsaquo; Previous 
															</a>
														</li>";
										}

										$return .= "<li class='page-item disabled'>
														<strong class='page-link'>Page $page_no of $total_no_of_pages</strong>
													</li>";

										if($page_no >= $total_no_of_pages){
											$return .= "<li class='page-item disabled'>
												      		<a class='page-link'>
												      			Next &rsaquo;
												      		</a>
												    	</li>";
										}else{
											$return .= "<li class='page-item'>
															<a class='page-link' href='index.php?page=news&amp;page_no=$next_page'>
																Next &rsaquo;
															</a>
														</li>";
										}
										if($page_no >= $total_no_of_pages){
											$return .= "<li class='page-item disabled'>
															<a class='page-link'>
																Last Page &rsaquo;&rsaquo;
															</a>
														</li>";
										}else{
											$return .= "<li class='page-item'>
															<a class='page-link' href='index.php?page=news&amp;page_no=$total_no_of_pages'>
																Last Page &rsaquo;&rsaquo;
															</a>
														</li>";
										}
							$return .= "</ul>
									</nav>
								</div>
							</div>";
				$return .= "<div class='blog_right blog_side'>
								<h3>Recent News</h3>";
								while($rows = $entriesR->fetchObject()){
									$href2 = "index.php?page=news&amp;id=$rows->id";
									$return .= "<a href='".$href2."'>
													<div class='side_blog_card element-animate'>
														<div class='side_blog_card_img side_blog_list'>
														    <img class='side_img_size' src='$rows->blog_pic' alt='blog_img' style='width:50%; height:10%; border-radius:5px;'>
														</div>
														<div class='side_blog_card_body side_blog_list'>
															<h6><small> $rows->name...</small></h6>";
												$return .= "<small class='text-muted'><p> $rows->date_created</p></small>
														</div>
													</div> 
												</a>";
									}
				$return .=	"</div>
						</center>
					</div>
				</div>";
	return $return;
?>