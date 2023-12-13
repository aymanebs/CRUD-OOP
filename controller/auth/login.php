<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    require __DIR__ ."/../../db/connect.php";
    require __DIR__ ."/../../model/user.php";
    $username=htmlspecialchars($_POST['username']);
    $password=htmlspecialchars($_POST['password']);
    $name="";
    $email="";
    $phone="";
    $adress="";
    $user=new User($username,$password,$name,$email,$phone,$adress);
    $user->login($password);
}



?>