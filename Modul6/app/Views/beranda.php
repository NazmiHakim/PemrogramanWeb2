<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Praktikum</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home/profil">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <h2 class="card-title">Selamat Datang</h2>
                <p class="card-text">Halo, <strong><?= $profil['nama']; ?></strong> (<?= $profil['nim']; ?>)</p>
            </div>
        </div>
    </div>

</body>
</html>
