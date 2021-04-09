<?php
	$newFileToLoad_1 = ucfirst($fileToLoad);
    $newFileToLoad = str_replace('_', ' ', $newFileToLoad_1);
	$return = "
	<!DOCTYPE html5>
	<html>
		<head>
			<title>$Page_Data->title</title>
            <meta charset='utf-8' />
			<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
			<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
            $Page_Data->css
            $Page_Data->embeddedStyle
		</head>
		<body>
			<div class='wrapp'>
				$Page_Data->nav";
			if($fileToLoad == 'home'){
                $return .= "";
            }else{
                $return .= "<div class='page_dscrpt'>
                				<!--<a href='index.php?page=home' class='top_page_descpt'><span class='material-icons'>home</span></a>-->
                                <a href='index.php?page=$fileToLoad' element-animate style='text-decoration:none;' class='top_page_descpt pg_top_link'>
                                    <h2>$newFileToLoad</h2>
                                </a>
                                <form method='post' action='index.php?page=search' class='form-inline top_page_descpt pg_top_form'>
                                    <div class='form-group mb-2 search_div search_div_input'>
                                        <input class='search_input inputs' type='search' name='searchTerm' placeholder='Search...' autocomplete='on'/>
                                    </div>
                                    <div class='form-group mb-2 search_div search_div_button'>
                                        <input class='btn search_button inputs' type='submit' name='search_term' value='Search'>
                                    </div>
                                </form>
                            </div>";
            }
	$return .= "<div class='container'>
					$Page_Data->content
				</div>
			$Page_Data->footer
			$Page_Data->js
		</body>
	<html>
	<!--$Page_Data->loader-->";
	return $return;
?>