<div class="container mt-4">
    <h2 class="mb-3">Daftar Buku</h2>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <a href="<?= base_url('buku/create') ?>" class="btn btn-primary mb-3">Tambah Buku</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($buku as $b): ?>
                <tr>
                    <td><?= $b['id'] ?></td>
                    <td><?= esc($b['judul']) ?></td>
                    <td><?= esc($b['penulis']) ?></td>
                    <td><?= esc($b['penerbit']) ?></td>
                    <td><?= esc($b['tahun_terbit']) ?></td>
                    <td>
                        <a href="<?= base_url('buku/edit/' . $b['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('buku/delete/' . $b['id']) ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>