<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $size = 8; // Ukuran papan catur

    echo "<table border='1' cellspacing='0' cellpadding='10'>";

    for ($row = 0; $row < $size; $row++) {
        echo "<tr>";
        for ($col = 0; $col < $size; $col++) {
            if ($size - $row > $col) {
                echo "<td style='background-color:yellow;'></td>";
            } else {
                echo "<td style='background-color:red;'></td>";
            }
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>

</body>

</html>