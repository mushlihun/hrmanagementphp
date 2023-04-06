<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEAVE Reports</title>
    <!-- links and scripts -->
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/table.css">
    <script src="bs/js/jquery.js"></script>
    <script src="bs/js/popper.min.js"></script>
    <script src="bs/js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <br>
        <table class="table table-bordered table-striped table-responsive-sm">
            <div class="row">
                <div class="col-sm-12">
                    <br>
                    <tr>
                    <a href="management_dashboard.php" class="btn btn-success btn-submit"><b>&laquo; BACK</b></a>
                    <th class="topHeading text-uppercase" colspan="9">
                       Approved leaves Reports
                    </th>
                    </tr>
                    <tr>
                        <th>LEAVE ID</th>
                        <th>STAFF ID</th>
                        <th>SURNAME</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>DEPARTMENT</th>
                        <th>LEAVE TYPE</th>
                        <th>PURPOSE</th>
                        <th>STATUS</th>
                    </tr>

                    <tr>
                        <?php
                        require_once('dbhr.php');
                        $srpt = "select * from approvals order by leave_id asc";
                        $rslt = $conn->query($srpt);
                        if ($rslt->num_rows > 0) {
                            while ($row = $rslt->fetch_assoc()) {
                        ?>
                    <tr>
                        <td><?php echo $row['leave_id']; ?></td>
                        <td><?php echo $row['staff_id']; ?></td>
                        <td><?php echo $row['surname']; ?></td>
                        <td><?php echo $row['first_name']; ?></td>
                        <td><?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td><?php echo $row['leave_type']; ?></td>
                        <td><?php echo $row['purpose']; ?></td>
                        <td><b><?php echo $row['status']; ?></b></td>
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
</body>

</html>