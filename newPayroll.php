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
                <br><br><br>
                <form action="#">
                    <h3 class="text-center text-uppercase text-white">Results : </h3>
                    <hr>
                    <?php
                    require_once("dbhr.php");

                    $staffId = mysqli_real_escape_string($conn, $_POST['staffId']);
                    $sname = mysqli_real_escape_string($conn, $_POST['surname']);
                    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
                    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
                    $dept = mysqli_real_escape_string($conn, $_POST['dept']);
                    $bs = mysqli_real_escape_string($conn, $_POST['bs']);

                    $sql = "insert into payroll(staff_id,surname,first_name,last_name,department,basic_salary)
                        values('$staffId','$sname','$fname','$lname','$dept','$bs')";

                    if ($conn->query($sql) == true) {
                        print "<p class = 'text-white text-center'>Payroll details added successfully</p>";
                        print "<a href = 'confirmPayroll.php' class = 'buttons btn btn-outline-primary justify-content-center text-center text-white'><b>Add New</b></a>";
                    } else {
                        print "<p class = 'text-white text-center'>Payroll details not added</p>";
                        print "<a href = 'payroll.php' class = 'buttons btn btn-outline-danger'><b>Try Again</b></a>";
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