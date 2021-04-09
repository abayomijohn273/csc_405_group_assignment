<?php
	$return = "	<div class='blog_wrapp'>
					<div class='blog_inner'>
						<center>
							<div class='blog_left blog_side'>";
					$return .= "<div class='blog_card_main element-animate'>
									<div class='blog_card_img'>
										<img class='img_size' src='$entryData->blog_pic' alt='blog_img'>
									</div>
									<div class='blog_card_body'>
										<h3> $entryData->blog_title </h3>
										<h5> $entryData->author </h5>";
										if(empty($entryData->category)){
											$return .= "<small>No Category</small>";
										}else{
											$return .= "<small> $entryData->category</small>";
										}
							$return .= "<small class='text-muted'><p>Created:$entryData->date_created</p></small>
										<p class='card-text'> $entryData->blog_entry </p>
									</div>
								</div>
								<div>
									<small class='mb-5'>Share</small><hr/>
									<ul class='list-unstyled footer-link d-flex footer-social'>
								        <li><a href='#' class='p-2'><span class='fab fa-twitter'></span></a></li>
						              	<li><a href='#' class='p-2'><span class='fab fa-facebook'></span></a></li>
						              	<li><a href='#' class='p-2'><span class='fab fa-linkedin'></span></a></li>
						              	<li><a href='#' class='p-2'><span class='fab fa-instagram'></span></a></li>
						              	<li><a href='#' class='p-2'><span class='fab fa-whatsapp'></span></a></li>
						              	<li><a href='#' class='p-2'><span class='fab fa-pinterest'></span></a></li>
								    </ul>
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
					</div>
				</div>";
	return $return;
?>