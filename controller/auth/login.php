<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
        require __DIR__ ."/../../db/connect.php";
        require __DIR__ ."/../../model/user.php";
        require __DIR__ ."/authcontrol.php";
        $username=htmlspecialchars($_POST['username']);
        $password=htmlspecialchars($_POST['password']);
        $auth=new authcontrol();
        $auth->login($username,$password);
}

?>