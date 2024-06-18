<?php
$server    = "localhost";
$usernames = "root";
$passwords = "";
$database  = "student_registration";
$mysqli    = mysqli_connect($server, $usernames, $passwords, $database);

if (mysqli_connect_errno()) {
    echo 'Connection failed: ' . mysqli_connect_error();
    exit();
}

// mysqli_close($mysqli);