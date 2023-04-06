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
                    $jt = mysqli_real_escape_string($conn, $_POST['jtitle']);
                    $dept = mysqli_real_escape_string($conn, $_POST['dept']);
                    $bs = mysqli_real_escape_string($conn, $_POST['bs']);

                    $sql = "insert into staff_details(surname,first_name,last_name,job_title,department,basic_salary)
                        values('$sname','$fname','$lname','$jt','$dept','$bs')";

                    if ($conn->query($sql) == true) {
                        print "<p class = 'text-white text-center'>New Staff added successfully</p>";
                        print "<a href = 'registerStaff.php' class = 'buttons btn btn-outline-primary justify-content-center text-center text-white'><b>Add New Staff</b></a> <br> ";                        
                        print "<a href = 'register.php' class = 'buttons justify-content-center text-center text-white'><b>or</b></a> <br>";                        
                        print "<a href = 'index.php' class = 'buttons btn btn-outline-primary justify-content-center text-center text-white'><b>Go to Log in Page</b></a>";
                    } else {
                        print "<p class = 'text-white text-center'>Staff not added</p>";
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