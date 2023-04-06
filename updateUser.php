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
                <form action="#">
                    <h2 class="text-center text-uppercase text-light">Results : </h2>
                    <hr>
                    <?php
                    require_once("dbhr.php");
                    // Removing SQL Injections to secure the form data as it's being updated to courses table in the database
                    $userId = mysqli_real_escape_string($conn, $_POST['userId']);
                    $uname = mysqli_real_escape_string($conn, $_POST['sname']);
                    $firstName = mysqli_real_escape_string($conn, $_POST['fname']);
                    $lastName = mysqli_real_escape_string($conn, $_POST['lname']);
                    $dept = mysqli_real_escape_string($conn, $_POST['dept']);
                    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
                    // Create a query string for updating the data in the database table courses
                    $sql = "update users set username = '$uname',first_name = '$firstName',last_name = '$lastName',department = '$dept',password = '$pass'
                    where user_id = '$userId'";
                    // Executing the query string above
                    if ($conn->query($sql) == true) {
                        print "<p class='text-center text-light'>Record updated successfully</p>";
                        print "<a href='adminUser.php' class='buttons btn btn-success'>Update another User</a>";
                    } else {
                        print "<p class='text-center text-danger'>Record not updated</p>";
                        print "<a href='adminUser.php' class='buttons btn btn-danger'>Try Again</a>";
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