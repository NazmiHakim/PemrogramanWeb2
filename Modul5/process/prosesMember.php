<?php
require 'koneksi.php';
require 'model.php';

$model = new Model($koneksi);

if (isset($_POST['tambah'])) {
    $data = [
        'nama_member' => $_POST['nama_member'],
        'nomor_member' => $_POST['nomor_member'],
        'alamat' => $_POST['alamat'],
        'tgl_mendaftar' => $_POST['tgl_mendaftar'],
        'tgl_terakhir_bayar' => $_POST['tgl_terakhir_bayar']
    ];
    $model->insertMember($data);
    header("Location: member.php");

} elseif (isset($_POST['update'])) {
    $id = $_POST['id'];
    $data = [
        'nama_member' => $_POST['nama_member'],
        'nomor_member' => $_POST['nomor_member'],
        'alamat' => $_POST['alamat'],
        'tgl_mendaftar' => $_POST['tgl_mendaftar'],
        'tgl_terakhir_bayar' => $_POST['tgl_terakhir_bayar']
    ];
    $model->updateMember($id, $data);
    header("Location: member.php");

} elseif (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $model->deleteMember($id);
    header("Location: member.php");
}
?>