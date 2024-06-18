<?php
include "../Connections.php";

// Tangkap data yang dikirimkan dari formulir
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$nim = $_POST['nim'];
$birthplace = $_POST['birthplace'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$study_program = $_POST['study_program'];
$hobbies = isset($_POST['hobbies']) ? implode(',', $_POST['hobbies']) : '';

// Query untuk memasukkan data ke dalam tabel students
$query = "INSERT INTO students (first_name, last_name, nim, birthplace, birthdate, gender, address, study_program, hobbies) 
          VALUES ('$first_name', '$last_name', '$nim', '$birthplace', '$birthdate', '$gender', '$address', '$study_program', '$hobbies')";

// Jalankan query
if (mysqli_query($mysqli, $query)) {
    // Jika berhasil, redirect ke halaman lain atau tampilkan pesan sukses
    echo "<script>
    alert('Data berhasil disimpan')
    window.location.replace('../Proses.php');
</script>";
} else {
    // Jika gagal, tampilkan pesan error
    echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
}

// Tutup koneksi database
// mysqli_close($mysqli);
