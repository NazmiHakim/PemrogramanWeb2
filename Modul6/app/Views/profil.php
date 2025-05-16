<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background-image: url('<?= base_url('img/background.jpg'); ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Praktikum</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/home/profil">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white">
                <h3 class="mb-0">Profil Praktikan</h3>
            </div>
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-3 text-center mb-3">
                        <img src="<?= base_url('img/' . $profil['gambar']); ?>" class="img-thumbnail" width="300" alt="Foto Profil">
                    </div>
                    <div class="col-md-9">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Nama:</strong> <?= $profil['nama']; ?></li>
                            <li class="list-group-item"><strong>NIM:</strong> <?= $profil['nim']; ?></li>
                            <li class="list-group-item"><strong>Asal Prodi:</strong> <?= $profil['asal_prodi']; ?></li>
                            <li class="list-group-item"><strong>Hobi:</strong> <?= $profil['hobi']; ?></li>
                            <li class="list-group-item"><strong>Skill:</strong> <?= $profil['skill']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
