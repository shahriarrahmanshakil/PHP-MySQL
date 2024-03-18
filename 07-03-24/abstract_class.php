<?php
    abstract class Institution{
        public $name;

        public function __construct($name){
            $this->name = $name;
        }
        abstract public function ins()
    }
?>