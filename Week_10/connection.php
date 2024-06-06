<?php
//Koneksi ke database
$server    = "localhost";
$usernames = "root";
$passwords = "";
$database  = "toko_baju"; //nama database
$mysqli    = mysqli_connect($server, $usernames, $passwords, $database);
//Check error, jikalau error tutup koneksi dengan mysql
if (mysqli_connect_errno()) {
    echo 'Koneksi gagal, ada masalah pada: ' . mysqli_connect_error();
    exit();
    mysqli_close($mysqli);
}
// mysqli_close($mysqli)