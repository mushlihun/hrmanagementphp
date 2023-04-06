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
            <title>UPDATE STAFF DETAILS</title>
            <link rel="icon" href="img/logo.png">
            <link rel="stylesheet" href="bs/css/bootstrap.css">
            <link rel="stylesheet" href="css/staff.css">
            <script src="bs/js/jquery.js"></script>
            <script src="bs/js/popper.min.js"></script>
            <script src="bs/js/bootstrap.js"></script>
        </head>

        <body>
            <div class="container">
                <br>
                <h2 class="text-center text-uppercase text-light"><b>Update Staff Details</b></h2>
                <hr>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="updateStaff.php" method="post">
                            <label for="" class="text-white text-uppercase"><b>Staff ID</b></label>
                            <input value="<?php echo $row['staff_id']; ?>" type="number" style="color: black;" name="staffId" class="form-control" required readonly id="" >
                            <label for="" class="text-white text-uppercase"><b>surname</b></label>
                            <input value="<?php echo $row['surname']; ?>" type="text" style="color: black;" name="sname" class="form-control" required id="">
                            <label for=""><b class="text-light">First Name</b></label>
                            <input value="<?php echo $row['first_name']; ?>" type="text" style="color: black;" name="fname" class="form-control" required id="">
                            <label for=""><b class="text-light">Last Name</b></label>
                            <input value="<?php echo $row['last_name']; ?>" type="text" style="color: black;" name="lname" class="form-control" required id="">

                            <label for="" class="text-white text-uppercase"><b>job title</b></label>
                            <input value="<?php echo $row['job_title']; ?>" type="text" style="color: black;" name="jTitle" class="form-control" required id="">
                            <label for="" class="text-white text-uppercase"><b>department</b></label>
                            <input value="<?php echo $row['department']; ?>" type="text" style="color: black;" name="dept" class="form-control" required id="">

                            <label for="" class="text-white text-uppercase"><b>Join date</b></label>
                            <input value="<?php echo $row['join_date']; ?>" type="datetime-local" style="color: black;" name="jDate" class="form-control" required id="" style="color: black;" readonly>

                            <!-- Currency -->
                            <label for="" class="text-white text-uppercase"><b>Basic Salary</b></label>
                            <input value="<?php echo $row['basic_salary']; ?>" type="number" name="bs" class="form-control" required id="" style="color: black;" maxlength="12" style="color: black;">

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
                                <button class="btn btn-outline-success" type="submit"><b class="text-white">UPDATE STAFF</b></button>
                                &nbsp;&nbsp;
                                <a href="registerStaff.php" class="btn btn-outline-info"><b style="color: white;">CANCEL UPDATE</b></a>                                
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