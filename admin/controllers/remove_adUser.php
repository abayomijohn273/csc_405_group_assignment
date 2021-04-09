<?php
    include_once "admin/models/Admin_User_Table.class.php";
    $adminTable = new Admin_User_Table($db);

    if(isset($_POST['access_point_restriction'])){
        $id = $_POST['id'];
		$userData = $adminTable->deleteAduser($id);
        header("Location: admin.php?page=dashboard");
    }
?>