<?php

    $db = new mysqli('localhost','root','','harsh_db');
    if($db->connect_errno)
    {
        echo $db->connect_error;
        exit;
    }
    else
    {
        echo "<h1>Connected to Database...</h1>";
    }

?>