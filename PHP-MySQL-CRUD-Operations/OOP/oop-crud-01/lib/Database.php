<?php
    require("../config/config.php");

    class Database{
        public  $host     = HOST; 
        public  $user     = USER;
        public  $password = PASSWORD;
        public  $database = DATABASE;

        public $link;
        public $error;

        public function connect_db(){
            $this->link = mysqli_connect($this->host,$this->user,$this->password,$this->database);
            if(!$this->link){
                $this->error = "Database Connection Failed";
                return false;
            }
        }

        public function __construct(){
            $this->connect_db();
        }

    }

?>