<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Jumlah Peserta : <input type="text" name="peserta" required><br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    <style>
        .red {
            color: red;
        }
        .green {
            color: green;
        }
    </style>
    <?php
    if (isset($_POST['submit'])) {
        $angka = intval($_POST['peserta']);
        $i = 1;

        while ($i <= $angka) {
            if ($i % 2 == 0) {
                echo "<h2 class ='red'>Peserta ke-$i<h2>";
            } else {
                echo "<h2 class ='green'>Peserta ke-$i<h2>";
    
            }
            $i++;
        }
    }
    ?>
</body>
</html>