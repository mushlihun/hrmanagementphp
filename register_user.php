<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New staff Details</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/sty.css">
    <script src="bs/js/jquery.js"></script>
    <script src="bs/js/popper.min.js"></script>
    <script src="bs/js/bootstrap.js"></script>
</head>

<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h4 class="text-white text-center text-uppercase"><b>register new user</b></h4>
                <hr>
                <form action="new_user.php" method="post">
                    <label for="" class="text-white text-uppercase"><b>surname</b></label>
                    <input required placeholder="* Your Surname" class="form-control text-uppercase" type="text" name="surname" id="" style="color: black;">
                    <label for="" class="text-white text-uppercase"><b>first name</b></label>
                    <input required placeholder="* Your First Name" class="form-control text-uppercase" type="text" name="fname" id="" style="color: black;">
                    <label for="" class="text-white text-uppercase"><b>last name</b></label>
                    <input required placeholder="* Your Last Name" class="form-control text-uppercase" type="text" name="lname" id="" style="color: black;">
                    <label for="" class="text-white text-uppercase"><b>department</b></label>
                    <select name="dept" id="" style="color:black;" class="form-control" required>
                        <option value="Systems Administrator"><b style="color: black;">Systems Administrator</b></option>
                        <option value="Administration"><b style="color: black;">Administration</b></option>
                        <option value="Accounts"><b style="color: black;">Accounts</b></option>
                        <option value="Receptionist"><b style="color: black;">Receptionist</b></option>
                        <option value="Management"><b style="color: black;">Management</b></option>
                    </select>
                    <label for="" class="text-white text-uppercase"><b>username</b></label>
                    <input required placeholder="* Your username" class="form-control" type="text" name="uname" id="" style="color: black;">
                    <!-- password -->
                    <label for="" class="text-white text-uppercase"><b>Password</b></label>
                    <input required placeholder="* Enter New Password" class="form-control" type="password" name="pass" id="myInput" style="color: black;">
                    &nbsp;&nbsp;
                    <input type="checkbox" onclick="myFunction()">&nbsp;&nbsp;&nbsp;<b class="text-info">Show Password</b>
                    <!-- js pass -->
                    <script>
                        function myFunction() {
                            var x = document.getElementById("myInput");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>
                    <!-- End Of Pass -->
                    <br>
                    <div class="buttons">
                        <button class="btn btn-outline-light" type="submit"><b class="text-white">Add Staff</b></button>
                    </div>

                    <div class="buttons">
                        <p class="text-success">Have an account here?</p>&nbsp;
                        <a href="index.php">
                            <p class="text-info">Log in here</p>
                        </a>
                    </div>

                    <div class="buttons">
                        <p class="text-warning">Forgot account Details?</p>&nbsp;
                        <a href="forgotPassForm.php">
                            <p class="text-info">Forgot password</p>
                        </a>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>