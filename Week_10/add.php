<center>
    <h2>Form Tambah Stok Baju</h2>
    <form action="addsql.php" method="post">
        <table border="1">
            <tr>
                <th colspan="2" scope="row">Tambah Data Barang</th>
            </tr>
            <tr>
                <th>id</th>
                <td>
                    <input type="text" name="id" required>
                </td>
            </tr>
            <tr>
                <th>nama baju</th>
                <td><input type="text" name="baju" required></td>
            </tr>
            <tr>
                <th colspan="2" scope="row"><input type="submit" name="simpan" id="simpan" value="simpan" />
                    <input type="reset" name="button2" id="button2" value="Batal" />
                </th>
            </tr </table>
    </form>
</center>