<?php
	include_once "admin/models/Blog_Entry_Table.class.php";
	$blogTable = new Blog_Entry_Table($db);
	
	$insertNewEntry = isset($_POST['action_save']);

	$updateEntry = isset($_POST['action_update']);

	$deleteDataEntry = isset($_POST['action_delete']);
	

		if($insertNewEntry){
			$id = $_POST['id'];

			$fileName = $_FILES['blog_pic']['name'];
			$fileTmpName = $_FILES['blog_pic']['tmp_name'];
			$fileSize = $_FILES['blog_pic']['size'];
			$fileError = $_FILES['blog_pic']['error'];
			$fileType = $_FILES['blog_pic']['type'];

			$category = $_POST['category'];
			$author = $_POST['author'];
			$title = $_POST['blog_title'];
			$entry = $_POST['blog_entry'];

			$fileExt = explode('.', $fileName);
			$fileActExt = strtolower(end($fileExt));

			$allowed = array("jpg", "jpeg", "png");

			if(in_array($fileActExt, $allowed)){
				if($fileError === 0){
					if($fileSize < 20000000){
						$fileNewName = uniqid('', true).".".$fileActExt;
						$fileDestination = "admin/img/uploads/Blog_pic/blog_pic".$fileNewName;
						move_uploaded_file($fileTmpName, $fileDestination);
						$blogTable->saveBlogEntry($fileDestination, $category, $author, $title, $entry);
					}
				}
			}
		}else if($updateEntry){
			$id = $_POST['id'];
			if($id > 0 ){
				$fileName = $_FILES['blog_pic']['name'];
				$fileTmpName = $_FILES['blog_pic']['tmp_name'];
				$fileSize = $_FILES['blog_pic']['size'];
				$fileError = $_FILES['blog_pic']['error'];
				$fileType = $_FILES['blog_pic']['type'];

				$category = $_POST['category'];
				$author = $_POST['author'];
				$title = $_POST['blog_title'];
				$entry = $_POST['blog_entry'];

				$fileExt = explode('.', $fileName);
				$fileActExt = strtolower(end($fileExt));

				$allowed = array("jpg", "jpeg", "png");

				if(!empty($category) or !empty($fileName)){
					if(in_array($fileActExt, $allowed)){
						if($fileError === 0){
							if($fileSize < 20000000){	
								$fileNewName = uniqid('', true).".".$fileActExt;
								$fileDestination = "admin/img/uploads/Blog_pic/blog_pic".$fileNewName;
								move_uploaded_file($fileTmpName, $fileDestination);
								$blogTable->updateBlogEntry($id, $fileDestination, $category, $author, $title, $entry);
							}else{
								echo "You file is too big!";
							}
						}else{
							echo "There was an error uploading your file!";
						}
					}else{
						echo "You cannot upload files of this type!";
					}
				}else{
					try{
						$ErrUpdating = new Exception("Error: Please choose a new or existing photo and category.");
						throw $ErrUpdating;
					}catch (Exception $ErrUpdating){
						$editorErrMssg = $ErrUpdating->getMessage();
					}
				}
			}
		}else if ($deleteDataEntry) {
			$id = $_POST['id'];
			$blogTable->deleteBlogEntry($id);
			header('location: admin.php?ad_page=blog_post_ctrl');
		}
	$entryRequested = isset( $_GET['id'] );
	if ( $entryRequested ) {
	 	$id = $_GET['id'];
	 	$entryData = $blogTable->getEntry( $id );
	 	$entryData->id = $id;
	}
	$output = include_once "admin/views/blog_editor_view.php";
	return $output;
?>