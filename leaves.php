<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaves - Select Staff ID</title>
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

        .bg {
            /* Full height */

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="bg" style="background-image: url(img/leave.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <br>
                <h2 class="text-center text-uppercase text-light" style="background-color: black;"><b>Request For Leave Here</b></h2>
                <hr>
                <form action="displayLeave.php" method="post">
                <h5 class="text-white text-center">Search Staff ID to request for Leave</h5>
                <hr>
                <select name="staffId" class="form-control" required id="" style="color: black;">
                    <?php
                    require_once("dbhr.php");
                    $sql = "select staff_id from staff_details";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            ?>
                    <option value="<?php echo $row['staff_id'];?>"><?php echo $row['staff_id'];?></option>
                            <?php
                        }
                    }
                    mysqli_close($conn);
                    ?>
                </select>
                <br>
                <div class="buttons">
                    <button type="submit" class="btn btn-outline-success"><b class="text-uppercase text-white">Search</b></button>
                </div>
                <br>
                <details>
                        <summary><b style="color: red;">Having Trouble ? &nbsp;<b class="text-info">Tap Here</b></b></summary>                        
                        <p style="color: red; background-color: danger;"><b><br>Incase you Forgot Your Staff Number, kindly Seek help From The Management, Administrator Or Receptionist. Thank You.</b>
                        <b class="buttons" style="color: red;">0R</b>
                        <a href="logout.php" class="buttons btn btn-outline-danger" style="color: white;"><b>GO TO LOG IN PAGE</b></a>
                        <br>
                    </p>
                    </details>         
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>