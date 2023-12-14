<?php
// session_start();
class Authcontrol
{
    function login($username, $password)
    {
        $name = "";
        $email = "";
        $phone = "";
        $adress = "";
        $error="";
        $user = new user($username, $password, $name, $email, $phone, $adress);
        $result = $user->getUserByUsername();
        if (!$result) {
            $error="invalid input";
        } else {
            if (password_verify($password, $result['password'])) {
                header('Location:/../../index.php');
                exit();
            } else {
                $error="invalid input";
            }
        }
        $_SESSION['error'] = $error;
        header('Location : /../../view/auth/login.php');
        exit();
    }
    
    function register($username, $password, $password_confirmation, $name, $email, $phone, $adress)
    {
        $user = new User($username, $password, $name, $email, $phone, $adress);

        $error = "";
    
        if (empty($username) || empty($password) || empty($password_confirmation) || empty($name) || empty($email) || empty($phone) || empty($adress)) {
            $error = "You should fill are fields!!!";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "invalid email";
        } elseif ($password != $password_confirmation) {
            $error = "passwords don't match";
        } else {
            $result = $user->getUserByUsername();
            if ($result) {
                $error = "username already used";
            } else {
                $user->create();
                header('Location: /../../view/auth/login.php');
                exit();
            }
        }
    
    
        $_SESSION['error'] = $error;
        header('Location: /../../view/auth/register.php');
        exit();
    }
}
