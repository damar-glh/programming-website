<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["hak_akses"]);
unset($_SESSION["id_admin"]);
session_destroy();
//header("Location: login.php");
echo "<script>alert('Anda yakin akan keluar ?');
window.location='login.php';
</script>";