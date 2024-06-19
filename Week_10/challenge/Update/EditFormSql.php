<?php
include "../Connections.php";

function getStudentByNIM($nim) {
    global $mysqli;
    $query = "SELECT * FROM students WHERE nim='$nim'";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    return mysqli_fetch_assoc($result);
}

function updateStudent($nim, $first_name, $last_name, $gender, $birthplace, $birthdate, $address, $study_program, $hobbies) {
    global $mysqli;
    $query = "UPDATE students SET
        first_name='$first_name',
        last_name='$last_name',
        gender='$gender',
        birthplace='$birthplace',
        birthdate='$birthdate',
        address='$address',
        study_program='$study_program',
        hobbies='$hobbies'
        WHERE nim='$nim'";
    
    return mysqli_query($mysqli, $query);
}
?>
