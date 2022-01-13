<!DOCTYPE html>
<head>
    <title>Registration</title>
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
    <script>
        $("document").ready(function()
        {
            $("#Form1").submit(function()
            {
                var firstname = $("#fname").val();
                var lastname = $("#lname").val();
                var username = $("#uname").val();
                var password = $("#pswd").val();
                var rpassword = $("#rpswd").val();
                var age = $("#age").val();
                var birthdate = $("#bdt").val();
                var city = $("#ct").val();
                var state = $("#st").val();
                var country = $("#cont").val();

                if(firstname == "" || lastname == "" || username == "" || password == "" || rpassword == "" || age == "" || birthdate == "" || city == "" || state == "" || country == "")
                {
                    alert("Input all fields.");
                    return false;
                }
                if(user_name.length < 4)
                {
                    alert("Use Minimum 5 Character in Username.")
                    return false;
                }
                if(password.length <= 5)
                {
                    alert("Minimum 6 Character Password.")
                    return false;
                }
                if(password != r_password)
                {
                    alert("Password not Match.");
                    return false;
                }
            });
        });
    </script>

</head>
<body>
<div class="container">
        <h1 class="text-secondary display-4 text-center">Sign Up</h1>
        <br>
        <form id="Form1" action="" method="post">
            
            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <label>First Name</label>
                    <input type="text" id="fname" class="form-control" placeholder="Enter First Name...">        
                </div>
            </div>

            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <label>Last Name</label>
                    <input type="text" id="lname" class="form-control" placeholder="Enter Last Name...">        
                </div>
            </div>
            
            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <label>User Name</label>
                    <input type="text" id="uname" class="form-control" placeholder="Enter User Name...">        
                </div>
            </div>

            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <label>Password</label>
                    <input type="password" id="pswd" class="form-control" placeholder="Enter Password...">        
                </div>
            </div>
            
            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <label>Re-Enter Password</label>
                    <input type="password" id="rpswd" class="form-control" placeholder="Re-Enter Password...">        
                </div>
            </div>

            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <label>Age</label>
                    <input type="number" id="age" class="form-control" placeholder="Enter Age...">        
                </div>
            </div>
            
            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <label>Birth Date</label>
                    <input type="date" id="bdt" class="form-control" >        
                </div>
            </div>

            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <label>City</label>
                    <input type="text"  id="ct" class="form-control" placeholder="Enter City...">        
                </div>
            </div>
            
            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <label>State</label>
                    <input type="text" id="st" class="form-control" placeholder="Enter State...">        
                </div>
            </div>

            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <label>Country</label>
                    <input type="text" id="cont" class="form-control" placeholder="Enter Country...">        
                </div>
            </div>

            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file"  id="cfile" accept="image/*">    
                    </div>    
                </div>
            </div>

            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="comment">Comment</label>
                    <textarea class="form-control" rows="5" placeholder="Enter Comment..." id="comment"></textarea>
                    </div>    
                </div>
            </div>

            <div class="form-group row justify-content-center">
                <div class="col-sm-5">
                    <div class="form-group">
                        <input type="submit" value="Submit">    
                        <label>Have an Account?<a href="login.php">&nbsp;LogIn</a></label>
                    </div>    
                </div>
            </div>

        </form>

    </div>
</body>
</html>