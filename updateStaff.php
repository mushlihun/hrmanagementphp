<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/staff.css">
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
                <form action="#">
                    <h2 class="text-center text-uppercase text-light">Results : </h2>
                    <hr>
                    <?php
                    require_once("dbhr.php");                    
                    $staffId = mysqli_real_escape_string($conn, $_POST['staffId']);
                    $sname = mysqli_real_escape_string($conn, $_POST['sname']);
                    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
                    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
                    $jt = mysqli_real_escape_string($conn, $_POST['jTitle']);
                    $dept = mysqli_real_escape_string($conn, $_POST['dept']);
                    $jDate = mysqli_real_escape_string($conn, $_POST['jDate']);
                    $bs = mysqli_real_escape_string($conn, $_POST['bs']);

                    // Create a query string for updating the data in the database table 

                    $sql = "update staff_details set surname = '$sname',
                    first_name = '$fname',last_name = '$lname',job_title = '$jt',department = '$dept',
                    join_date = '$jDate',basic_salary = '$bs'

                    where staff_id = '$staffId'";

                    // Executing the query string above
                    if ($conn->query($sql) == true) {
                        print "<p class='text-center text-light'>Record updated successfully</p>";
                        print "<a href='registerStaff.php' class='buttons btn btn-outline-success text-white'><b>Update another Staff</b></a>";
                    } else {
                        print "<p class='text-center text-danger'>Record not updated</p>";
                        print "<a href='registerStaff.php' class='buttons btn btn-danger'>Try Again</a>";
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