<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New staff Details</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/sty.css">
    <script src="bs/js/jquery.js"></script>
    <script src="bs/js/popper.min.js"></script>
    <script src="bs/js/bootstrap.js"></script>
</head>

<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <center>
                    <h2 class="text-white text-uppercase"><b>input payroll details here</b></h2>
                </center>
                <br>
                <form action="newPayroll.php">
                    <label for="" class="text-white text-uppercase"><b>Staff ID</b></label>
                    <input required placeholder="* Staff ID" class="form-control text-uppercase" type="number" name="staffId" id="" style="color: black;">
                    <label for="" class="text-white text-uppercase"><b>surname</b></label>
                    <input required placeholder="* Surname" class="form-control text-uppercase" type="text" name="surname" id="" style="color: black;">
                    <label for="" class="text-white text-uppercase"><b>first name</b></label>
                    <input required placeholder="* First Name" class="form-control text-uppercase" type="text" name="fname" id="" style="color: black;">
                    <label for="" class="text-white text-uppercase"><b>last name</b></label>
                    <input required placeholder="* Last Name" class="form-control text-uppercase" type="text" name="lname" id="" style="color: black;">

                    <label for="" class="text-white text-uppercase"><b>department</b></label>
                    <select name="dept" id="" style="color:black;" class="form-control" required>
                        <option value="Systems Administrator"><b style="color: black;">Systems Administrator</b></option>
                        <option value="Administration"><b style="color: black;">Administration</b></option>
                        <option value="Accounts"><b style="color: black;">Accounts</b></option>
                        <option value="Receptionist"><b style="color: black;">Receptionist</b></option>
                        <option value="Management"><b style="color: black;">Management</b></option>
                        <option value="Cleaner"><b style="color: black;">Cleaner</b></option>
                        <option value="Security"><b style="color: black;">Security</b></option>
                        <option value="Bell Man"><b style="color: black;">Bell Man</b></option>
                        <option value="Room Keeper"><b style="color: black;">Room Keeper</b></option>
                    </select>

                    <label for="" class="text-white text-uppercase"><b>BASIC salary</b></label>
                    <input required placeholder="* Basic Salary" class="form-control text-uppercase" type="text" name="bs" id="" style="color: black;">
                    <br>
                    <div class="buttons">
                        <button class="btn btn-outline-success" type="submit"><b class="text-white">ADD PAYROLL</b></button>
                        &nbsp;&nbsp;
                        <a href="accountant_dashboard.php" class="btn btn-outline-danger text-white">CANCEL</a>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>