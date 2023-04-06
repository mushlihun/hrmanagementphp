<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Approve Leaves</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="css/sty.css">
    <link rel="stylesheet" href="css/no.css">
    <script src="bs/js/jquery.js"></script>
    <script src="bs/js/popper.min.js"></script>
    <script src="bs/js/bootstrap.js"></script>
    <style>
        .body1 {
            justify-content: center;
            align-items: center;
            display: flex;
            height: 150vh;
            padding: 0;
            margin: 0;
            background-color: black;
            height: 70;
        }

        .vl {
            border-left: 2px solid green;
            height: 108vh;
        }
    </style>

</head>

<body class="body1 vl" style="background-color: black;">
    <div class="container">
        <br>
        <h2 class="text-uppercase text-center" style="color: rgb(255, 255, 255);">
            <b><u>what do you want to Go?</u></b>
        </h2>
        <br>
        <div class="row">
            <div class="col-md-5 bg-white w-100 p-3 h-110 d-inline-block">
                <h1><b style="color: black; font-size: 152% " class="justify-content">Go to Approve Leave reports</b></h1>
                <br>
                <div class="buttons">
                    <a href="ApproveleavesReports.php" class="btn btn-outline-danger justify-content-center"><b>Click Here</b></a>
                </div>
            </div>
            <div class="col-md-2">
            <h1><b style="color: black; font-size: 150% " class="justify-content noselect">xxxxxxxxxxxxx</b></h1>
            </div>
            <div class="col-md-5 w-100 p-3 h-110 d-inline-block" style="background-color: #37ff0d;">
                <h1><b style="color: black; font-size: 150% " class="justify-content">Approve Leave Requests</b></h1>
                <br>
                <div class="buttons">
                    <a href="approveSearchLeaves.php" class="btn btn-outline-light justify-content-center" style="color: black;"><b>Click Here</b></a>
                </div>
            </div>
            <br><br><br><br><br>
            <a href="management_dashboard.php" class="buttons"><b style="color: white; font-size: 140%">or</b></a>
            <br><br><br>
            <a href="management_dashboard.php" class="buttons btn btn-outline-warning"><b style="color: white; font-size: 150%">GO BACK TO DASHBOARD</b></a>
        </div>
        <br> 
    </div>    
</body>

</html>