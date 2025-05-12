<?php
require 'Koneksi.php';
require 'Model.php';

$model = new Model($koneksi);

$buku = $model->getAllBuku();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
</head>
<body>
    <h2>Data Buku</h2>
    <a href="FormBuku.php">Tambah Buku</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($buku as $b): ?>
        <tr>
            <td><?= $b['id_buku'] ?></td>
            <td><?= $b['judul_buku'] ?></td>
            <td><?= $b['penulis'] ?></td>
            <td><?= $b['penerbit'] ?></td>
            <td><?= $b['tahun_terbit'] ?></td>
            <td>
                <a href="formBuku.php?id=<?= $b['id_buku'] ?>">Edit</a> |
                <a href="prosesBuku.php?hapus=<?= $b['id_buku'] ?>" onclick="return confirm('Hapus buku ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>