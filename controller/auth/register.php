<?php
  
if($_SERVER['REQUEST_METHOD']=='POST'){
        require __DIR__ ."/../../db/connect.php";
        require __DIR__ ."/../../model/user.php";
        require __DIR__ ."/authcontrol.php";
        $username=htmlspecialchars($_POST['username']);
        $password=htmlspecialchars($_POST['password']);
        $password_confirmation=htmlspecialchars($_POST['password_confirmation']);
        $name=htmlspecialchars($_POST['name']);
        $email=htmlspecialchars($_POST['email']);
        $phone=htmlspecialchars($_POST['phone']);
        $adress=htmlspecialchars($_POST['adress']);

        $auth=new authcontrol();
        $auth->register($username,$password, $password_confirmation, $name, $email, $phone, $adress);
}

?>