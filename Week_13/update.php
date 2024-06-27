<?php
include "connection.php"; //memanggil file konekss.php untuk menghubungkan ke database //newberikan perintah query sql senampilkan data berdasarkan id yang dipilih 
session_start();
if (!isset($_SESSION["hak_akses"])) {
    header("Location: login.php");
} else {
$data = mysqli_query($mysqli, "SELECT * FROM stok WHERE id='$_GET[id]'");
$datashow = mysqli_fetch_array($data); // ecnampilkan data yang sudah di pilih untuk di edit
?>
<html>

<head>
    <title>Update</title>
</head>

<body>
    <h2>UPDATE DATA BARANG</h2>
    <form action="updatesql.php" method="post">
        <table>
            <tr>
                <td>id baju </td>
                <td><input type="text" name="id" value="<?php echo $_GET['id']; ?>" readonly></td>
            </tr>
            <tr>
                <td>nama baju</td>
                <td><input type="text" name="baju" value="<?php echo $datashow['baju']; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="EDIT"></td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php } ?>