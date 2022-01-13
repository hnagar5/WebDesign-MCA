<!DOCTYPE html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="S_Style.css">
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
            $("#myForm").submit(function()
            {
                var first_name = $("#fname").val();
                var last_name = $("#lname").val();
                var user_name = $("#uname").val();
                var password = $("#pswd").val();
                var r_password = $("#rpswd").val();
                var age = $("#age").val();
                var birthdate = $("#bdt").val();
                var city = $("#ct").val();
                var state = $("#st").val();
                var country = $("#cont").val();

                if(first_name == "" || last_name == "" || user_name == "" || password == "" || r_password == "" || age == "" || birthdate == "" || city == "" || state == "" || country == "")
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
        <h1 class="text-dark display-4">Sign Up</h1>
        <br>
        <form id="myForm" action="demo.html" method="post">
            
            <div class="form-group row justify-content-center">
                <div class="col-sm">
                    <label>Enter First Name : </label>
                    <input type="text" id="fname" class="form-control" placeholder="First Name..." autocomplete="off">        
                </div>
                <div class="col-sm">
                    <label>Enter Last Name : </label>
                    <input type="text" id="lname" class="form-control" placeholder="Last Name..." autocomplete="off">        
                </div>
            </div>
            
            <div class="form-group row justify-content-center">
                <div class="col-sm">
                    <label>Enter User Name : </label>
                    <input type="text" id="uname" class="form-control" placeholder="User Name..." autocomplete="off">        
                </div>
                <div class="col-sm">
                    <label>Enter Password : </label>
                    <input type="password" id="pswd" class="form-control" placeholder="Password..." autocomplete="off">        
                </div>
            </div>
            
            <div class="form-group row justify-content-center">
                <div class="col-sm">
                    <label>Re-Enter Password : </label>
                    <input type="password" id="rpswd" class="form-control" placeholder="Password..." autocomplete="off">        
                </div>
                <div class="col-sm">
                    <label>Enter Age : </label>
                    <input type="number" id="age" class="form-control" placeholder="Age..." autocomplete="off">        
                </div>
            </div>
            
            <div class="form-group row justify-content-center">
                <div class="col-sm">
                    <label>Enter Birth Date : </label>
                    <input type="date" id="bdt" class="form-control">        
                </div>
                <div class="col-sm">
                    <label>Enter City : </label>
                    <input type="text" id="ct" class="form-control" placeholder="City..." autocomplete="off">        
                </div>
            </div>
            
            <div class="form-group row justify-content-center">
                <div class="col-sm">
                    <label>Enter State : </label>
                    <input type="text" id="st" class="form-control" placeholder="State..." autocomplete="off">        
                </div>
                <div class="col-sm">
                    <label>Enter Country : </label>
                    <input type="text" id="cont" class="form-control" placeholder="Country..." autocomplete="off">        
                </div>
            </div>
            
            <div class="form-group justify-content-center">
                <div class="form-group">
                    <label>Upload Image : </label>
                    <input type="file"  id="cfile" accept="image/*"><small style="color: brown;">(Optional)</small>    
                </div>
                <div class="form-group">
                    <label for="comment">Comment : </label> &nbsp; <small style="color: brown;">(Optional)</small>
                    <textarea class="form-control" rows="5" placeholder="Comment..." id="comment"  autocomplete="off"></textarea>      
                </div>
            </div>
            <div class="form-group justify-content-center">
                <div class="form-group">
                    <input type="submit" value="Submit">    
                    <label>Have an Account?<a href="index.html">&nbsp;LogIn</a></label>
                </div>
            </div>

        </form>

    </div>
</body>
</html>