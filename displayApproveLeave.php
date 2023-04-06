<?php
require_once("dbhr.php");
$lId = mysqli_real_escape_string($conn, $_POST['lId']);
$sql = "select * from leaves where leave_id = '$lId'";
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
            <title>Approve Leaves -HRMIS DB</title>
            <link rel="icon" href="img/logo.png">
            <link rel="stylesheet" href="bs/css/bootstrap.css">
            <link rel="stylesheet" href="css/sty.css">
            <script src="bs/js/jquery.js"></script>
            <script src="bs/js/popper.min.js"></script>
            <script src="bs/js/bootstrap.js"></script>
            <style>
                .bg {
                    /* The image used */
                    background-image: url("img_girl.jpg");

                    /* Full height */
                    height: 100%;

                    /* Center and scale the image nicely */
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
            </style>
        </head>

        <body class="bg" style="background-image: url(img/app1.jpg);">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h2 class="text-center text-uppercase" style="background-color: white; color: black;"><b>APPROVE LEAVE HERE</b></h2>
                        <hr>
                        <form action="postApproveLeave.php" method="post">
                            <label for=""><b class="text-light">Leave ID</b></label>
                            <input value="<?php echo $row['leave_id']; ?>" type="number" name="lId" class="form-control text-danger" required readonly id="">
                            <label for=""><b class="text-light">Staff Number</b></label>
                            <input value="<?php echo $row['staff_id']; ?>" type="number" name="staffId" class="form-control text-danger" required readonly id="">
                            <label for=""><b class="text-light">Surname</b></label>
                            <input value="<?php echo $row['surname']; ?>" type="text" name="sname" class="form-control text-danger" required readonly id="">
                            <label for=""><b class="text-light">First Name</b></label>
                            <input value="<?php echo $row['first_name']; ?>" type="text" name="fname" class="form-control text-danger" required readonly id="">
                            <label for=""><b class="text-light">Last Name</b></label>
                            <input value="<?php echo $row['last_name']; ?>" type="text" name="lname" class="form-control text-danger" required readonly id="">

                            <label for=""><b class="text-light">Department</b></label>
                            <input value="<?php echo $row['department']; ?>" type="text" style="color: black;" name="dept" class="form-control" required readonly id="">

                            <label for=""><b class="text-light">Leave Type</b></label>
                            <input value="<?php echo $row['leave_type']; ?>" type="text" name="lType" class="form-control text-danger" required readonly id="">

                            <label for=""><b class="text-light">Purpose</b></label>
                            <input value="<?php echo $row['purpose']; ?>" type="text" name="pps" class="form-control text-danger" required readonly id="">

                            <label for=""><b class="text-light">Status</b></label>
                            <select name="status" id="" style="color:black;" class="form-control" required>
                                <option value="" style="background-color: black; color: red;"><b>------</b></option>
                                <option value="Accepted" style="background-color: black; color: white;"><b>ACCEPT</b></option>
                                <option value="Declined" style="background-color: black; color: white;"><b>DECLINE</b></option>
                            </select>
                            <hr>
                            <div class="buttons">
                                <button class="btn btn-outline-primary" type="submit" style="color: white;"><b>Confirm</b></button>
                                &nbsp;&nbsp;
                                <a href="management_dashboard.php" class="btn btn-outline-secondary" style="color: white;"><b>&laquo; Cancel &raquo;</b></a>
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