<?php

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == "Harsh5974" && $password == "harsh5974")
    {
        $_SESSION['username']=$username;
        header("Location: index.php");
    }
    else
    {
        header("Location: login.php");
    }
?>
