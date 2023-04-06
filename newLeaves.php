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
    <style>
        body{            
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
                
                <form action="">
                    <h2 class="text-center text-uppercase text-light">RESULTS : </h2>
                    <hr>

                    <?php
                    require_once("dbhr.php");

                    $staffId = mysqli_real_escape_string($conn, $_POST['staffId']);
                    $sname = mysqli_real_escape_string($conn, $_POST['sname']);
                    $fName = mysqli_real_escape_string($conn, $_POST['fname']);
                    $lName = mysqli_real_escape_string($conn, $_POST['lname']);
                    $dept = mysqli_real_escape_string($conn, $_POST['dept']);
                    $ltype = mysqli_real_escape_string($conn, $_POST['lType']);
                    $pps = mysqli_real_escape_string($conn, $_POST['pps']);
                    

                   $sql = "insert into leaves(staff_id,surname,first_name,last_name,department,leave_type,purpose)
                        values('$staffId','$sname','$fName','$lName','$dept','$ltype','$pps')";
                    // Executing the query string above
                    if ($conn->query($sql) == true) {
                        print "<h3 class='text-center text-success'>Request done successfully</h3>";
                        print "<p class='text-center text-light'>Status &nbsp; : &nbsp; pending</p>";
                        print "<a href='logout.php' class='buttons btn btn-success'>Exit to Log In</a>";
                    } else {
                        print "<p class='text-center text-danger'>Request not done</p>";
                        print "<a href='leaves.php' class='buttons btn btn-danger'>Try Again</a>";
                    }
                    // Closing the database connection
                    mysqli_close($conn);
                    ?>

                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>