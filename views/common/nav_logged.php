<?php
    $return =  "<nav>
                    <div class='nav_class logo'>
                        <h3 style='color:#176317e6;'>CFCN</h3>
                    </div>
                    <div class='nav_class main_nav'>
                        <center>
                            <a href='index.php?page=home'>Home</a>
                            <a href='index.php?page=news'>News</a>
                            <a href='index.php?page=history'>History</a>
                            <a href='index.php?page=dues'>Dues</a>
                            <a href='index.php?page=members'>Members</a>
                            <a class='exco_link' href='index.php?page=exco'>Excos</a>";
                        /*if($userTable->exco == 1){
                $return .= "<a>Add news</a>";
                        }else{
                $return .= "";             
                        }*/
            $return .= "</center>
                    </div>
                    <div class='nav_class log_nav'>
                        <a href='index.php?page=profile'>Profile</a>
                        Or
                        <a href='index.php?page=logout'>Logout</a>
                    </div>
                </nav>";
    return $return;
?>