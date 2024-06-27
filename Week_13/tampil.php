<?php
include "connection.php"; //memanggil file koneksi.php untuk menghubungkan ke data
session_start();
if (!isset($_SESSION["hak_akses"])) {
    header("Location: login.php");
} else {
?>
    <html>

    <head>
        <title>Tampil</title>
        <script type="text/javascript">
            function myfunction() {
                alert("Apakah yakin data akan dihapus? ")
            }
        </script>
    </head>

    <body>
        <center>
            <h2>DAFTAR STOK BAJU</h2>
            <a href="add.php">
                <button>Tambah Stok Baju</button>
            </a>
            <p>
                <font color="blue">
                    <h2>Selamat datang <?= $_SESSION['username']; ?></h2>
                </font>
            </p>
            <p>
            <table width="370" border="1" cellpadding="10">
                <thead>
                    <tr>
                        <th width="60">Id baju</th>
                        <th width="133">Nama Baju</th>
                        <th width="85" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "connection.php";
                    $stok = mysqli_query($mysqli, "SELECT * FROM stok");
                    // memberikan perintah query sql untuk menampilkan semua stok
                    //gerintah untuk menampilkan semua stok yang ada di tabel jual menggunakan gerulangan
                    while ($show = mysqli_fetch_array($stok)) {
                    ?>
                        <tr>
                            <td>
                                <center><?php
                                        echo $show['id'];
                                        ?></center>
                            </td>
                            <td><?php
                                echo $show['baju'];
                                ?></td>
                            <td><a href="update.php?id=<?php
                                                        echo $show['id'];
                                                        ?>"><button>edit</button></a>
                                <a href="deletesql.php?id=<?php
                                                            echo $show['id'];
                                                            ?>"><button onclick="myfunction()">delete</button></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <a href="tampil.php" onclick="window.print()"><button style="margin-top: 15px;">Print Stok</button></a>
            <p>
            <p>
                <a href="logout.php"><button>Log Out</button></a>
        </center>
    </body>

    </html>
<?php } ?>