<?php
	include_once "admin/models/Table.class.php";

	class Blog_Entry_Table extends Table{
		public function saveBlogEntry($blog_pic, $category, $author, $blog_title, $blog_entry){
			$sql = "INSERT INTO blog_table (blog_pic, category, author, blog_title, blog_entry)  VALUES (?, ?, ?, ?, ?)";
			$data = array($blog_pic, $category, $author, $blog_title, $blog_entry);
			$statement = $this->makeStatement($sql, $data);
		}
		public function updateBlogEntry($id, $blog_pic, $category, $author, $blog_title, $blog_entry){
			$sql = "UPDATE blog_table SET blog_pic = ?, category = ?, author = ?, blog_title = ?, blog_entry = ? WHERE id = ?";
			$data = array($blog_pic, $category, $author, $blog_title, $blog_entry, $id);
			$statement = $this->makeStatement($sql, $data);
			return $statement;
		}
		public function deleteBlogEntry($id){
			$this->deleteCommentsByID($id);
			$sql = "DELETE FROM blog_table WHERE id = ?";
			$data = array($id);
			$statement = $this->makeStatement($sql, $data);
		}
		private function deleteCommentsByID($id){
			include_once "admin/model/Comment_Table.class.php";
			$comments = new Comment_Table($this->db);
			$comments->deleteByEntryId($id);
		}
		public function getEntry($id){
			$sql =  "SELECT * FROM blog_table WHERE id = ?";
			$data = array($id);
			$statement = $this->makeStatement($sql, $data);
			$model = $statement->fetchObject();
			return $model;
		}
		public function getBlogEntires(){
			$sql = "SELECT *, SUBSTRING(blog_pic, 1, 20) AS blog_pic_intro, SUBSTRING(blog_title, 1, 20) AS title_intro, SUBSTRING(blog_entry, 1, 20) AS post_intro FROM blog_table ORDER BY id DESC LIMIT 15";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getBlogEntiresForPublic(){
			$sql = "SELECT *, SUBSTRING(blog_pic, 1, 20) AS blog_pic_intro, SUBSTRING(blog_title, 1, 20) AS title_intro, SUBSTRING(blog_entry, 1, 20) AS post_intro FROM blog_table ORDER BY id DESC LIMIT 6";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getBlogEntiresForPublicMobile(){
			$sql = "SELECT *, SUBSTRING(blog_pic, 1, 20) AS blog_pic_intro, SUBSTRING(blog_title, 1, 20) AS title_intro, SUBSTRING(blog_entry, 1, 20) AS post_intro FROM blog_table ORDER BY id DESC LIMIT 3";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getBlogEntiresForPublic_CN(){
			$sql = "SELECT *, SUBSTRING(blog_pic, 1, 20) AS blog_pic_intro, SUBSTRING(blog_title, 1, 20) AS title_intro, SUBSTRING(blog_entry, 1, 20) AS post_intro FROM blog_table WHERE category = 'Current News' ORDER BY id DESC LIMIT 6";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getBlogEntiresForPublicMobile_CN(){
			$sql = "SELECT *, SUBSTRING(blog_pic, 1, 20) AS blog_pic_intro, SUBSTRING(blog_title, 1, 20) AS title_intro, SUBSTRING(blog_entry, 1, 20) AS post_intro FROM blog_table WHERE category = 'Current News' ORDER BY id DESC LIMIT 3";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getBlogEntiresForPublic_LS(){
			$sql = "SELECT *, SUBSTRING(blog_pic, 1, 20) AS blog_pic_intro, SUBSTRING(blog_title, 1, 20) AS title_intro, SUBSTRING(blog_entry, 1, 20) AS post_intro FROM blog_table WHERE category = 'Lifestyle' ORDER BY id DESC LIMIT 6";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getBlogEntiresForPublicMobile_LS(){
			$sql = "SELECT *, SUBSTRING(blog_pic, 1, 20) AS blog_pic_intro, SUBSTRING(blog_title, 1, 20) AS title_intro, SUBSTRING(blog_entry, 1, 20) AS post_intro FROM blog_table WHERE category = 'Lifestyle' ORDER BY id DESC LIMIT 3";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getBlogEntiresForPublic_PR(){
			$sql = "SELECT *, SUBSTRING(blog_pic, 1, 20) AS blog_pic_intro, SUBSTRING(blog_title, 1, 20) AS title_intro, SUBSTRING(blog_entry, 1, 20) AS post_intro FROM blog_table WHERE category = 'Parenting' ORDER BY id DESC LIMIT 6";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getBlogEntiresForPublicMobile_PR(){
			$sql = "SELECT *, SUBSTRING(blog_pic, 1, 20) AS blog_pic_intro, SUBSTRING(blog_title, 1, 20) AS title_intro, SUBSTRING(blog_entry, 1, 20) AS post_intro FROM blog_table WHERE category = 'Parenting' ORDER BY id DESC LIMIT 3";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getBlogEntiresForPublic_TR(){
			$sql = "SELECT *, SUBSTRING(blog_pic, 1, 20) AS blog_pic_intro, SUBSTRING(blog_title, 1, 20) AS title_intro, SUBSTRING(blog_entry, 1, 20) AS post_intro FROM blog_table WHERE category = 'Travel' ORDER BY id DESC LIMIT 6";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getBlogEntiresForPublicMobile_TR(){
			$sql = "SELECT *, SUBSTRING(blog_pic, 1, 20) AS blog_pic_intro, SUBSTRING(blog_title, 1, 20) AS title_intro, SUBSTRING(blog_entry, 1, 20) AS post_intro FROM blog_table WHERE category = 'Travel' ORDER BY id DESC LIMIT 3";
			$statement = $this->makeStatement($sql);
			return $statement;
		}

		public function getEntryById($id){
			$sql = "SELECT * FROM blog_table WHERE id = ?";
			$data = array($id);
			$statement = $this->makeStatement($sql, $data);
			$model = $statement->fetchObject();
			return $model;
		}
		public function getAllEntriesForSide(){
			$sql = "SELECT *, SUBSTRING(blog_title, 1, 15) AS name, SUBSTRING(blog_entry, 1, 50) AS intro FROM blog_table ORDER BY id DESC LIMIT 10";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getAllEntriesForSingleSide(){
			$sql = "SELECT *, SUBSTRING(blog_title, 1, 15) AS name, SUBSTRING(blog_entry, 1, 50) AS intro FROM blog_table ORDER BY id DESC LIMIT 5";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getNumOfPages(){
			$sql = "SELECT COUNT(*) AS numRecords FROM blog_table";
			$statement = $this->makeStatement($sql);
			$model = $statement->fetchObject();
			return $model;
		}
		public function getEntriesForPagination(){
			if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	    	$page_no = $_GET['page_no'];
		    } else {
		        $page_no = 1;
		    }
		    $total_records_per_page = 4;
		    $offset = ($page_no-1) * $total_records_per_page;
			$adjacents = "2";

			$sql = "SELECT *, SUBSTRING(blog_title, 1, 15) AS name, SUBSTRING(blog_entry, 1, 150) AS intro FROM blog_table ORDER BY id DESC LIMIT $offset, $total_records_per_page";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getBlogEntiresForCN(){
			$sql = "SELECT *, SUBSTRING(blog_pic, 1, 20) AS blog_pic_intro, SUBSTRING(blog_title, 1, 20) AS title_intro, SUBSTRING(blog_entry, 1, 20) AS post_intro FROM blog_table WHERE category = 'Current News' ORDER BY id DESC LIMIT 6";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getNumOfPages_CN(){
			$sql = "SELECT COUNT(*) AS numRecords FROM blog_table WHERE category = 'Current News'";
			$statement = $this->makeStatement($sql);
			$model = $statement->fetchObject();
			return $model;
		}
		public function getEntriesForPagination_CN(){
			if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	    	$page_no = $_GET['page_no'];
		    } else {
		        $page_no = 1;
		    }
		    $total_records_per_page = 4;
		    $offset = ($page_no-1) * $total_records_per_page;
			$adjacents = "2";

			$sql = "SELECT *, SUBSTRING(blog_title, 1, 15) AS name, SUBSTRING(blog_entry, 1, 150) AS intro FROM blog_table WHERE category = 'Current News' ORDER BY id DESC LIMIT $offset, $total_records_per_page";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getBlogEntiresForLS(){
			$sql = "SELECT *, SUBSTRING(blog_pic, 1, 20) AS blog_pic_intro, SUBSTRING(blog_title, 1, 20) AS title_intro, SUBSTRING(blog_entry, 1, 20) AS post_intro FROM blog_table WHERE category = 'Lifestyle'ORDER BY id DESC LIMIT 6";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getNumOfPages_LS(){
			$sql = "SELECT COUNT(*) AS numRecords FROM blog_table WHERE category = 'Lifestyle'";
			$statement = $this->makeStatement($sql);
			$model = $statement->fetchObject();
			return $model;
		}
		public function getEntriesForPagination_LS(){
			if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	    	$page_no = $_GET['page_no'];
		    } else {
		        $page_no = 1;
		    }
		    $total_records_per_page = 4;
		    $offset = ($page_no-1) * $total_records_per_page;
			$adjacents = "2";

			$sql = "SELECT *, SUBSTRING(blog_title, 1, 15) AS name, SUBSTRING(blog_entry, 1, 150) AS intro FROM blog_table WHERE category = 'Lifestyle' ORDER BY id DESC LIMIT $offset, $total_records_per_page";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getBlogEntiresForPR(){
			$sql = "SELECT *, SUBSTRING(blog_pic, 1, 20) AS blog_pic_intro, SUBSTRING(blog_title, 1, 20) AS title_intro, SUBSTRING(blog_entry, 1, 20) AS post_intro FROM blog_table WHERE category = 'Parenting'ORDER BY id DESC LIMIT 6";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getNumOfPages_PR(){
			$sql = "SELECT COUNT(*) AS numRecords FROM blog_table WHERE category = 'Parenting'";
			$statement = $this->makeStatement($sql);
			$model = $statement->fetchObject();
			return $model;
		}
		public function getEntriesForPagination_PR(){
			if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	    	$page_no = $_GET['page_no'];
		    } else {
		        $page_no = 1;
		    }
		    $total_records_per_page = 4;
		    $offset = ($page_no-1) * $total_records_per_page;
			$adjacents = "2";

			$sql = "SELECT *, SUBSTRING(blog_title, 1, 15) AS name, SUBSTRING(blog_entry, 1, 150) AS intro FROM blog_table WHERE category = 'Parenting' ORDER BY id DESC LIMIT $offset, $total_records_per_page";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getBlogEntiresForTR(){
			$sql = "SELECT *, SUBSTRING(blog_pic, 1, 20) AS blog_pic_intro, SUBSTRING(blog_title, 1, 20) AS title_intro, SUBSTRING(blog_entry, 1, 20) AS post_intro FROM blog_table WHERE category = 'Travel'ORDER BY id DESC LIMIT 6";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getNumOfPages_TR(){
			$sql = "SELECT COUNT(*) AS numRecords FROM blog_table WHERE category = 'Travel'";
			$statement = $this->makeStatement($sql);
			$model = $statement->fetchObject();
			return $model;
		}
		public function getEntriesForPagination_TR(){
			if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	    	$page_no = $_GET['page_no'];
		    } else {
		        $page_no = 1;
		    }
		    $total_records_per_page = 4;
		    $offset = ($page_no-1) * $total_records_per_page;
			$adjacents = "2";

			$sql = "SELECT *, SUBSTRING(blog_title, 1, 15) AS name, SUBSTRING(blog_entry, 1, 150) AS intro FROM blog_table WHERE category = 'Travel' ORDER BY id DESC LIMIT $offset, $total_records_per_page";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getBlogCounts(){
			$sql = "SELECT COUNT(*) AS blogCount FROM blog_table";
			$statement = $this->makeStatement($sql);
			$model = $statement->fetchObject();
			return $model;
		}
		public function searchBlogRecords($searchTerm){
			$sql = "SELECT *, SUBSTRING(blog_entry, 1, 50) AS searchIntro FROM blog_table WHERE category LIKE ? OR author LIKE ? OR blog_title LIKE ? OR blog_entry LIKE ?";
			$data = array("%$searchTerm%","%$searchTerm%","%$searchTerm%","%$searchTerm%");
			$statement = $this->makeStatement($sql, $data);
			return $statement;
		}
	}
?>