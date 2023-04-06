<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HRMIS DB</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="bs/js/jquery.js"></script>
    <script src="bs/js/popper.min.js"></script>
    <script src="bs/js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <br><br>
        <h1 class="text-center" style="color: yellow;"><b>Human Resource Management System</b></h1>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <br>
                <h3 class="text-center text-uppercase text-white"><b>Login</b></h3>
                <hr>
                <form action="loginGroup.php" method="post">

                    <!-- 1. Ensuring the user enters proper credentials as per database table users
                        2. If the user enters a wrong password, an error message will appear on top of the form. -->
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <br>

                    <label for="" class="text-white text-uppercase"><b>USERNAME</b></label>
                    <input required placeholder="* Username" class="form-control" type="text" name="username" id="" style="color: black;">
                    <label for="" class="text-white text-uppercase"><b>PASSWORD</b></label>
                    <input required placeholder="* Password" class="form-control" type="password" name="password" id="" style="color: black;">
                    <!--  -->
                    <label for="" class="text-white text-uppercase"><b>department</b></label>
                    <select name="dept" id="" style="color:black;" class="form-control" required>
                        <option value="" class="bg-warning"><b style="color: black;">---------</b></option>
                        <option value="Administration" class="bg-warning"><b style="color: black;">Administration</b></option>
                        <option value="Accounts" class="bg-warning"><b style="color: black;">Accounts</b></option>
                        <option value="Receptionist" class="bg-warning"><b style="color: black;">Receptionist</b></option>
                        <option value="Management" class="bg-warning"><b style="color: black;">Management</b></option>
                        <option value="Systems Administrator" class="bg-warning"><b style="color: black;">Systems Administrator</b></option>
                    </select>
                    <br>
                    <div class="buttons">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                    <div class="buttons">
                        <p class="text-warning">Don't have an account? &nbsp;<a href="register_user.php">Sign Up Here</a></p>
                    </div>
                    <div class="buttons">
                        <p class="text-warning">Forgot account Details?</p>&nbsp;
                        <a href="forgotPassForm.php">
                            <p class="text-info">Forgot password</p>
                        </a>
                    </div>
                    <details style="color: grey;">
                        <summary>You Want to Learn More About The Developer?</summary>
                        <br>
                        <center><b class="text-danger">Interact With Me On:</b></center>
                        <div class="buttons">
                            <a href="https://www.facebook.com/mark.korir.39108" class="fa fa-facebook"></a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="https://www.twitter.com/k_marklee" class="fa fa-twitter"></a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="https://www.instagram.com/nba.lee_" class="fa fa-instagram"></a>
                        </div>
                    </details>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>