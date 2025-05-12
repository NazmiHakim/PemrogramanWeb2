<?php
require 'koneksi.php';
require 'model.php';

$model = new Model($koneksi);

$id = $_GET['id'] ?? '';
$member = [];

if ($id) {
    $member = $model->getMemberById($id);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Member</title>
</head>
<body>
    <h2><?= $id ? 'Edit' : 'Tambah' ?> Member</h2>
    <form action="prosesMember.php" method="POST">
        <input type="hidden" name="id" value="<?= $member['id_member'] ?? '' ?>">
        <p>
            Nama: <br>
            <input type="text" name="nama_member" value="<?= $member['nama_member'] ?? '' ?>" required>
        </p>
        <p>
            Nomor: <br>
            <input type="text" name="nomor_member" value="<?= $member['nomor_member'] ?? '' ?>" required>
        </p>
        <p>
            Alamat: <br>
            <textarea name="alamat" required><?= $member['alamat'] ?? '' ?></textarea>
        </p>
        <p>
            Tanggal Daftar: <br>
            <input type="date" name="tgl_mendaftar" value="<?= $member['tgl_mendaftar'] ?? '' ?>" required>
        </p>
        <p>
            Tanggal Bayar: <br>
            <input type="date" name="tgl_terakhir_bayar" value="<?= $member['tgl_terakhir_bayar'] ?? '' ?>" required>
        </p>
        <p>
            <button type="submit" name="<?= $id ? 'update' : 'tambah' ?>">Simpan</button>
            <a href="member.php">Kembali</a>
        </p>
    </form>
</body>
</html>