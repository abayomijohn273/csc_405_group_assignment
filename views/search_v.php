<?php
    if( isset($searchTermErr) === false ) {
        $searchTermErr = "";
    }
	$return =  "<div class='blog_wrapp'>
                    <div class='blog_inner' style='padding:5%;'>
                        <h2 style='margin-left:10%;'>Here's all we have on: <em style='color:rgba(188, 41, 61, 0.7);'>$searchTerm</em></h2>";
            if($searchTermErr){
                $return .= "<div id='err_block' class='alert alert-warning alert-dismissible fade show' role='alert'>
                                <i class='material-icons'>warning</i>
                                <b>Warning:</b> $searchTermErr
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true' class='close'>
                                        <i class='material-icons'>clear</i>
                                    </span>
                                </button>
                            </div>";
            }else{
                while ($searchRow = $searchData->fetchObject()){
                    $href = "index.php?page=news&amp;id=$searchRow->id";
                    $return .= "<div class='each-search'>
                                    <a href='$href' style='color:#9c27b0;'>$searchRow->blog_title</a>
                                    <br/>
                                    <small>
                                    <p>$searchRow->searchIntro...<p>
                                    <p>$searchRow->author<p>
                                    $searchRow->category
                                    $searchRow->date_created
                                    </small>
                                    <hr/>
                                </div>";
                }
                while ($searchRow1 = $searchData1->fetchObject()){
                    $href = "index.php?page=members&amp;id=$searchRow1->user_id";
                    $return .= "<div class='each-search'>
                                    <a href='$href' style='color:#9c27b0;'>$searchRow1->fname $searchRow1->lname</a>
                                    <br/>
                                    <small>
                                    <p>$searchRow1->uname<br/>
                                    $searchRow1->email<p>";
                                    if($searchRow1->exco > 0){
                                        $return .= "<button class='btn btn-success'></button>";
                                    }else{
                                        $return .= "<button class='btn btn-danger'></button>";
                                    }
                        $return .= "</small>
                                    <hr/>
                                </div>";
                }
                while ($searchRow2 = $searchData2->fetchObject()){
                    $href = "#";
                    $return .= "<div class='each-search'>
                                    <a href='$href' style='color:#9c27b0;'>$searchRow2->due_title</a>
                                </div>";
                }
            }
            $return .= "</div>
                </div>";
	return $return;
?>