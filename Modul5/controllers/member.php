<?php
require 'koneksi.php';
require 'model.php';

$model = new Model($koneksi);

$members = $model->getAllMember();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Member</title>
</head>
<body>
    <h2>Data Member</h2>
    <a href="formMember.php">Tambah Member</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor</th>
            <th>Alamat</th>
            <th>Tgl Daftar</th>
            <th>Tgl Bayar</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($members as $m): ?>
        <tr>
            <td><?= $m['id_member'] ?></td>
            <td><?= $m['nama_member'] ?></td>
            <td><?= $m['nomor_member'] ?></td>
            <td><?= $m['alamat'] ?></td>
            <td><?= $m['tgl_mendaftar'] ?></td>
            <td><?= $m['tgl_terakhir_bayar'] ?></td>
            <td>
                <a href="formMember.php?id=<?= $m['id_member'] ?>">Edit</a> |
                <a href="prosesMember.php?hapus=<?= $m['id_member'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>