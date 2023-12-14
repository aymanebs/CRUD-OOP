<?php 
require __DIR__ .'/../../model/user.php';

class authcontrol{
    function login($username,$password){
        $name="";
        $email="";
        $phone="";
        $adress="";
        $user=new user($username,$password,$name,$email,$phone,$adress);
        $result=$user->getUserByUsername();
        var_dump($result);
    }



}



?>