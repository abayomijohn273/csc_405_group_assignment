<?php
    error_reporting(E_ALL);
    ini_set("display_error", 1);

    $dbInfo = "mysql:host=localhost; dbname=csc_405_db";
    $dbUser = "root";
    $dbPass = "";
    $db = new PDO($dbInfo, $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    include_once "admin/models/Admin_Page_Data.class.php";
    $page_var = new Admin_Page_Data();

    include_once "admin/models/Admin_Session_Log.class.php";
    $ad_userLog = new Admin_Session_Log();
    
    if($ad_userLog->is_LoggedIn()){
        $page_var->title = "admin_module";
        $page_var->nav = include_once "admin/views/common/nav.php";
        $page_var->sidebar = include_once "admin/views/common/sidebar.php";

        $navClicked = isset($_GET['ad_page']);
        if($navClicked){
            $pageToLoad = $_GET['ad_page'];
        }else{
            $pageToLoad = "dashboard";
        }
        $page_var->content = include_once "admin/controllers/$pageToLoad.php";
        $page_var->footer = include_once "admin/views/common/footer.php";
    }else{
        $page_var->title = "admin_authentication";
        $buttonIsClicked = isset($_GET['ad_page']);
        if($buttonIsClicked){
            $pageToLoad = $_GET['ad_page'];
        }else{
            $pageToLoad = "login";
        }
        $page_var->content = include_once "admin/controllers/$pageToLoad.php";
    }
    $page_var->loader = include_once "admin/views/common/loader.php";

    $page_var->addCSS("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons");
    //$page_var->addCSS("admin/bootstrap-5.0.0-beta2-dist/css/bootstrap.css");
    $page_var->addCSS("https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css");
    $page_var->addCSS("admin/assets/css/material-dashboard.css?v=2.1.0");
    $page_var->addCSS("admin/css/ad_layout.css");
    $page_var->addCSS("admin/css/modal.css");
    $page_var->addCSS("css/loader.css");

    $page_var->addJS("admin/assets/js/core/jquery.min.js");
    $page_var->addJS("admin/assets/js/core/popper.min.js");
    $page_var->addJS("admin/assets/js/core/bootstrap-material-design.min.js");
    $page_var->addJS("https://unpkg.com/default-passive-events");
    $page_var->addJS("admin/assets/js/plugins/perfect-scrollbar.jquery.min.js");
    $page_var->addJS("https://buttons.github.io/buttons.js");
    $page_var->addJS("https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE");
    $page_var->addJS("admin/assets/js/plugins/chartist.min.js");
    $page_var->addJS("admin/assets/js/plugins/bootstrap-notify.js");
    $page_var->addJS("admin/assets/js/material-dashboard.js?v=2.1.0");

    $page_var->addJS("admin/assets/demo/demo.js");
    $page_var->addJS("admin/js/admin_ctrl.js");
    $page_var->addJS("js/main.js");

    $page_var->embeddedStyle ="<style>
                                    .dark-edition .wrapper .sidebar .sidebar-wrapper .nav .nav-item a[href *= '?ad_page=$pageToLoad']{
                                        background-color:rgb(0, 128, 0);
                                        color:#fff;
                                    }
                                    .dark-edition .wrapper .sidebar .sidebar-wrapper .nav .nav-item a[href *= '?ad_page=$pageToLoad']:hover{
                                        background-color:rgba(0, 128, 0, 0.5);
                                        color:#fff;
                                    }
                                </style>";
    $ad_page = include_once "admin/views/temp/ad_page.php";
    echo $ad_page;
?>