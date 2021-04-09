<?php
	$entryDataFound = isset( $entryData );
	if( $entryDataFound === false ){
	 	$entryData = new StdClass();
	 	$entryData->id = 0;
	 	$entryData->due_title = "";
	 	$entryData->amount = "";
	}
	//if( isset($editorErrMssg)  === false ) {
        //$editorErrMssg  = "";
    //}
	$return =  "<div class='content Table_one'>
		          	<div class='container-fluid'>
		          		<div class='row'>
		            		<div class='col-xl-12 col-lg-12'>
		            			<div class='card card-chart'>
					                <div class='card-header card-header-info'>
					                  	<h4 class='card-title'>Add new fees</h4>
                  						<p class='card-category'>Click to see user details.</p>
                  					</div>
					                <div class='card-body table-responsive'>
							            <form method='post' action='admin.php?ad_page=add_dues'>";
							            if($entryData->id > 0){
							            	$return .= "<input type='hidden' name='id' value='$entryData->id'>";
							            }else{
							            	$return .= "";
							            }
							    $return .= "<div class='row'>
					                    		<div class='col-md-6'>
					                        		<div class='form-group'>
					                          			<label class='bmd-label-floating'>Due title</label>
					                          			<input type='text' name='due_title' class='form-control p-input' value='$entryData->due_title'>
					                        		</div>
					                      		</div>
					                      		<div class='col-md-6'>
					                        		<div class='form-group'>
					                          			<label class='bmd-label-floating'>Amount</label>
					                          			<input type='number' name='amount' class='form-control p-input' value='$entryData->amount'>
					                        		</div>
					                      		</div>
					                    	</div>
					                    	<center>";
								            if($entryData->id > 0){
								            	$return .= "<button type='submit' class='btn btn-warning' name='update'>
											                	Update
											                </button>";
								            }else{
								            	$return .= "<button type='submit' class='btn btn-info' name='save'>
									                    		Save
									                    	</button>";
								            }
					            $return .= "</center>
					                    	<div class='clearfix'></div>
					                	</form>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
				</div>";
	return $return;
?>