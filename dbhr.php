<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "hrmisdb";

$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("Database connection error : " . mysqli_connect_error());
}
