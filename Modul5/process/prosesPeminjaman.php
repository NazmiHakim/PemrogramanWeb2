<?php
require 'Koneksi.php';
require 'Model.php';

$model = new Model($koneksi);

if (isset($_POST['tambah'])) {
    $data = [
        'id_member' => $_POST['id_member'],
        'id_buku' => $_POST['id_buku'],
        'tgl_pinjam' => $_POST['tgl_pinjam'],
        'tgl_kembali' => $_POST['tgl_kembali']
    ];
    $model->insertPeminjaman($data);
    header("Location: peminjaman.php");

} elseif (isset($_POST['update'])) {
    $id = $_POST['id'];
    $data = [
        'id_member' => $_POST['id_member'],
        'id_buku' => $_POST['id_buku'],
        'tgl_pinjam' => $_POST['tgl_pinjam'],
        'tgl_kembali' => $_POST['tgl_kembali']
    ];
    $model->updatePeminjaman($id, $data);
    header("Location: peminjaman.php");

} elseif (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $model->deletePeminjaman($id);
    header("Location: peminjaman.php");
}
?>