<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/sty.css">
    <script src="bs/js/jquery.js"></script>
    <script src="bs/js/popper.min.js"></script>
    <script src="bs/js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <br><br><br><br><br>
                <form action="#">
                    <h3 class="text-center text-uppercase text-white">Results : </h3>
                    <hr>
                    <?php
                    require_once("dbhr.php");
                    $sname = mysqli_real_escape_string($conn, $_POST['surname']);
                    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
                    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
                    $dept = mysqli_real_escape_string($conn, $_POST['dept']);
                    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
                    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

                    $sql = "insert into users(surname,first_name,last_name,department,username,password)
                        values('$sname','$fname','$lname','$dept','$uname','$pass')";

                    if ($conn->query($sql) == true) {
                        print "<p class = 'text-white text-center'>New user added successfully</p>";
                        print "<a href = 'index.php' class = 'buttons btn btn-outline-primary justify-content-center text-center text-white'><b>Login</b></a>";
                    } else {
                        print "<p class = 'text-white text-center'>User not added</p>";
                        print "<a href = 'register_user.php' class = 'buttons btn btn-outline-danger'>Try Again</a>";
                    }
                    mysqli_close($conn);
                    ?>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>