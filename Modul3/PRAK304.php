<!DOCTYPE html>
<html>
<head>
    <style>
        img {
            width: 40px;
            height: 40px;
            margin: 2px;
        }
    </style>
</head>
<body>

<?php
$jumlah = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['jumlah'])) {
        $jumlah = intval($_POST['jumlah']);
    }

    if (isset($_POST['tambah'])) {
        $jumlah++;
    } elseif (isset($_POST['kurang'])) {
        if ($jumlah > 0) $jumlah--;
    }
}
?>

<form method="post">
    <?php if (!isset($_POST['submit']) && !isset($_POST['tambah']) && !isset($_POST['kurang'])): ?>
        <label>Jumlah bintang: </label>
        <input type="number" name="jumlah" min="0"><br>
        <input type="submit" name="submit" value="Submit">
    <?php else: ?>
        <input type="hidden" name="jumlah" value="<?= $jumlah ?>">
        <?php
        echo "<p>Jumlah bintang $jumlah</p>";
        for ($i = 0; $i < $jumlah; $i++) {
            echo "<img src='star-images-9441.png' alt='*'>";
        }
        ?>
        <br><br>
        <input type="submit" name="tambah" value="Tambah">
        <input type="submit" name="kurang" value="Kurang">
    <?php endif; ?>
</form>

</body>
</html>