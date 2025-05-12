<?php
require 'koneksi.php';
require 'model.php';

$model = new Model($koneksi);

$dataMember = $model->getAllMember();
$dataBuku = $model->getAllBuku();

$id = $_GET['id'] ?? '';
$peminjaman = [];

if ($id) {
    $peminjaman = $model->getPeminjamanById($id);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman</title>
</head>
<body>
    <h2><?= $id ? 'Edit' : 'Tambah' ?> Peminjaman</h2>
    <form action="prosesPeminjaman.php" method="POST">
        <input type="hidden" name="id" value="<?= $peminjaman['id_peminjaman'] ?? '' ?>">

        <p>
            Member: <br>
            <select name="id_member" required>
                <option value="">-- Pilih Member --</option>
                <?php foreach($dataMember as $m): ?>
                    <option value="<?= $m['id_member'] ?>" <?= (isset($peminjaman['id_member']) && $peminjaman['id_member'] == $m['id_member']) ? 'selected' : '' ?>>
                        <?= $m['nama_member'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>

        <p>
            Buku: <br>
            <select name="id_buku" required>
                <option value="">-- Pilih Buku --</option>
                <?php foreach($dataBuku as $b): ?>
                    <option value="<?= $b['id_buku'] ?>" <?= (isset($peminjaman['id_buku']) && $peminjaman['id_buku'] == $b['id_buku']) ? 'selected' : '' ?>>
                        <?= $b['judul_buku'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>

        <p>
            Tanggal Pinjam: <br>
            <input type="date" name="tgl_pinjam" value="<?= $peminjaman['tgl_pinjam'] ?? '' ?>" required>
        </p>

        <p>
            Tanggal Kembali: <br>
            <input type="date" name="tgl_kembali" value="<?= $peminjaman['tgl_kembali'] ?? '' ?>" required>
        </p>

        <p>
            <button type="submit" name="<?= $id ? 'update' : 'tambah' ?>">Simpan</button>
            <a href="peminjaman.php">Kembali</a>
        </p>
    </form>
</body>
</html>