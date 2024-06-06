<?php
echo json_encode($_POST);
echo "<br>";
echo "<br>";
if (isset($_POST['hitung'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['camaba'];
    $kelamin = $_POST['kelamin'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $prodi = $_POST['studi'];
    $hobi = $_POST['hobi'];
    echo "Nim Anda =" .$nim. "<br>";
    echo "Nama Anda =" .$nama. "<br>";
    echo "Jenis Kelamin Anda =" .$kelamin. "<br>";
    echo "Tempat Tanggal Lahir Anda =" .$ttl. "<br>";
    echo "Alamat Anda =" .$alamat. "<br>";
    echo "Prodi Anda =" .$prodi. "<br>";
    echo "Hobi Anda =" .implode(", ",$hobi). "<br>";
} else {
    echo "<font color='red'>Anda belum memasukkan nilai tinggi & panjang !";
}
?>