<?php

class User{
    private $username;
    private $password;
    private $name;
    private $email;
    private $phone;
    private $adress;
    private $role;

   
    
    function __construct(  $username,$password, $name,$email, $phone, $adress, $role='Client')
    {
        $this->username=$username;
        $this->password=$password=password_hash($password,PASSWORD_DEFAULT);
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
        $this->adress=$adress;
        $this->role=$role;
    }
    function create(){
        $connection =new mysqli("localhost","root","","brief3");
        if($connection->connect_error){
            die("connection error");
        }
        $stmt=$connection->prepare("INSERT INTO users(username,password,name,email,phone,adress,role) VALUES(?,?,?,?,?,?,?);");
        $stmt->bind_param("sssssss",$this->username,$this->password,$this->name,$this->email,$this->phone,$this->adress,$this->role);
        $stmt->execute();
    }

    function login($username,$password){
        $connection =new mysqli("localhost","root","","brief3");
        if($connection->connect_error){
            die("connection error");
        }
        $stmt=$connection->prepare("SELECT * FROM users WHERE username=?;");
        $stmt->bind_param("s",$this->username);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();
        if(password_verify($password,$row['password'])){
            echo'logged in';   
        }
        else{
            die("invalid password");
        }
    }
}











