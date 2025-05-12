<?php
require 'Koneksi.php';
require 'Model.php';

$model = new Model($koneksi);
$peminjaman = $model->getAllPeminjaman();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>
</head>
<body>
    <h2>Data Peminjaman</h2>
    <a href="FormPeminjaman.php">Tambah Peminjaman</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>ID Member</th>
            <th>ID Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($peminjaman as $p): ?>
        <tr>
            <td><?= $p['id_peminjaman'] ?></td>
            <td><?= $p['id_member'] ?></td>
            <td><?= $p['id_buku'] ?></td>
            <td><?= $p['tgl_pinjam'] ?></td>
            <td><?= $p['tgl_kembali'] ?></td>
            <td>
                <a href="FormPeminjaman.php?id=<?= $p['id_peminjaman'] ?>">Edit</a> |
                <a href="ProsesPeminjaman.php?hapus=<?= $p['id_peminjaman'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>