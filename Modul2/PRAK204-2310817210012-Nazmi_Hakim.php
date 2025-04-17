<!DOCTYPE html>
<html>
<body>

<form method="post">
    Nilai : <input type="number" name="nilai" required><br>
    <input type="submit" value="Konversi">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = (int) $_POST['nilai'];
    $output = match (true) {
        $nilai < 0 || $nilai >= 1000 => "Anda Menginput Melebihi Limit Bilangan",
        $nilai === 0 => "Nol",
        $nilai < 10 => "Satuan",
        $nilai < 20 => "Belasan",
        $nilai < 100 => "Puluhan",
        default => "Ratusan"
    };

    echo "<h2>Hasil: " .strtolower($output)."</h2>";
}
?>

</body>
</html>