<?php

    $username=isset($_COOKIE['user_cookie'])?$_COOKIE['user_cookie']:"";
    $password=isset($_COOKIE['pass_cookie'])?$_COOKIE['pass_cookie']:"";
    $check=isset($_COOKIE['user_cookie'])?"checked":"";
?>

<!DOCTYPE html>
<head>
    <title>LogIn</title>
    <link rel="stylesheet" href="S_Style.css">
    <link rel="stylesheet" href="L_Style.css">
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
                    <input type="text" name="username" value="<?=$username?>" class="form-control" placeholder="User Name...">        
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <label>Enter Password : </label>
                    <input type="password" name="password" value="<?=$password?>" class="form-control" placeholder="Password...">        
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="rememberme" <?=$check?> name="rememberme">
                        <label class="form-check-label" for="rememberme">Remember Me</label>
                    </div>
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