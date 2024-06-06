<html>

<head>
    <title>Challenge</title>
</head>

<body>
    <h2><u>Form Pendaftaran Mahasiswa Baru</u></h2>
    <form method="post" action="mahasiswa_baru.php">
        <table border="0">
            <tr>
                <td>Masukkan NIM</td>
                <td>:</td>
                <td><input type="number" name="nim"></td>
            </tr>
            <tr>
                <td>Masukkan Nama Calon Mahasiswa Baru</td>
                <td>:</td>
                <td><input type="text" name="camaba"></td>
            </tr>
            <tr>
                <td>Masukan Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" id="laki" name="kelamin" value="laki">
                    <label for="laki">Laki - Laki</label><br>
                </td>
                <td>
                    <input type="radio" id="perempuan" name="kelamin" value="perempuan">
                    <label for="perempuan">Perempuan</label><br>
                </td>
            </tr>
            <tr>
                <td>Masukkan Tempat Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="ttl"></td>
            </tr>
            <tr>
                <td>Masukkan Alamat</td>
                <td>:</td>
                <td>
                    <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td><label for="studi">Masukkan Program Studi</label></td>
                <td>:</td>
                <td>
                    <select id="studi" name="studi">
                        <option value="S1 Informatika">S1 Informatika</option>
                        <option value="S1 Sistem Informasi"> S1 Sistem Informasi</option>
                        <option value="S1 Teknik Komputer">S1 Teknik Komputer</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Masukkan Hobi </td>
                <td>:</td>
                <td>
                    <input type="checkbox" id="membaca" name="hobi[]" value="Membaca">
                    <label for="membaca">Membaca</label><br>
                    <input type="checkbox" id="olahraga" name="hobi[]" value="Olahraga">
                    <label for="olahraga">Olahraga</label><br>
                    <input type="checkbox" id="musik" name="hobi[]" value="Musik">
                    <label for="musik">Musik</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="hitung" value="hitung"></td>
            </tr>
        </table>
</body>

</html>