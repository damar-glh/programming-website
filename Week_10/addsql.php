<?php
include "connection.php"; // memanggil file koneksi.php untuk menghubungkan ke database
if (isset($_POST['simpan'])) {
    $id = $_POST['id']; // memanggil nama variabel id untuk dibuat menjadi variabel baru $id 
    $nama_baju = $_POST['baju'];
    //menambahkan query sql tambah data untuk memasukkan data ke database
    $data = mysqli_query($mysqli, "INSERT INTO stok values ('$id', '$nama_baju')") or die("data salah: " . mysqli_error($mysqli));
    // untuk mengetahui apakah data berhasil disimpan atau belum
    if ($data) {
        //berfungsi untuk ngelink ke halaman tampil.php
        echo "<script>
alert('Data berhasil disimpan')
window.location.replace('tampil.php');
</script>";
    } else {
        //berfungsi untuk ngelink ke halaman add.php
        echo "<script>
alert('Data gagal disimpan')
window.location.replace('add.php');
</script>";
    }
}
