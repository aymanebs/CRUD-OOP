<?php 
class Database{
    private $servername;
    private $username;
    private $password;
    private $database;
    private $connection;

    function __construct()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->database = "brief3";
        
        $this->connection=new mysqli($this->servername,$this->username,$this->password,$this->database);
        
        if($this->connection->connect_error){
            error_log('Connection error: ' . $this->connection->connect_error);
            // die('error');
        }
        else{
            $this->connection;
            // die('connected');
        }
    }
}