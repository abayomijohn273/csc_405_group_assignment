<?php
	include_once "admin/models/Table.class.php";

	class Comment_Table extends Table{
		public function saveComment($entry_Id, $author, $txt){
			$sql = "INSERT INTO comment (entry_id, author, txt) VALUES (?, ?, ?)";
			$data = array($entry_Id, $author, $txt);
			$statement = $this->makeStatement($sql, $data);
			return $statement;
		}

		public function getCommentsById($id){
			$sql = "SELECT author, txt, date FROM comment WHERE entry_id = ? ORDER BY id DESC LIMIT 3";
			$data = array($id);
			$statement = $this->makeStatement($sql, $data);
			//$model = $statement->fetchObject();
			return $statement;
		}

		public function getAllCommentsById($id){
			$sql = "SELECT author, txt, date FROM comment WHERE entry_id = ? ORDER BY id DESC LIMIT 15";
			$data = array($id);
			$statement = $this->makeStatement($sql, $data);
			return $statement;
		}

		public function getNumComment($id){
			$sql = "SELECT COUNT(*) AS commentCount FROM comment  WHERE entry_id = ?";
			$data = array($id);
			$statement = $this->makeStatement($sql, $data);
			$model = $statement->fetchObject();
			return $model;
		}

		public function deleteByEntryId($id){
			$sql = "DELETE FROM comment WHERE entry_id = ?";
			$data  = array($id);
			$statement = $this->makeStatement($sql, $data);
		}

		public function getAllCommentsAdmin(){
			$sql = "SELECT *, SUBSTRING(txt, 1, 30) AS txt_intro FROM comment";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getCommentsByIdAdmin($id){
			$sql = "SELECT * FROM comment WHERE id = ?";
			$data = array($id);
			$statement = $this->makeStatement($sql, $data);
			$model = $statement->fetchObject();
			return $model;
		}
		public function deleteComment($id){
			$sql = "DELETE FROM comment WHERE id = ?";
			$data  = array($id);
			$statement = $this->makeStatement($sql, $data);
		}
	}
?>