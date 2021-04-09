<?php
	include_once "admin/models/Table.class.php";
	class Search extends Table{
		public function searchDues($searchTerm){
			$sql = "SELECT * FROM club_dues WHERE due_title LIKE ?";
			$data = array("%$searchTerm%");
			$statement = $this->makeStatement($sql, $data);
			return $statement;
		}
		public function searchMembers($searchTerm){
			$sql = "SELECT * FROM users WHERE fname LIKE ? OR lname LIKE ? OR uname LIKE ? OR email LIKE ? OR office LIKE ?";
			$data = array("%$searchTerm%","%$searchTerm%","%$searchTerm%","%$searchTerm%", "%$searchTerm%");
			$statement = $this->makeStatement($sql, $data);
			return $statement;
		}
		public function searchBlogRecords($searchTerm){
			$sql = "SELECT *, SUBSTRING(blog_entry, 1, 50) AS searchIntro FROM blog_table WHERE category LIKE ? OR author LIKE ? OR blog_title LIKE ? OR blog_entry LIKE ?";
			$data = array("%$searchTerm%","%$searchTerm%","%$searchTerm%","%$searchTerm%");
			$statement = $this->makeStatement($sql, $data);
			return $statement;
		}
	}
?>