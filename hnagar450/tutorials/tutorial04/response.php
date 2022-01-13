<?php
    /*echo $_POST['amount'];
    echo $_POST['interest'];
    echo $_POST['years'];*/

    $Amount = $_POST['Amount'];
    $Interest = $_POST['Interest'];
    $Years = $_POST['Years'];

    $si = ($Amount * $Interest * $Years) / 100;
    echo "Simple Interest is : " . $si;
?>