<!DOCTYPE html>
<html>
<head>
    <style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<form method="post">
    Panjang : <input type="text" name="panjang"><br>
    Lebar : <input type="text" name="lebar"><br>
    Nilai : <input type="text" name="nilai"><br>
    <input type="submit" name="submit" value="Cetak">
</form>

<?php
if (isset($_POST['submit'])) {
    $panjang = (int)$_POST['panjang'];
    $lebar = (int)$_POST['lebar'];
    $nilaiStr = trim($_POST['nilai']);
    $nilaiArr = explode(" ", $nilaiStr);

    if (count($nilaiArr) != $panjang * $lebar) {
        echo "<p>Panjang nilai tidak sesuai dengan ukuran matriks</p>";
    } else {
        echo "<br><table>";
        for ($i = 0; $i < $panjang; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $lebar; $j++) {
                $index = $i * $lebar + $j;
                echo "<td>" .htmlspecialchars($nilaiArr[$index]) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>

</body>
</html>