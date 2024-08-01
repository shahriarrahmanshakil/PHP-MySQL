<?php
    class database{
        public $hostName;
        public $userName;
        public $passWord;
        public $dbName;

        public function __construct($hostName,$userName,$passWord,$dbName)
        {
            $this->hostName = $hostName;
            $this->userName = $userName;
            $this->passWord = $passWord;
            $this->dbName = $dbName;

            $connect_db = new mysqli($this->hostName = $hostName, $this->userName = $userName, $this->passWord = $passWord, $this->dbName = $dbName);

            if($connect_db->connect_error){
                die("Connection Failed : $connect_db->connect_error");
            }
        }
    }

    $db = new database("localhost","root","","php_oop_crud_operations");

?>