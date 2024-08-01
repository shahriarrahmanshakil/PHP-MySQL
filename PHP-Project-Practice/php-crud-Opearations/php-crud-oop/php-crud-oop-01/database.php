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

        //update_data
        public function update($e_n,$e_m,$e_id){
            $update_sql = "UPDATE employee_information 
                           SET employee_name = '$e_n', employee_email = '$e_m' 
                           WHERE employee_id = '$e_id'";
            $this->connect_db->query($update_sql);
        }

        //delete_data
        public function delete(){
            $delete_sql = "DELETE FROM employee_information WHERE employee_id = '4'";
            $this->connect_db->query($delete_sql);
        }
    }

    $db = new database("localhost","root","","php_oop_crud_operations");
    // $db->insert();
    // $db->update('MD Tuhin Mia','tuhin@gmail.com','4');
    $db->delete();

?>