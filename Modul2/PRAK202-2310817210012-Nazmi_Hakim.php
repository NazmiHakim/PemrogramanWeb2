<!DOCTYPE html>
<html>
<head>
    <style>
        .error { color: red; }
    </style>
</head>
<body>

<?php
$nama = $nim = $gender = "";
$errors = ["nama" => "", "nim" => "", "gender" => ""];
$showOutput = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST["nama"]);
    $nim = trim($_POST["nim"]);
    $gender = $_POST["gender"] ?? "";

    if (empty($nama)) $errors["nama"] = "Nama tidak boleh kosong";
    if (empty($nim)) $errors["nim"] = "NIM tidak boleh kosong";
    if (empty($gender)) $errors["gender"] = "Jenis kelamin tidak boleh kosong";

    if (!array_filter($errors)) {
        $nama = htmlspecialchars($nama);
        $nim = htmlspecialchars($nim);
        $gender = htmlspecialchars($gender);
        $showOutput = true;
    }
}
?>

<form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Nama: <input type="text" name="nama" value="<?= $nama; ?>">
    <span class="error">* <?= $errors["nama"]; ?></span><br>

    NIM: <input type="text" name="nim" value="<?= $nim; ?>">
    <span class="error">* <?= $errors["nim"]; ?></span><br>

    Jenis Kelamin :
    <span class="error">* <?= $errors["gender"]; ?></span><br>
    <label><input type="radio" name="gender" value="Laki-Laki" <?= $gender === "Laki-Laki" ? "checked" : ""; ?>> Laki-Laki</label><br>
    <label><input type="radio" name="gender" value="Perempuan" <?= $gender === "Perempuan" ? "checked" : ""; ?>> Perempuan</label><br>

    <input type="submit" value="Submit">
</form>

<?php if ($showOutput): ?>
    <h2>Output:</h2>
    <?= $nama ?><br>
    <?= $nim ?><br>
    <?= $gender ?><br>
<?php endif; ?>

</body>
</html>