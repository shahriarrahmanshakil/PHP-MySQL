<?php
    class database{
        public $hostName;
        public $userName;
        public $passWord;
        public $dbName;
        public $connect_db;

        public function __construct($hostName,$userName,$passWord,$dbName)
        {
            $this->hostName = $hostName;
            $this->userName = $userName;
            $this->passWord = $passWord;
            $this->dbName = $dbName;

            $this->connect_db = new mysqli($this->hostName = $hostName, $this->userName = $userName, $this->passWord = $passWord, $this->dbName = $dbName);

            if($this->connect_db->connect_error){
                die("Connection Failed : $this->connect_db->connect_error");
            }
        }
        //insert_data
        public function insert(){
            $insert_sql = "INSERT INTO employee_information(employee_name,employee_email) 
                    VALUES('Shahriar Rahman Shakil', 'shahriar@gmail.com')";

            $this->connect_db->query($insert_sql);
        } 

        public function update(){

        }
    }

    $db = new database("localhost","root","","php_oop_crud_operations");
    $db->insert();

?>