<?php
	include_once "admin/models/Blog_Entry_Table.class.php";
	$blogEntry = new Blog_Entry_Table($db);
	$allEntries = $blogEntry->getBlogEntires();
	$allEntries2 = $blogEntry->getBlogEntires();
	$output = include_once "admin/views/blog_post_list_view.php";
	return $output;
?>