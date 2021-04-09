<?php
	$return =  "<div class='logo'>
					<a href='admin.php?ad_page=dashboard' class='simple-text logo-normal'>
			          	Club Membership System
			        </a>
			    </div>
			    <div class='sidebar-wrapper'>
			        <ul class='nav'>
				        <li class='nav-item'>
				            <a class='nav-link' href='admin.php?ad_page=dashboard'>
				              	<i class='material-icons'>dashboard</i>
				              	<p>Dashboard</p>
				            </a>
						</li>
						<li class='nav-item'>
						<a class='nav-link' href='admin.php?ad_page=blog_post_ctrl'>
							<i class='material-icons'>content_paste</i>
							<p>Blog Post</p>
						</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link' href='admin.php?ad_page=blog_editor_ctrl'>
							  <i class='material-icons'>library_books</i>
							  <p>Blog Editor</p>
						</a>
					</li>
						<li class='nav-item'>
							<a class='nav-link' href='admin.php?ad_page=users'>
								<i class='material-icons'>person_</i>
								<p>Members</p>
							</a>
						</li>
				        <li class='nav-item'>
				            <a class='nav-link' href='admin.php?ad_page=exco'>
				              	<i class='material-icons'>supervisor_account</i>
				              	<p>Executives</p>
				            </a>
						</li>
						<li class='nav-item'>
							<a class='nav-link' href='admin.php?ad_page=ad_users'>
								<i class='material-icons'>perm_identity</i>
								<p>Admin Users</p>
							</a>
						</li>
				        <li class='nav-item'>
				            <a class='nav-link' href='admin.php?ad_page=dues'>
				              	<i class='material-icons'>person_add_alt_1</i>
				              	<p>Dues</p>
				            </a>
				        </li>
				        <!--<li class='nav-item'>
				            <a class='nav-link' href='admin.php?ad_page=settings_ctrl'>
				              	<i class='material-icons'>settings</i>
				              	<p>Settings</p>
				            </a>
				        </li>-->
			        </ul>
			    </div>";
	return $return;
?>