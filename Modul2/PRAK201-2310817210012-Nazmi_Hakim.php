<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Nama 1: <input type="text" name="nama1" required><br>
        Nama 2: <input type="text" name="nama2" required><br>
        Nama 3: <input type="text" name="nama3" required><br>
        <input type="submit" name="submit" value="Urutkan">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = [
            $_POST['nama1'],
            $_POST['nama2'],
            $_POST['nama3']
        ];

        sort($nama, SORT_STRING);

        echo "<h3>Hasil Pengurutan Nama:</h3>";
        foreach ($nama as $n) {
            echo htmlspecialchars($n) . "<br>";
        }
    }
    ?>
</body>
</html>