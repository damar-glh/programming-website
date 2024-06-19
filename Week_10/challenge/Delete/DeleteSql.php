<?php
include "../Connections.php";

function deleteStudent($nim) {
    global $mysqli;
    $query = "DELETE FROM students WHERE nim='$nim'";
    return mysqli_query($mysqli, $query);
}
?>