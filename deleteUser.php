<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Results </title>
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
            <h2 class="text-center text-uppercase">Results :</h2>
        <hr>
        <?php
            require_once("dbhr.php");

            $userId = mysqli_real_escape_string($conn,$_POST['userId']);
            
            $sql = "delete from users where user_id = '$userId'";
            // Executing the query string above
            if($conn->query($sql) == true){
                print "<p class='text-center text-light'>Record Deleted successfully</p>";
                print "<a href='adminUser.php' class='buttons btn btn-success'>Delete another User</a>";
            }
            else{
                print "<p class='text-center text-danger'>Record not Deleted</p>";
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