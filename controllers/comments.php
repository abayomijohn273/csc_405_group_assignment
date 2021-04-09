<?php
	include_once "admin/models/Comment_Table.class.php";
	$commentsTable = new Comment_Table($db);

	$commentSubmitted = isset($_POST['newComment']);
	if($commentSubmitted){
		$whichEntry = $_POST['entry-id'];
		$user = $_POST['user-name'];
		$comment = $_POST['new-comment'];
		if(!empty($user) and !empty($comment)){
			$commentsTable->saveComment($whichEntry, $user, $comment);
		}else{
			try{
				$commentErr = new Exception("Your comments cannot be empty.");
				throw $commentErr;
 			}catch(Exception $commentErr){
 				$commentFormMessage = $commentErr->getMessage();
 			}
		}
	}
	$Comments = $commentsTable->getCommentsById($blog_id);
	$allComments = $commentsTable->getAllCommentsById($blog_id);
	$totalComments = $commentsTable->getNumComment($blog_id);

	$Comments_M = $commentsTable->getCommentsById($blog_id);
	$allComments_M = $commentsTable->getAllCommentsById($blog_id);
	$totalComments_M = $commentsTable->getNumComment($blog_id);

	$output = include_once "views/comments_v.php";
	return $return;
?>