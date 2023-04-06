<?php
require_once("dbhr.php");
$staffId = mysqli_real_escape_string($conn, $_POST['staffId']);
$sql = "select * from staff_details where staff_id = '$staffId'";
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
            <title>Request Leaves</title>
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
                <h2 class="text-center text-uppercase"><b>Request Leaves</b></h2>
                <hr>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="newLeaves.php" method="post">
                            <label for=""><b class="text-light">Staff ID</b></label>
                            <input value="<?php echo $row['staff_id']; ?>" type="number" name="staffId" class="form-control" required readonly id="">
                            <label for=""><b class="text-light">Surname</b></label>
                            <input value="<?php echo $row['surname']; ?>" type="text" name="sname" class="form-control" required id="">
                            <label for=""><b class="text-light">First Name</b></label>
                            <input value="<?php echo $row['first_name']; ?>" type="text" name="fname" class="form-control" required id="">
                            <label for=""><b class="text-light">Last Name</b></label>
                            <input value="<?php echo $row['last_name']; ?>" type="text" name="lname" class="form-control" required id="">

                            <label for=""><b class="text-light">Leave Type</b></label>
                            <select name="dept" id="" style="color:black;" class="form-control" required>
                                <option value="Sick leave" class="bg-warning"><b style="color: black;">Sick leave</b></option>
                                <option value="Maternity leave" class="bg-warning"><b style="color: black;">Maternity leave</b></option>
                                <option value="Casual leave" class="bg-warning"><b style="color: black;">Casual leave</b></option>
                                <option value="Bereavement leave" class="bg-warning"><b style="color: black;">Bereavement leave</b></option>
                                <option value="Compensatory leave" class="bg-warning"><b style="color: black;">Compensatory leave</b></option>
                                <option value="Religious holidays" class="bg-warning"><b style="color: black;">Religious holidays</b></option>
                                <option value="Paternity leave" class="bg-warning"><b style="color: black;">Paternity leave</b></option>
                            </select>

                            <p class="text-danger">Option Not There? Kindly Consult The Manageme</p>

                            <label for=""><b class="text-light">Purpose</b></label>
                            <textarea id="" name="pps" rows="5" cols="33"></textarea> 
                            
                            <hr>
                            <div class="buttons">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                &nbsp;
                                <a href="loginGroup.php" class="btn btn-secondary">Back to Dashboard</a>
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