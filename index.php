<?php
    error_reporting(E_ALL);
    ini_set("display_error", 1);

    $dbInfo = "mysql:host=localhost; dbname=csc_405_db";
    $dbUser = "root";
    $dbPass = "";
    $db = new PDO($dbInfo, $dbUser, $dbPass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    include_once "models/Page_Data.class.php";
    $Page_Data = new Page_Data();

    include_once "admin/models/Session_Log.class.php";
    $userLog = new Session_Log();

    include_once "admin/models/User_Table.class.php";
    $userTable = new User_Table($db);

    if($userLog->isLoggedIn()){
        $Page_Data->title = "user_logged-in";
        $Page_Data->nav = include_once "views/common/nav_logged.php";
        if(isset($_GET['page'])){
            $fileToLoad = $_GET['page'];
        }else{
            $fileToLoad = "profile";
        }
        $Page_Data->content = include_once "controllers/$fileToLoad.php";
    }else{
        $Page_Data->title = "Organisation Management System";
        $Page_Data->nav = include_once "views/common/nav.php";
        if(isset($_GET['page'])){
            $fileToLoad = $_GET['page'];
        }else{
            $fileToLoad = "news";
        }
        $Page_Data->content = include_once "controllers/$fileToLoad.php";
    }
    $Page_Data->footer = include_once "views/common/footer.php";
    $Page_Data->loader = include_once "views/common/loader.php";

    $Page_Data->embeddedStyle = "<style>
                                    nav .main_nav a[href *= '?page=$fileToLoad'], nav .log_nav a[href *= 'page=$fileToLoad']{
                                        color:green;
                                        text-decoration:underline;
                                        text-decoration-color:green;
                                        font-weight:600;
                                    }
                                </style>";

    $Page_Data->addCSS("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons");
    $Page_Data->addCSS("admin/bootstrap-5.0.0-beta2-dist/css/bootstrap.css");
    $Page_Data->addCSS("admin/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css");
    $Page_Data->addCSS("admin/bootstrap-5.0.0-beta2-dist/css/bootstrap-utilities.css");
    $Page_Data->addCSS("admin/bootstrap-5.0.0-beta2-dist/css/bootstrap-grid.css");
    $Page_Data->addCSS("admin/bootstrap-5.0.0-beta2-dist/css/bootstrap-grid.min.css");
    $Page_Data->addCSS("admin/bootstrap-5.0.0-beta2-dist/css/bootstrap.rtl.css");
    $Page_Data->addCSS("admin/bootstrap-5.0.0-beta2-dist/css/bootstrap.rtl.min.css");
    $Page_Data->addCSS("admin/bootstrap-5.0.0-beta2-dist/css/bootstrap-utilities.css");
    $Page_Data->addCSS("admin/bootstrap-5.0.0-beta2-dist/css/bootstrap-utilities.min.css");
    $Page_Data->addCSS("admin/bootstrap-5.0.0-beta2-dist/css/bootstrap-reboot.css");
    $Page_Data->addCSS("admin/bootstrap-5.0.0-beta2-dist/css/bootstrap-reboot.min.css");
    $Page_Data->addCSS("css/layout15.css");
    $Page_Data->addCSS("css/loader.css");

    $Page_Data->addJS("js/jquery-3.3.1.js");
    $Page_Data->addJS("admin/bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.js");
    $Page_Data->addJS("admin/bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.min.js");
    $Page_Data->addJS("admin/bootstrap-5.0.0-beta2-dist/js/bootstrap.js");
    $Page_Data->addJS("admin/bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js");
    $Page_Data->addJS("js/modal.js");
    $Page_Data->addJS("js/main.js");

    $page = include_once "views/temp/page.php";
    echo $page;
?>