<?php
	$output = '<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
		        <div class="container-fluid">
		          <div class="navbar-wrapper">
		            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
		          </div>
		          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="navbar-toggler-icon icon-bar"></span>
		            <span class="navbar-toggler-icon icon-bar"></span>
		            <span class="navbar-toggler-icon icon-bar"></span>
		          </button>
		          <div class="collapse navbar-collapse justify-content-end">
		            <form class="navbar-form" method="post" action="admin.php?ad_page=search_ad_ctrl">
		              <div class="input-group no-border">
		              	<input type="search" name="searchTerm" class="form-control" placeholder="Search...">
			            <button type="submit" name="search-item" class="btn btn-primary btn-round btn-just-icon">
		                  <i class="material-icons">search</i>
		                  <div class="ripple-container"></div>
		                </button>
		              </div>
		            </form>
		            <ul class="navbar-nav">
		              <li class="nav-item">
		                <a class="nav-link" href="javascript:void(0)">
		                  <i class="material-icons">dashboard</i>
		                  <p class="d-lg-none d-md-block">
		                    Stats
		                  </p>
		                </a>
		              </li>
		              <li class="nav-item dropdown">
		                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <i class="material-icons">notifications</i>
		                  <span class="notification">5</span>
		                  <p class="d-lg-none d-md-block">
		                    Some Actions
		                  </p>
		                </a>
		                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
		                  <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
		                  <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
		                  <a class="dropdown-item" href="javascript:void(0)">You\'re now friend with Andrew</a>
		                  <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
		                  <a class="dropdown-item" href="javascript:void(0)">Another One</a>
		                </div>
		              </li>
		              <li class="nav-item">
		                <a class="nav-link" href="admin.php?ad_page=admin_profile_ctrl">
		                  <i class="material-icons">person</i>
		                  <p class="d-lg-none d-md-block">
		                    Account
		                  </p>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a class="nav-link" id="user_logout" href="admin.php?ad_page=logout_admin">
		                  <i class="fa fa-sign-out my_icon" aria-hidden="true"></i>
		                  <p class="d-lg-none d-md-block">
		                   	Logout
		                  </p>
		                </a>
		              </li>
		            </ul>
		          </div>
		        </div>
		      </nav>';
	return $output;
?>