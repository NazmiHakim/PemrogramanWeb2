<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial;
        }
        .output span {
            margin: 5px;
            font-size: 18px;
        }
        img {
            width: 20px;
            height: 20px;
            vertical-align: middle;
        }
    </style>
</head>
<body>

<form method="post">
    Batas Bawah :
    <input type="number" name="bawah" required>
    <br>
    Batas Atas :
    <input type="number" name="atas" required>
    <br>
    <input type="submit" name="cetak" value="Cetak">
    <br><br>
</form>

<?php
if (isset($_POST['cetak'])) {
    $bawah = intval($_POST['bawah']);
    $atas = intval($_POST['atas']);

    echo "<div class='output'>";

    $i = $bawah;
    do {
        if ((($i + 7) % 5) == 0) {
            echo "<img src='star-images-9441.png' alt='*'> ";
        } else {
            echo "$i ";
        }
        $i++;
    } while ($i <= $atas);

    echo "</div>";
}
?>

</body>
</html>