<?php
include "../Connections.php";
include "DeleteSql.php";

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    if (deleteStudent($nim)) {
        echo "<script>
        alert('Data berhasil dihapus')
        window.location.replace('../Proses.php')</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($mysqli);
    }
} else {
    echo "NIM not provided!";
}
?>