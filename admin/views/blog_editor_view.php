<?php
	$entryDataFound = isset( $entryData );
	if( $entryDataFound === false ){
	 	$entryData = new StdClass();
	 	$entryData->id = 0;
	 	$entryData->blog_pic = "";
	 	$entryData->author = "";
	 	$entryData->category = "";
	 	$entryData->blog_title = "";
	 	$entryData->blog_entry = "";
	}
	if( isset($editorErrMssg)  === false ) {
        $editorErrMssg  = "";
    }
	$return =  "<div class='content'>
		          	<div class='container-fluid'>
		          		<div class='row'>
		            		<div class='col-xl-12 col-lg-12'>
		            			<div class='card card-chart'>
					                <div class='card-header card-header-primary'>
					                  	<h4 class='card-title'>Blog Editor</h4>
                  						<p class='card-category'>Create new blog entries.</p>
					                </div>
					                <div class='card-body'>";
				if($editorErrMssg ){
					$return .= "<div class='alert alert-warning'>
	                                <div class='container'>
	                                    <div class='alert-icon'>
	                                        <i class='material-icons'>warning</i>
	                                    </div>
	                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	                                        <span aria-hidden='true'><i class='material-icons'>clear</i></span>
	                                    </button>
	                                    <b>warning:</b> $editorErrMssg 
	                                </div>
	                            </div>";
				}else{
					$return .= "";
				}
					        $return .= "<form method='post' action='admin.php?ad_page=blog_editor_ctrl' enctype='multipart/form-data' class='blog_editor_form'>
					                  		<div class='form-group'>
									            <input type='hidden' name='id' value='$entryData->id'/>
									        </div>";
										    if($entryData->id > 0){
										    	$return .= "<div class='form-group'>
													           	<img src='$entryData->blog_pic' alt='blog_pic' class='blog_editor_pic'>
													        </div>";
										    }else{
										    	$return .= "";
										    }
								$return .= "<div>
									        	<label>File Input</label><br/>
									        	<input type='file' name='blog_pic' class='form-control p-input' value='$entryData->blog_pic'>
									        	<small class='form-text text-muted'>Select a picture to serve as your blog post cover picture.</small>
									        </div>
									        <br/><br/>
									       	<div class='form-check'>
									       		<h4 class='card-title'>Category</h4>";
							               	if($entryData->id > 0){
							               		$return .= "<div class='rad sty1'>
												                <label class='form-check-label'>
												                  	<input class='form-check-input' type='radio' name='category' id='exampleRadios1' value='$entryData->category' checked>
												                  	$entryData->category
												                  	<span class='circle'>
												                    	<span class='check' ></span>
												                  	</span>
												                </label>
												            </div>";
							               	}else{
										       	$return .= "<div class='rad sty1'>
												                <label class='form-check-label'>
												                  	<input class='form-check-input' type='radio' name='category' id='exampleRadios1' value='Current News'>
												                  	Current News
												                  	<span class='circle'>
												                    	<span class='check'></span>
												                  	</span>
												                </label>
												            </div>
												            <div class='rad sty2'>
												                <label class='form-check-label'>
												                  	<input class='form-check-input' type='radio' name='category' id='exampleRadios1' value='Travel'>
												                  	Travel
												                  	<span class='circle'>
												                    	<span class='check'></span>
												                  	</span>
												                </label>
												            </div>
												            <div class='rad sty3'>
												                <label class='form-check-label'>
												                  	<input class='form-check-input' type='radio' name='category' id='exampleRadios1' value='Parenting'>
												                  	Parenting
												                  	<span class='circle'>
												                    	<span class='check'></span>
												                  	</span>
												                </label>
												            </div>
												            <div class='rad sty4'>
												                <label class='form-check-label'>
												                  	<input class='form-check-input' type='radio' name='category' id='exampleRadios1' value='Lifestyle'>
												                  	Lifestyle
												                  	<span class='circle'>
												                    	<span class='check'></span>
												                  	</span>
												                </label>
												            </div>
												            <small class='form-text text-muted'>Select a Category for this blog post.</small>
											            </div>";
											}
								$return .= "<br/><br/>
									        <div>
									        	<label>Author</label><br/>
									        	<input type='text' name='author' placeholder='Enter name of author' class='form-control p-input' value='$entryData->author'>
									        </div>
									        <br/><br/>
									        <div>
									        	<label>Blog Title</label><br/>
									        	<input type='text' name='blog_title' placeholder='Enter blog title' class='form-control p-input' value='$entryData->blog_title'>
									        </div>
									        <br/><br/>
									        <div>
									        	<label>Blog Entry</label><br/>
									        	<textarea name='blog_entry' placeholder='Write your blog post here' class='form-control' rows='10'>$entryData->blog_entry</textarea>
									        </div>
									        <br/>
									     	<center>
										     	<div class='crd_foot_inner submit_user'>";
								    if($entryData->id > 0){
								 		$return .= "<button type='submit' class='btn btn-primary  user_btn' name='action_update'>
										            	Update
										            </button>
										          	<button  type='reset' class='btn btn-secondary user_btn' name='action' value='refresh'>
										            	Refresh
										            </button>
										            <button  type='submit' class='btn btn-danger user_btn' name='action_delete'>
										            	Delete
										            </button>";	
							     	}else{
							     		$return .= "<button  type='submit' class='btn btn-primary user_btn' name='action_save'>
										            	Save
										            </button>
										            <button  type='reset' class='btn btn-secondary user_btn' name='action' value='refresh'>
										            	Refresh
										            </button>";
									}
									$return .= "</div>
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