<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register?</title>
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
            height: 70vh;
            padding: 0;
            margin: 0;
            background-color: black;
            height: 100;
        }

        .vl {
            border-left: 2px solid green;
            height: 500px;
        }
    </style>

</head>

<body style="background-color: rgb(9, 57, 9);">
    <div class="container">
        <br>
        <h1 class="text-uppercase text-center" style="color: rgb(255, 255, 255);">
            <b><u>what do you want to Go?</u></b>
        </h1>
        <br>       
        <div class="row body1">
            <div class="col-md-5 ">
                <h1><b style="color: red; font-size: 150% " class="justify-content">STAFF DETAILS</b></h1>
                <br>
                <div class="buttons">
                    <a href="registerStaff.php" class="btn btn-outline-danger justify-content-center"><b>Click Here</b></a>
                </div>
            </div>
            <div class="col-md-2">
            <h1><b style="color: black; font-size: 150% " class="justify-content noselect">xxxxxxxxxxxxx</b></h1>
            </div>
            <div class="col-md-5">
                <h1><b style="font-size: 150% " class="justify-content text-success">USER DETAILS</b></h1>
                <br>
                <div class="buttons">
                    <a href="adminUser.php" class="btn btn-outline-success justify-content-center"><b>Click Here</b></a>
                </div>

            </div>
        </div>
    </div>
</body>

</html>