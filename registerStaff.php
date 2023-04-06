<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New staff Details</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/staff.css">
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
                <h4 class="text-white text-center text-uppercase"><b>register new staff</b></h4>
                <hr>
                <form action="newStaff.php" method="post">
                    <label for="" class="text-white text-uppercase"><b>surname</b></label>
                    <input required placeholder="* Your Surname" class="form-control text-uppercase" type="text" name="surname" id="" style="color: black;">
                    <label for="" class="text-white text-uppercase"><b>first name</b></label>
                    <input required placeholder="* Your First Name" class="form-control text-uppercase" type="text" name="fname" id="" style="color: black;">
                    <label for="" class="text-white text-uppercase"><b>last name</b></label>
                    <input required placeholder="* Your Last Name" class="form-control text-uppercase" type="text" name="lname" id="" style="color: black;">
                    <label for="" class="text-white text-uppercase"><b>job title</b></label>
                    <input required placeholder="* Your Job Title" class="form-control" type="text" name="jtitle" id="" style="color: black;">
                    
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

                    <!-- <label for="" class="text-white text-uppercase"><b>Join date</b></label>
                    <input required readonly class="form-control text-uppercase" type="datetime-local" name="jDate" id="" style="color: black;"> -->

                    <!-- Currency -->
                    <label for="" class="text-white text-uppercase"><b>Basic Salary</b></label>
                    <input type="number" id="price_per_year" class="form-control" name="bs" maxlength="12" required="required" step="0.01" placeholder="0.00 KSH" style="color: black;" />

                    <script>
                        $('input#save-button').on(
                            'click',
                            function(event) {

                                if (document.querySelector('#add-edit-form').checkValidity()) {
                                    //console.log($('#price_per_year').val());

                                    var price_to_2_decimals =
                                        parseFloat($('#price_per_year').val()).toFixed(2);

                                    //console.log(price_to_2_decimals);
                                    $('#price_per_year').val(price_to_2_decimals);

                                } // if( document.querySelector('#add-edit-form').checkValidity() ) 
                            } // function() {....
                        );
                    </script>
                    <!-- End of currency -->

                    <br>
                    <div class="buttons">
                        <button class="btn btn-outline-dark" type="submit"><b class="text-white">ADD NEW STAFF</b></button>
                        &nbsp;&nbsp;
                        <a href="searchStaffU.php" class="btn btn-outline-info"><b style="color: white;">UPDATE STAFF DETAILS</b></a>
                        &nbsp;&nbsp;
                        <a href="searchStaffD.php" class="btn btn-outline-danger"><b style="color: white;">DELETE STAFF DETAILS</b></a>
                        &nbsp;&nbsp;
                        <a href="staffReports.php" class="btn btn-outline-warning"><b style="color: white;">STAFF REPORTS</b></a>
                    </div>
                    <br>
                    <a href="logoutConfirm.php" class="buttons btn btn-outline-warning text-white"><b>GO BACK AS ADMINISTRATOR</b></a>
                    <br>
                    <a href="logoutConfirm.php" class="buttons btn btn-outline-dark text-white"><b>GO BACK AS MANAGEMENT</b></a>
            </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
    </div>
</body>

</html>