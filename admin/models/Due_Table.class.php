<?php
	include_once "admin/models/Table.class.php";
	class Due_Table extends Table{
		public function saveDues($due, $price){
			$sql = "INSERT INTO club_dues (due_title, amount) VALUES (?, ?)";
			$data = array($due, $price);
			$statement = $this->makeStatement($sql, $data);
			return $statement;
		}
		public function updateDues($id, $due, $price){
			$sql = "UPDATE club_dues SET due_title = ?, amount = ? WHERE id = ?";
			$data = array($due, $price, $id);
			$statement = $this->makeStatement($sql, $data);
			return $statement;
		}
		public function deleteDues($id){
			$sql = "DELETE FROM club_dues WHERE id = ?";
			$data = array($id);
			$statement = $this->makeStatement($sql, $data);
		}
		public function getDues(){
			$sql = "SELECT * FROM club_dues";
			$statement = $this->makeStatement($sql);
			return $statement;
		}
		public function getDues_auto(){
			$sql = "SELECT * FROM club_dues";
			$statement = $this->makeStatement($sql);
			$model = $statement->fetchObject();
			return $model;
		}
		public function getDuesById($id){
			$sql =  "SELECT * FROM club_dues WHERE id = ?";
			$data = array($id);
			$statement = $this->makeStatement($sql, $data);
			$model = $statement->fetchObject();
			return $model;
		}
		public function searchDues($searchTerm){
			$sql = "SELECT * FROM club_dues WHERE due_title LIKE ?";
			$data = array("%$searchTerm%");
			$statement = $this->makeStatement($sql, $data);
			return $statement;
		}
	}
?>