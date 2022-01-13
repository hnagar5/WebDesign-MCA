<?php
    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
    
    $month=$_POST['Month'];
?>
<select name="Month" id="" required>
            <option  <?= ($month=="1")?"selected":""?>>January</option>
            <option <?= ($month=="2")?"selected":""?>>Febuary</option>
            <option <?= ($month=="3")?"selected":""?>>March</option>
            <option <?= ($month=="4")?"selected":""?>>April</option>
            <option <?= ($month=="5")?"selected":""?>>May</option>
            <option <?= ($month=="6")?"selected":""?>>June</option>
            <option <?= ($month=="7")?"selected":""?>>July</option>
            <option <?= ($month=="8")?"selected":""?>>August</option>
            <option <?= ($month=="9")?"selected":""?>>Septmber</option>
            <option <?= ($month=="10")?"selected":""?>>Octomber</option>
            <option <?= ($month=="11")?"selected":""?>>November</option>
            <option <?= ($month=="12")?"selected":""?>>December</option>
</select>
