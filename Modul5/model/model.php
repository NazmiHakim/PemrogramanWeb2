<?php
require 'Koneksi.php';

class Model {
    private $conn;

    public function __construct($koneksi) {
        $this->conn = $koneksi;
    }

    public function getAllMember() {
        $result = $this->conn->query("SELECT * FROM member");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertMember($data) {
        $stmt = $this->conn->prepare("INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $data['nama_member'], $data['nomor_member'], $data['alamat'], $data['tgl_mendaftar'], $data['tgl_terakhir_bayar']);
        return $stmt->execute();
    }

    public function updateMember($id, $data) {
        $stmt = $this->conn->prepare("UPDATE member SET nama_member=?, nomor_member=?, alamat=?, tgl_mendaftar=?, tgl_terakhir_bayar=? WHERE id_member=?");
        $stmt->bind_param("sssssi", $data['nama_member'], $data['nomor_member'], $data['alamat'], $data['tgl_mendaftar'], $data['tgl_terakhir_bayar'], $id);
        return $stmt->execute();
    }

    public function deleteMember($id) {
        $stmt = $this->conn->prepare("DELETE FROM member WHERE id_member=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function getMemberById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM member WHERE id_member=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

        public function getAllBuku() {
            $result = $this->conn->query("SELECT * FROM buku");
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    
        public function insertBuku($data) {
            $stmt = $this->conn->prepare("INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("sssi", $data['judul_buku'], $data['penulis'], $data['penerbit'], $data['tahun_terbit']);
            return $stmt->execute();
        }
    
        public function updateBuku($id, $data) {
            $stmt = $this->conn->prepare("UPDATE buku SET judul_buku=?, penulis=?, penerbit=?, tahun_terbit=? WHERE id_buku=?");
            $stmt->bind_param("sssii", $data['judul_buku'], $data['penulis'], $data['penerbit'], $data['tahun_terbit'], $id);
            return $stmt->execute();
        }
    
        public function deleteBuku($id) {
            $stmt = $this->conn->prepare("DELETE FROM buku WHERE id_buku=?");
            $stmt->bind_param("i", $id);
            return $stmt->execute();
        }
    
        public function getBukuById($id) {
            $stmt = $this->conn->prepare("SELECT * FROM buku WHERE id_buku=?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }
  
        public function getAllPeminjaman() {
            $result = $this->conn->query("SELECT * FROM peminjaman");
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getPeminjamanById($id) {
            $stmt = $this->conn->prepare("SELECT * FROM peminjaman WHERE id_peminjaman=?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }

        public function insertPeminjaman($data) {
            $stmt = $this->conn->prepare("INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("iiss", $data['id_member'], $data['id_buku'], $data['tgl_pinjam'], $data['tgl_kembali']);
            return $stmt->execute();
        }

        public function updatePeminjaman($id, $data) {
            $stmt = $this->conn->prepare("UPDATE peminjaman SET id_member=?, id_buku=?, tgl_pinjam=?, tgl_kembali=? WHERE id_peminjaman=?");
            $stmt->bind_param("iissi", $data['id_member'], $data['id_buku'], $data['tgl_pinjam'], $data['tgl_kembali'], $id);
            return $stmt->execute();
        }

        public function deletePeminjaman($id) {
            $stmt = $this->conn->prepare("DELETE FROM peminjaman WHERE id_peminjaman=?");
            $stmt->bind_param("i", $id);
            return $stmt->execute();
        }

}
?>