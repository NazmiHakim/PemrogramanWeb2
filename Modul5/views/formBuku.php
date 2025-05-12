<?php
require 'koneksi.php';
require 'model.php';

$model = new Model($koneksi);

$id = $_GET['id'] ?? '';
$buku = [];

if ($id) {
    $buku = $model->getBukuById($id);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Buku</title>
</head>
<body>
    <h2><?= $id ? 'Edit' : 'Tambah' ?> Buku</h2>
    <form action="prosesBuku.php" method="POST">
        <input type="hidden" name="id" value="<?= $buku['id_buku'] ?? '' ?>">
        <p>
            Judul: <br>
            <input type="text" name="judul_buku" value="<?= $buku['judul_buku'] ?? '' ?>" required>
        </p>
        <p>
            Penulis: <br>
            <input type="text" name="penulis" value="<?= $buku['penulis'] ?? '' ?>" required>
        </p>
        <p>
            Penerbit: <br>
            <input type="text" name="penerbit" value="<?= $buku['penerbit'] ?? '' ?>" required>
        </p>
        <p>
            Tahun Terbit: <br>
            <input type="number" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?? '' ?>" required>
        </p>
        <p>
            <button type="submit" name="<?= $id ? 'update' : 'tambah' ?>">Simpan</button>
            <a href="buku.php">Kembali</a>
        </p>
    </form>
</body>
</html>