<?php
    require('db/connect.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function()
        {
            $("#btn2").click(function()
            {
                $("#t2").hide();
            });
        });
    </script>

</head>
<body>
<?php
    $sql = "select *from users";
    $result = $db->query($sql);
?>
<ul>
    <?php
    while($row = $result->fetch_assoc()){
        ?>
        <li style = 'font-size:24px;color:blue'>
        <?=$row['name']?>
    </li><?php
    }?>
    </ul>
    <div class="container">
        <br>
        <table class="table" border="1">
            <thead style="background-color: black; color: white;">
                <tr>
                    <td><b>No</b></td>
                    <td><b>Name</b></td>
                    <td><b>Email</b></td>
                    <td><b>Age</b></td>
                    <td><b>State</b></td>
                    <td><b>City</b></td>
                    <td><b>Action</b></td>
                </tr>
            </thead>
            <tbody style="background-color: rgb(64, 95, 61); color: white;">
                
                <tr id="t2">
                    <td>1</td>
                    <td>Harsh</td>
                    <td>hnagar450@rku.ac.in</td>
                    <td>22</td>
                    <td>Gujarat</td>
                    <td>Rajkot</td>
                    <td>
                        <button type="button" class="btn btn-primary">Edit</button>&nbsp;
                        <button type="button" id="btn2" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>    
</body>
</html>