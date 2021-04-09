<?php
    class Table{
        protected $db;

        public function __construct($db){
            $this->db = $db;
        }

        protected function makeStatement($sql, $data = null){
            $statement = $this->db->prepare($sql);
            try{
                $statement->execute($data);
            }catch(Exception $e){
                $executeMssg = "<p>You tried to run this sql: $sql</p>
                                <p>Exception $e</p>";
            }
            return $statement;
        }
    }
?>