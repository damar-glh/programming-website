<html>
   <head>
      <title>Latihan Post & Get</title>
   </head>
   <body>
      <h2><u>Latihan Method Get 1</u></h2>
      <p>
      <h3>
         <font color="blue">Menghitung Luas Persegi Panjang</font>
      </h3>
      <form method="get">
         <table border="0">
            <tr>
               <td>Masukkan Nilai Tinggi</td>
               <td>:</td>
               <td><input type="text" name="tinggi"></td>
            </tr>
            <tr>
               <td>Masukkan Nilai Panjang</td>
               <td>:</td>
               <td><input type="text" name="panjang"></td>
            </tr>
            <tr>
               <td></td>
               <td></td>
               <td><input type="submit" name="hitung" value="hitung"></td>
            </tr>
         </table>
      </form>
      <?php
         if(isset($_GET['hitung'])) {
            $tinggi = $_GET['tinggi'];
            $panjang = $_GET['panjang'];
            if($tinggi=="" or $panjang == "") {
                echo "<font color='blue'>Anda belum memasukkan nilai tinggi & panjang";
            }else{
                $luas = $tinggi * $panjang;
                echo "Nilai Tinggi =".$tinggi."<br>";
                echo "Nilai alas ".$panjang."<br>";
                echo "Luas Persegi Panjang = ".$luas;
            }
         }else{
         echo "<font color='red'>Masukkan nilai tinggi & panjang !";
         }
         ?>
   </body>
</html>