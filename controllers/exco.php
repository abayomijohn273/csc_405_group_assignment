<?php
    include_once "admin/models/User_Table.class.php";
    $userTable = new User_Table($db);
    $allExcos = $userTable->getExcos();
    $excoCount = $userTable->getExcoCount();
    $output = include_once "views/exco_v.php";
    return $output;
?>