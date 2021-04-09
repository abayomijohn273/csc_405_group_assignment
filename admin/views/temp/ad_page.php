<?php
	$return =  "<!DOCTYPE html5>
				<html>
					<head>
						<title>$page_var->title</title>
						<meta charset='utf-8'>
						<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
						<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
						$page_var->css
						$page_var->embeddedStyle
					</head>
					<body class='dark-edition'>";
					if(($pageToLoad == 'login') or ($pageToLoad == 'signup')){
			$return .= "<div class='wrapper'>
							$page_var->content
						</div>";
					}else{
			$return .= "<div class='wrapper'>
							<div class='sidebar' data-color='purple' data-background-color='black' data-image='admin/assets/img/sidebar-2.jpg'>
								$page_var->sidebar
							</div>
							<div class='main-panel'>
								$page_var->nav
								<div class='content'>
									$page_var->content
								</div>
								$page_var->footer
							</div>
						</div>";
					}
			$return .= "$page_var->js
					</body>
				<html>
				$page_var->loader";
		return $return;
?>