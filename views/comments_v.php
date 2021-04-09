<?php
    $idIsFound = isset($blog_id);
    if($idIsFound === false){
        trigger_error('view/comment-form.php needs an $blog_id');
    }

    $commentsFound = isset( $Comments );
    if($commentsFound === false){
        trigger_error('view/comment-view.php needs $allComments' );
    }
     
    if(isset( $allComments ) === false){
        trigger_error('view/comment-view.php needs $allComments' );
    }
    if( isset($commentFormMessage) === false ) {
        $commentFormMessage = "";
    }

	$return = "<div class='blog_wrapp'>
                    <div class='blog_inner' style='margin-top:2%; padding:3%;'>
                        <div class='title'>
                            <h2>Comments</h2>
                            <h6><small>Post your comments here.</small></h6>
                            <hr/>
                        </div>";
                    if($commentFormMessage){
                        $return .= "<div id='err_block' class='alert alert-warning alert-dismissible fade show' role='alert'>
                                <i class='material-icons'>warning</i>
                                <b>Warning:</b> $commentFormMessage
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true' class='close'>
                                        <i class='material-icons'>clear</i>
                                    </span>
                                </button>
                            </div>";
                    }
                    else{
                        $return .= "";            
                    }
            $return .= "<div class='comment-container'>
                            <div class='comment-form'>
                                <!--<div class='title'>
                                    <h4>Post your comments here.</h4>
                                </div>-->
                                <form class='row comment-sect' action='index.php?page=news&amp;id=$blog_id' method='post' id='comment-form'>
                                    <input type='hidden' name='entry-id' value='$blog_id' class='form-control p-input comment_input'/>
                                    <div class='form-group comment_div'>
                                        <i class='material-icons'>person</i><b style='color:#000;'>Name</b>
                                        <input type='text' name='user-name' placeholder='Your name' class='form-control p-input comment_input'/>
                                    </div>
                                    <div class='form-group comment_div'>
                                        <i class='material-icons'>bubble_chart</i><b style='color:#000;'>Comment</b>
                                        <textarea name='new-comment' placeholder='Your comment.' class='form-control p-input comment_input' rows='5'></textarea>
                                    </div>
                                    <center>
                                        <div class='form-group comment_button_div' style='margin:1% auto;'>
                                            <input type='submit' name='newComment' value='Post Comment' class='btn btn-success comment_button'/>
                                        </div>
                                    </center>
                                </form>
                            </div>
                            <div class='Comments-display'>";
                            if($totalComments->commentCount > 0){
                                while ($commentData = $Comments->fetchObject()) {
                                    $return .="<div style='border-bottom:1px solid #ccc; margin-bottom:3%;'>
                                                    <p style='color:#ccc; font-size:20px; font-weight:100;'><i class='material-icons'>person</i> $commentData->author</p>
                                                    <p style='color:#ccc; font-weigth:200;'>$commentData->txt</p>
                                                    <small style='color:#ccc; font-weigth:100;'>$commentData->date</small>
                                                </div>";
                                }
                                $return .= "<button type='button' class='btn btn-success more_comment' id='myBtn_1' data-target='#myModal_1'>
                                                Show more comments-&rsaquo;&rsaquo;
                                            </button>";
                            }else{
                                $return .="<div>
                                            <i class='material-icons'>face</i><b style='color:#000;'>No Comments yet, be the first to comment on this post.</b>
                                        </div>
                                        <hr/>";
                            }
                $return .= "</div>
                        </div>
                    </div>

                    <div id='myModal_1' class='modal bd-example-modal-lg' tabindex='-1' role='dialog' aria-labelledby='exampleModalScrollableTitle' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-scrollable modal-lg' role='document'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title'>Comments</h5>";
                                    if($totalComments->commentCount > 1){
                                        $return .= "<small>$totalComments->commentCount Comments</small>";
                                    }else{
                                        $return .= "<small>$totalComments->commentCount Comment</small>";
                                    }
                    $return .= "</div>
                                <hr/>
                                <div class='modal-body'>
                                    <div class='comment-sect' id='comments-display-2'>";
                                    while ($commentData_2 = $allComments->fetchObject()) {
                            $return .= "<p style='color:#575757; font-size:20px; font-weight:100;'><i class='material-icons'>person</i> $commentData_2->author</p>
                                        <p style='color:#666; font-weigth:100;'>$commentData_2->txt</p>
                                        <small style='color:#ccc; font-weigth:100;'>$commentData_2->date</small>
                                        <hr/>";
                                    }
                        $return .= "</div>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-danger' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true' class='close1'>
                                            <i class='material-icons'>clear</i> Close
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='container post-two'>
                        <div class='title'>
                            <h2>Comments</h2>
                            <h4>Post your comments here.</h4>
                            <hr/>
                        </div>";
                        if($commentFormMessage){
                        $return .= "<div class='alert alert-warning'>
                                        <div class='container'>
                                          <div class='alert-icon'>
                                            <i class='material-icons'>warning</i>
                                          </div>
                                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'><i class='material-icons'>clear</i></span>
                                          </button>
                                          <b>Warning:</b> $commentFormMessage
                                        </div>
                                    </div>";
                    }
                    else{
                        $return .= "";            
                    }
            $return .= "<div class='comment-container'>
                            <div class='comment-form'>
                                <center>
                                    <form class='row comment-sect' action='index.php?page=blog&amp;id=$blog_id' method='post' id='comment-form'>
                                        <input type='hidden' name='entry-id' value='$blog_id' class='form-control p-input comment_input'/>
                                        <div class='form-group comment_div'>
                                            <i class='material-icons'>person</i><b style='color:#000;'>Name</b>
                                            <input type='text' name='user-name' placeholder='Your name' class='form-control p-input comment_input'/>
                                        </div>
                                        <div class='form-group comment_div'>
                                            <i class='material-icons'>bubble_chart</i><b style='color:#000;'>Comment</b>
                                            <textarea name='new-comment' placeholder='Your comment.' class='form-control p-input comment_input' rows='10'></textarea>
                                        </div>
                                        <div class='form-group comment_button_div' >
                                            <input type='submit' name='newComment' value='Post Comment' class='btn btn-primary comment_button'/>
                                        </div>
                                    </form>
                                </center>
                            </div>
                            <div class='Comments-display'>";
                            if($totalComments->commentCount > 0){
                                while ($commentData_3 = $Comments_M->fetchObject()) {
                                    $return .="<div style='border-bottom:1px solid #ccc; margin-bottom:20%;'>
                                                    <p style='color:#ccc; font-size:20px; font-weight:100;'><i class='material-icons'>person</i> $commentData_3->author</p>
                                                    <p style='color:#ccc; font-weigth:200;'>$commentData_3->txt</p>
                                                    <small style='color:#ccc; font-weigth:100;'>$commentData_3->date</small>
                                                </div>";
                                }
                                $return .= "<button type='button' class='btn btn-primary more_comment' id='myBtn_2' data-target='#myModal_2'>
                                                Show more comments-&rsaquo;&rsaquo;
                                            </button>";
                            }else{
                                $return .="<div>
                                            <i class='material-icons'>face</i><b style='color:#fff;'>No Comments yet, be the first to comment on this post.</b>
                                        </div>
                                        <hr/>";
                            }
                $return .= "</div>
                        </div>
                    </div>
                    <div id='myModal_2' class='modal bd-example-modal-lg' tabindex='-1' role='dialog' aria-labelledby='exampleModalScrollableTitle' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-scrollable modal-lg' role='document'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title'>Comments</h5>";
                                    if($totalComments_M->commentCount > 1){
                                        $return .= "<small>$totalComments->commentCount Comments</small>";
                                    }else{
                                        $return .= "<small>$totalComments->commentCount Comment</small>";
                                    }
                    $return .= "</div>
                                <hr/>
                                <div class='modal-body'>
                                    <div class='comment-sect' id='comments-display-2'>";
                                    while ($commentData_4 = $allComments_M->fetchObject()) {
                            $return .= "<p style='color:#575757; font-size:20px; font-weight:100;'><i class='material-icons'>person</i> $commentData_4->author</p>
                                        <p style='color:#ccc; font-weigth:100;'>$commentData_4->txt</p>
                                        <small style='color:#ccc; font-weigth:100;'>$commentData_4->date</small>
                                        <hr/>";
                                    }
                        $return .= "</div>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-primary' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true' class='close2'>
                                            <i class='material-icons'>clear</i> Close
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
return $return;
?>