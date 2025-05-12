<?php
require 'koneksi.php';
require 'model.php';

$model = new Model($koneksi);

if (isset($_POST['tambah'])) {
    $data = [
        'judul_buku' => $_POST['judul_buku'],
        'penulis' => $_POST['penulis'],
        'penerbit' => $_POST['penerbit'],
        'tahun_terbit' => $_POST['tahun_terbit']
    ];
    $model->insertBuku($data);
    header("Location: buku.php");

} elseif (isset($_POST['update'])) {
    $id = $_POST['id'];
    $data = [
        'judul_buku' => $_POST['judul_buku'],
        'penulis' => $_POST['penulis'],
        'penerbit' => $_POST['penerbit'],
        'tahun_terbit' => $_POST['tahun_terbit']
    ];
    $model->updateBuku($id, $data);
    header("Location: Buku.php");

} elseif (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $model->deleteBuku($id);
    header("Location: buku.php");
}
?>