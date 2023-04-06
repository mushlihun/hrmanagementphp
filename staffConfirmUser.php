<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Login - HRMIS DB</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/staff.css">
    <script src="bs/js/jquery.js"></script>
    <script src="bs/js/popper.min.js"></script>
    <script src="bs/js/bootstrap.js"></script>
    <style>
        body {
            justify-content: center;
            align-items: center;
            display: flex;
            height: 100vh;
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <br>
                <h3 class="text-center text-uppercase text-white"><b>Let us confirm that its you</b></h3>
                <hr>
                <form action="loginGroup.php" method="post">

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
                        <option value="Systems Administrator" class="bg-warning"><b style="color: black;">Systems Administrator</b></option>
                        <option value="Administration" class="bg-warning"><b style="color: black;">Administration</b></option>
                        <option value="Accounts" class="bg-warning"><b style="color: black;">Accounts</b></option>
                        <option value="Receptionist" class="bg-warning"><b style="color: black;">Receptionist</b></option>
                        <option value="Management" class="bg-warning"><b style="color: black;">Management</b></option>
                    </select>
                    <br>
                    <button class="buttons btn btn-success text-uppercase" type="submit">
                        <h3 style="color: black;">LOGIN</h3>
                    </button>
                    <br>
                    <details style="color: white;">
                        <summary>Having Trouble ?</summary>                        
                        <p style="color: red; background-color: white;"><b><br>You have been logged out completely : Please log in again to the dashboard. Read the users manual for more details .</b>
                        <b class="buttons text-danger">0R</b>
                        <a href="index.php" class="buttons btn btn-outline-danger" style="color: black;"><b>GO TO LOG IN PAGE</b></a>
                        <br>
                    </p>
                    </details>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>