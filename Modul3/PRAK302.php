<!DOCTYPE html>
<html>
<body>
    <?php
    $gambar = "https://cdn0.iconfinder.com/data/icons/web-and-mobile-icons-volume-2/128/52-512.png";
    ?>

    <form method="post">
        <label for="tinggi">Tinggi:</label>
        <input type="number" name="tinggi" id="tinggi" required><br>

        <label for="gambar">Alamat Gambar:</label>
        <input type="text" name="gambar" id="gambar" value="<?php echo $gambar; ?>" size="25" required><br>

        <input type="submit" name="cetak" value="Cetak">
    </form>

    <?php
    if (isset($_POST['cetak'])) {
        $tinggi = $_POST['tinggi'];
        $gambar = $_POST['gambar'];

        echo "<br>";
        $baris = $tinggi;
        while ($baris >= 1) {
            $spasi = 1;
            while ($spasi <= ($tinggi - $baris)) {
                echo "<span style='display:inline-block; width:30px;'></span>";
                $spasi++;
            }

            $kolom = 1;
            while ($kolom <= $baris) {
                echo "<img src='$gambar' width='30' height='30'>";
                $kolom++;
            }

            echo "<br>";
            $baris--;
        }
    }
    ?>
</body>
</html>