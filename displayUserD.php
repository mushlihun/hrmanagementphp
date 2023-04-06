
<?php
require_once("dbhr.php");
$User_Id = mysqli_real_escape_string($conn,$_POST['userId']);
$sql = "select * from users where user_id = '$User_Id'";
// (*) means all
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE USER</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/sty.css">
    <script src="bs/js/jquery.js"></script>
    <script src="bs/js/popper.min.js"></script>
    <script src="bs/js/bootstrap.js"></script>   
</head>
<body>
    <div class="container">
        <br>
        <h2 class="text-center text-uppercase" ><b>Courses</b></h2>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="deleteUser.php" method="post">
                    <label for=""><b class="text-light">User ID</b></label>
                    <input value="<?php echo $row['user_id'];?>" type="number" name="userId" class="form-control" required readonly id="">
                    <label for=""><b class="text-light">Surname</b></label>
                    <input value="<?php echo $row['surname'];?>" type="text" name="sname" class="form-control" required readonly id="">
                    <label for=""><b class="text-light">First Name</b></label>
                    <input value="<?php echo $row['first_name'];?>" type="text" name="fname" class="form-control" required readonly id="">
                    <label for=""><b class="text-light">Last Name</b></label>
                    <input value="<?php echo $row['last_name'];?>" type="text" name="lname" class="form-control" required readonly id="">
                    <label for=""><b class="text-light">Department</b></label>
                    <input value="<?php echo $row['department'];?>" type="text" name="dept" class="form-control" required readonly id="">
                    <label for=""><b class="text-light">Username</b></label>
                    <input value="<?php echo $row['username'];?>" type="text" name="sname" class="form-control" required readonly id="">
                    <label for=""><b class="text-light">Password</b></label>
                    <input value="<?php echo $row['[password]'];?>" type="text" name="pass" class="form-control" required readonly id="">
                    <hr>
                    <div class="buttons">
                        <button class="btn btn-outline-danger" type="submit"><b class="text-light"> DELETE</b></button>
                        &nbsp;&nbsp;&nbsp;
                        <a href="adminUser.php" class="btn btn-outline-secondary"><b class="text-light">CANCEL DELETE</b></a>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>
        <?php
    }
}
mysqli_close($conn);
?>
