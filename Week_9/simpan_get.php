<?php
if(isset($_GET['hitung'])){
$tinggi = $_GET['tinggi'];
$panjang = $_GET['panjang'];
$luas = ($tinggi * $panjang) / 2;
echo "Nilai Tinggi =".$tinggi."<br>";
echo "Nilai alas ".$panjang."<br>";
echo "Luas persegi panjang = ".$luas;
}else{
echo "<font color='red'>Anda belum memasukkan nilai tinggi & panjang !";
}
?>