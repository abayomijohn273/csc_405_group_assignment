<?php
    $return =  "<div class='blog_wrapp'>
                    <div class='blog_inner'>
                        <div>";
                        if($userCount->userCount <= 1){
                            $return .= "<small style='text-align:right;'>$userCount->userCount User</small>";
                        }else{
                            $return .= "<small style='text-align:right;'>$userCount->userCount Users</small>";
                        }
            $return .= "</div>
                        <table class='table table-striped'>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Office</th>
                                    <th>Date</th>
                                </tr> 
                            </thead>
                            <tbody>";
                    while($row = $allUsers->fetchObject()){
                        $href = "admin.php?ad_page=users&amp;id=$row->user_id";
                    $return .= "<tr>
                                    <td>$row->user_id</td>
                                    <td class='tab-data'><a href='$href'>$row->fname</a></td>
                                    <td class='tab-data'><a href='$href'>$row->lname</a></td>
                                    <td class='tab-data'><a href='$href'>$row->uname</a></td>
                                    <td class='tab-data'><a href='$href'>$row->email</a></td>
                                    <td class='tab-data'>";
                                    if($row->exco > 0){
                                        $return .= "<button class='btn btn-success disabled' style='color:#ccc;'>Executive</button>";
                                    }else{
                                        $return .= "<button class='btn btn-danger disabled' style='color:#ccc;'>Member</button>";
                                    }
                        $return .= "</td>
                                    <td class='tab-data'><a href='$href'>";
                                    if(!empty($row->office)){
                                        $return .= "$row->office";
                                    }else{
                                        $return .= "<i>None</i>";
                                    }
                        $return .= "</a></td>
                                    <td class='tab-data'><a href='$href'>$row->reg_date</a></td>
                                </tr>";
                    }
                $return .= "</tbody>
                        </table>
                    </div>
                </div>";
    return $return;
?>