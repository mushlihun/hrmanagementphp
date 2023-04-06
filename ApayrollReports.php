<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Reports</title>
    <!-- links and scripts -->
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/table1.css">
    <script src="bs/js/jquery.js"></script>
    <script src="bs/js/popper.min.js"></script>
    <script src="bs/js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-striped table-responsive-sm">
                <div class="row">
                    <div class="col-sm-12">
                        <br>
                    <a href="allreports.php" class="btn btn-success btn-submit"><b>&laquo; BACK</b></a>
                        <tr>
                            <th class="topHeading text-uppercase text-center" colspan="15">
                                PAYROLL REPORTS
                            </th>
                        </tr>
                        <tr>
                            <th class="text-uppercase">STAFF ID</th>
                            <th class="text-uppercase">surname</th>
                            <th class="text-uppercase">first name</th>
                            <th class="text-uppercase">last name</th>
                            <th class="text-uppercase">department</th>
                            <th class="text-uppercase">payment date</th>
                            <th class="text-uppercase">basic salary</th>
                            <th class="text-uppercase">house allowance</th>
                            <th class="text-uppercase">transport allowance</th>
                            <th class="text-uppercase">medical allowance</th>
                            <th class="text-uppercase">gross pay</th>
                            <th class="text-uppercase">payee</th>
                            <th class="text-uppercase">nssf</th>
                            <th class="text-uppercase">NHIF</th>
                            <th class="text-uppercase">NET PAY</th>
                        </tr>

                        <tr>
                            <?php
                            require_once('dbhr.php');
                            $srpt = "select * from payroll order by staff_id asc";
                            $rslt = $conn->query($srpt);
                            if ($rslt->num_rows > 0) {
                                while ($row = $rslt->fetch_assoc()) {
                            ?>
                        <tr>
                            <td><?php echo $row['staff_id']; ?></td>
                            <td><?php echo $row['surname']; ?></td>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['department']; ?></td>
                            <td><?php echo $row['payment_date']; ?></td>
                            <td><?php echo $row['basic_salary']; ?></td>
                            <td><?php echo $row['house_allowance']; ?></td>
                            <td><?php echo $row['transport_allowance']; ?></td>
                            <td><?php echo $row['medical_allowance']; ?></td>
                            <td><?php echo $row['gross_pay']; ?></td>
                            <td><?php echo $row['payee']; ?></td>
                            <td><?php echo $row['nssf']; ?></td>
                            <td><?php echo $row['nhif']; ?></td>
                            <td><?php echo $row['net_pay']; ?></td>
                        </tr>
                    </div>
                </div>
        <?php
                                }
                            }
                            mysqli_close($conn);
        ?>
        </tr>
            </table>
        </div>
    </div>
</body>

</html>