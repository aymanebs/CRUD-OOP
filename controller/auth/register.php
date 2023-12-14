<?php
  
if($_SERVER['REQUEST_METHOD']== 'POST'){
    session_start();
    require __DIR__ .'/../../db/connect.php';
    require __DIR__.'/../../model/user.php';
    $username=htmlspecialchars($_POST['username']);
    $password=htmlspecialchars($_POST['password']);
    // $password_confirmation=htmlspecialchars($_POST['password_confirmation']);
    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $phone=htmlspecialchars($_POST['phone']);
    $adress=htmlspecialchars($_POST['adress']);
    // $role=htmlspecialchars($_POST['role']);
    
    if(empty($username)  ){
      
        $_SESSION['alert']="empty field";
        // header('Location:/../../view/auth/register.php');
        // exit();
        
    }
    if( empty($password)){
        
        $_SESSION['alert-password']="empty field";
        // header('Location:/../../view/auth/register.php');
        // exit();
        
    }
    if( empty($name)){
     
        $_SESSION['alert-name']="empty field";
        // header('Location:/../../view/auth/register.php');
        // exit();
    }    
    if( empty($email)){
        
        $_SESSION['alert-email']="empty field";
        // header('Location:/../../view/auth/register.php');
        // exit();
      
    }
    if( empty($phone)){
   
        $_SESSION['alert-phone']="empty field";
        // header('Location:/../../view/auth/register.php');
        // exit();
        
    }
    if( empty($adress)){
      
        $_SESSION['alert-adress']="empty field";
    //     header('Location:/../../view/auth/register.php');
    //    exit();
    }
 
    if(empty($username) || empty($password) || empty($name) || empty($email) || empty($phone) || empty($adress)){
        header('Location:/../../view/auth/register.php');
           exit();
    }
    
    else{
    $user= new User($username,$password,$name,$email,$phone,$adress);
    $user ->create();
    header('Location:/../../view/auth/login.php');
    }
}