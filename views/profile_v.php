<?php
     if(isset($loggedErrMssg) === false ) {
		$loggedErrMssg = "";
    }
    if(isset($success) == false){
        $success = "";
    }
    $return =  "<div class='blog_wrapp'>
                    <div class='blog_inner' style='padding:5%; margin:0.5% auto;'>
                        <div class='profile'>";
            if($loggedErrMssg and ($loggedErrMssg == $_SESSION['message'])){
                    $return .= "<div id='err_block' class='alert alert-success alert-dismissible fade show' role='alert'>
                                <i class='material-icons'>check</i>
                                <b>Success:</b> $loggedErrMssg
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true' class='close'>
                                        <i class='material-icons'>clear</i>
                                    </span>
                                </button>
                            </div>";
                unset($_SESSION['message']);

                $return .= "<script>
                                setTimeout(function() {
                                    let alert = document.querySelector('.alert');
                                        alert.remove();
                                }, 3000);
                            </script>";
            }else{
                $return .= "";
            }
                $return .= "<div class='user_contain'>
                                <div class='user_page user_img'>
                                    <img src='$loggedUser->user_img' alt='user_image' style='width:350px; height:350px; border-radius:20px;'>
                                </div>
                                <div class='user_page user_data'>
                                    <table class='table table-striped' style='margin:2% auto;'>
                                        <tbody>
                                            <tr>
                                                <th>Name</th>
                                                <td class='tab-data'>$loggedUser->fname $loggedUser->lname</td>
                                            </tr>
                                            <tr>
                                                <th>Username</th>
                                                <td class='tab-data'>$loggedUser->uname</td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>";
                                                if($loggedUser->exco > 0){
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
                                                <td class='tab-data'>$loggedUser->email</td>
                                            </tr>
                                            <tr>
                                                <th>Registeration Date</th>
                                                <td class='tab-data'>$loggedUser->reg_date</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href='index.php?page=dues'>
                                        <div class='dues'>
                                            <p>Click here to view your dues.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
    return $return;
?>