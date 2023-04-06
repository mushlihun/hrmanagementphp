<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Staff ID</title>
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
<body style="background-image: url(img/app2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="displayApproveLeave.php" method="post">
                <h5 class="text-white text-center">Search Leave ID From Reports</h5>
                <hr>
                <select name="lId" class="form-control" required id="">
                    <?php
                    require_once("dbhr.php");
                    $sql = "select leave_id from leaves";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            ?>
                    <option value="<?php echo $row['leave_id'];?>"><?php echo $row['leave_id'];?></option>
                            <?php
                        }
                    }
                    mysqli_close($conn);
                    ?>
                </select>
                <hr>
                <div class="buttons">
                    <button type="submit" class="btn btn-outline-success"><b class="text-uppercase text-light">Search</b></button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="management_dashboard.php" class="btn btn-outline-info"><b class="text-light">Go back</b></a>
                </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>