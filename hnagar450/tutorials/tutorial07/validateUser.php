<?php

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $check = isset($_POST['rememberme']);
    if($username == "harsh5974" && $password == "5974")
    {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        if($check)
        {
            setcookie("user_cookie",$username,time() + 3600);
            setcookie("pass_cookie",$password,time() + 3600);
        }
        else
        {
            setcookie("user_cookie",$username,time());
            setcookie("pass_cookie",$password,time());
        }
        header("Location: index.php");
    }
    else
    {
        header("Location: login.php");
    }
?>
