<?php
require_once("dbhr.php");
$User_Id = mysqli_real_escape_string($conn, $_POST['userId']);
$sql = "select * from users where user_id = '$User_Id'";
// (*) means all
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
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

        <body class="bg" style="background-image: url(img/leave2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <br>
                        <h2 class="text-center text-uppercase" style="background-color: white; color: black;"><b>REQUEST LEAVE - USER PORTAL</b></h2>
                        <hr>
                        <form action="newLeaveUser.php" method="post">
                            <label for=""><b class="text-light">User ID</b></label>
                            <input value="<?php echo $row['user_id']; ?>" type="number" name="userId" class="form-control" required readonly id="">
                            <label for=""><b class="text-light">Surname</b></label>
                            <input value="<?php echo $row['surname']; ?>" type="text" name="surname" class="form-control" required readonly id="">
                            <label for=""><b class="text-light">First Name</b></label>
                            <input value="<?php echo $row['first_name']; ?>" type="text" name="fname" class="form-control" required readonly id="">
                            <label for=""><b class="text-light">Last Name</b></label>
                            <input value="<?php echo $row['last_name']; ?>" type="text" name="lname" class="form-control" required readonly id="">
                            <label for=""><b class="text-light">Department</b></label>
                            <input value="<?php echo $row['department']; ?>" type="text" name="dept" class="form-control" required readonly id="">
                           
                            
                            <label for="" class="text-white text-uppercase"><b>leave type</b></label>
                            <select name="lType" id="" style="color:black;" class="form-control" required>
                                <option value="Sick leave" class="bg-info"><b style="color: black;">Sick leave</b></option>
                                <option value="Casual leave" class="bg-info"><b style="color: black;">Casual leave</b></option>
                                <option value="Religious holidays" class="bg-info"><b style="color: black;">Religious holidays</b></option>
                                <option value="Maternity leave" class="bg-info"><b style="color: black;">Maternity leave</b></option>
                                <option value="Paternity leave" class="bg-info"><b style="color: black;">Paternity leave</b></option>
                                <option value="Bereavement leave" class="bg-info"><b style="color: black;">Bereavement leave</b></option>
                                <option value="Compensatory leave" class="bg-info"><b style="color: black;">Compensatory leave</b></option>
                                <option value="Sabbatical leave" class="bg-info"><b style="color: black;">Sabbatical leave</b></option>
                                <option value="Unpaid Leave" class="bg-info"><b style="color: black;">Unpaid Leave</b></option>
                            </select>

                            <label for="" class="text-white text-uppercase"><b>Purpose</b></label>
                            <textarea name="pps" id="" cols="20" rows="5" placeholder="* Put your reason here" style="color: black;" class="form-control"></textarea>

                            <br>
                            <div class="buttons">
                                <button class="btn btn-outline-success" type="submit"><b class="text-white">REQUEST LEAVE</b></button>
                                &nbsp;&nbsp;
                                <a href="leaveUserRequest.php" class="btn btn-outline-info"><b style="color: white;">CANCEL LEAVE</b></a>   
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