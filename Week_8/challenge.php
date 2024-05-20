<!DOCTYPE html>
<html>

<head>
    <title>Hitung Pangkat</title>
</head>

<body>
    <form method="post">
        <label for="bilangan">Masukkan bilangan:</label>
        <input type="number" name="bilangan" id="bilangan" value="<?php echo isset($_POST['bilangan']) ? $_POST['bilangan'] : ''; ?>">
        <input type="submit" value="HITUNG PANGKAT !!">
    </form>

    <?php
    $bilangan = intval($_POST['bilangan']);
    echo "<ul>";
    for ($i = 1; $i <= $bilangan; $i++) {
        $hasil = $i ** 2;
        echo "<li>$i ^ 2 = $hasil</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>