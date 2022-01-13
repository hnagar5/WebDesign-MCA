<?php

    session_start();

?>

<!DOCTYPE html>
<head>
    <title>LogIn</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body
        {
            background-color:darkgrey;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1 class="text-secondary display-4 text-center">Log In</h1>
        <br>
        <form action="validateUser.php" method="post">
            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <label>Enter User Name : </label>
                    <input type="text" name="username" value="Harsh5974" class="form-control" placeholder="User Name...">        
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <label>Enter Password : </label>
                    <input type="password" name="password" value="harsh5974" class="form-control" placeholder="Password...">        
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                <button type="submit" class="btn btn-dark" id="submit">Submit</button>    
                    <label>Don't Have an Account?<a href="registration.php">&nbsp;SignUp</a></label>
                </div>
            </div>
        </form>
    </div>
</body>
</html>