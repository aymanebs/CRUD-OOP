<?php

if($_SERVER['REQUEST_METHOD']== 'POST'){
    require __DIR__ .'/../../db/connect.php';
    require __DIR__.'/../../model/user.php';
    $username=htmlspecialchars($_POST['username']);
    $password=htmlspecialchars($_POST['password']);
    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $phone=htmlspecialchars($_POST['phone']);
    $adress=htmlspecialchars($_POST['adress']);
    // $role=htmlspecialchars($_POST['role']);
    

    $user= new User($username,$password,$name,$email,$phone,$adress);
    $user ->create();
}