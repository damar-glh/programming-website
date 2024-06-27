<?php
include('connection.php');
if (isset($_POST["login"])) {
    $username = (!empty($_POST['username'])) ? $_POST['username'] : "";
    $password = (!empty($_POST['password'])) ? $_POST['password'] : "";
    $query = mysqli_query($mysqli, "select * from user_admin where username='" . $username . "' and password='" . $password . "'") or die(mysqli_error($mysqli));
    $hasil = mysqli_fetch_assoc($query);
    $username = $hasil['username'];
    $id_admin = $hasil['id_admin'];
    $hak_akses = $hasil['hak_akses'];
    session_start();
    if ($hak_akses == 'admin') { //jika login hak aksesnya admin
        $_SESSION['username'] = $username;
        $_SESSION['hak_akses'] = $hak_akses;
        $_SESSION['id_admin'] = $id_admin;
        echo "<script>alert('Selamat Datang Admin !'); 
        window.location='tampil.php'; </script>";
    } elseif ($hak_akses = 'pembeli') {
        $_SESSION['username'] = $username;
        $_SESSION['hak_akses'] = $hak_akses;
        $_SESSION['id_admin'] = $id_admin;
        echo "<script>alert('Selamat Datang Pembeli !'); 
        window.location='katalog.php';</script>";
    } else {
        echo "<script>alert('Anda belum login. Silahkan login dulu ya bro!'); window.location='login.php'; </script>";
    }
}
?>