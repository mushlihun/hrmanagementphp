<?php 

session_start(); 

include "dbhr.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['username']);

    $pass = validate($_POST['password']);

    $dept = validate($_POST['dept']);

    if (empty($uname)) {

        header("Location: index.php?error=Username is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else if(empty($dept)){

        header("Location: index.php?error=Department is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass' AND department='$dept'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass && $row['department'] === "Systems Administrator") {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['surname'] = $row['surname'];

                $_SESSION['user_id'] = $row['user_id'];

                header("Location: sysadmin_dashboard.php");

                exit();

            }else if ($row['username'] === $uname && $row['password'] === $pass && $row['department'] === "Administration") {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['surname'] = $row['surname'];

                $_SESSION['user_id'] = $row['user_id'];

                header("Location: admin_dashboard.php");

                exit();

            }else if ($row['username'] === $uname && $row['password'] === $pass && $row['department'] === "Accounts") {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['surname'] = $row['surname'];

                $_SESSION['user_id'] = $row['user_id'];

                header("Location: accountant_dashboard.php");

                exit();

            }else if ($row['username'] === $uname && $row['password'] === $pass && $row['department'] === "Receptionist") {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['surname'] = $row['surname'];

                $_SESSION['user_id'] = $row['user_id'];

                header("Location: receptionist_dashboard.php");

                exit();

            }else if ($row['username'] === $uname && $row['password'] === $pass && $row['department'] === "Management") {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['surname'] = $row['surname'];

                $_SESSION['user_id'] = $row['user_id'];

                header("Location: management_dashboard.php");

                exit();

            }else{

                header("Location: index.php?error=Incorrect Username, password or department");

                exit();

            }

        }else{

            header("Location: index.php?error=<p class='text-danger'>Incorrect Username, password or Department</p>");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}