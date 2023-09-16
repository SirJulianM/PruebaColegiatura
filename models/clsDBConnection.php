<?php

class DBConnection {
    
    //Variables
    public $db_server = 'localhost';
    public $db_name = 'pruebaColegiatura';
    public $db_user = 'postgres';
    public $db_pass = 'Admint2016';
    //public $db_port = '5432';
    protected $db_connection;

    //Funciones

    function connect(){
        try {
            /*$str_connection = "pgsql: host=$this->db_server; port=$this->db_port;".
            "dbname=$this->db_name; user=$this->db_user; password=$this->db_pass";
            $this->db_connection = new PDO($str_connection);
            return $this->db_connection;*/
            $str_connection = "pgsql: host=$this->db_server;".
            "dbname=$this->db_name; user=$this->db_user; password=$this->db_pass";
            $this->db_connection = new PDO($str_connection);
            return $this->db_connection;
        } catch (PDOException $error) {
            return "Error: " . $error->getMessage() . "<br />";
            die(); 
        }
    }

}