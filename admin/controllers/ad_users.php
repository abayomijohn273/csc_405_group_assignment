<?php
    include_once "admin/models/Admin_User_Table.class.php";
    $adminTable = new Admin_User_Table($db);
    $allAdminUsers = $adminTable->getAdusers();
    $adusersCount = $adminTable->getAduserCount();
    $return = include_once "admin/views/ad_users_v.php";
    return $return;
?>