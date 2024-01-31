<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Register User</h2>
        <form action="" method="post" id="form1">
            <div class="form-group">
                <label for="fname">Firstname:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter Firstname" name="fname">
            </div>
            <div class="form-group">
                <label for="lname">Lastname:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter Lastname" name="lname">
            </div>
            <div class="form-group">
                <label for="uname">Username:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter Username" name="uname">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
            <div class="form-group">
                <label for="cnfpwd">Confirm Password:</label>
                <input type="password" class="form-control" id="cnfpwd" placeholder="Enter Confirm Password" name="cnfpwd">
            </div>
            <div class="form-group">
                <label for="mobnum">Mobile Number:</label>
                <input type="tel" class="form-control" id="mobno" placeholder="Enter Mobile number"
                    name="mobno">
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <select name="country" class="countries form-control" id="country">
                    <option value="">Select Country</option>
                </select>
            </div>
            <div class="form-group">
                <label for="state">State:</label>
                <select name="state" class="states form-control" id="state">
                    <option value="">Select State</option>
                </select>
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <select name="city" class="cities form-control" id="city">
                    <option value="">Select City</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <input class="form-check-input" type="radio" name="gender" id="male">
                <label class="form-check-label" for="male">
                    Male
                </label>
                <input class="form-check-input" type="radio" name="gender" id="female">
                <label class="form-check-label" for="female">
                    Female
                </label>
                <input class="form-check-input" type="radio" name="gender" id="other">
                <label class="form-check-label" for="other">
                    Other
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script>
    $(document).ready(function(){
        $("#form1").submit(function(e){
        e.preventDefault();
        // console.log("hello");
        $("#form1").validate({
            rules:{
                fname:{
                    required:true,
                },
                lname:{
                    required:true,
                },
                uname:{
                    required:true,
                    minlength:5,
                    maxlength:8,
                },
                email:{
                    required:true,
                    email:true,
                },
                pwd:{
                    required:true,
                    minlength:5,
                    maxlength:8,
                },
                cnfpwd:{
                    required:true,
                    minlength:5,
                    maxlength:8,
                    equalTo: "#pwd";
                },
                mobno:{
                    required:true,
                    minlength:10,
                    maxlength:10,
                },
                country:{
                    required:true,
                },
                state:{
                    required:true,
                },
                city:{
                    required:true,
                },
                gender:{
                    required:true,
                }
            },
            messages:{
                fname:"Firstname is required",
                lname:"Lastname is required",
                uname:{
                    required:"Username is required",
                    minlength:"Username must be atleast 5 characters long",
                    maxlength:"Username must be less than or equal to 8 characters",
                },
                email:{
                    required:"Email is required",
                    email:"Please enter a valid email address"
                }
                pwd:{
                    required:"Password is required",
                    minlength:"Password must be atleast 5 characters long",
                    maxlength:"Password must be less than or equal to 8 characters",
                },
                pwd:{
                    required:"Password is required",
                    minlength:"Password must be atleast 5 characters",
                    maxlength:"Password must be less than or equal to 8 characters",
                },
            }
        });
    });
    });
</script>
</html>
