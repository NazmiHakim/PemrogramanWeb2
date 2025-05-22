<h3>Edit Data Buku</h3>

<?php if(session()->getFlashdata('errors')): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach(session()->getFlashdata('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form action="/buku/update/<?= $buku['id'] ?>" method="post">
    <?= csrf_field() ?>
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" name="judul" class="form-control" id="judul" value="<?= esc($buku['judul']) ?>" required>
    </div>

    <div class="mb-3">
        <label for="penulis" class="form-label">Penulis</label>
        <input type="text" name="penulis" class="form-control" id="penulis" value="<?= esc($buku['penulis']) ?>" required>
    </div>

    <div class="mb-3">
        <label for="penerbit" class="form-label">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" id="penerbit" value="<?= esc($buku['penerbit']) ?>" required>
    </div>

    <div class="mb-3">
        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control" id="tahun_terbit" value="<?= esc($buku['tahun_terbit']) ?>" min="1801" max="2023" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/buku" class="btn btn-secondary">Kembali</a>
</form>