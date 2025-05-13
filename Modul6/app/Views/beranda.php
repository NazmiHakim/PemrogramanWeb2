<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
</head>
<body>
    <h1>Beranda</h1>
    <nav>
        <a href="/">Beranda</a> |
        <a href="/home/profil">Profil</a>
    </nav>
    <p>Selamat datang, <?= $profil['nama']; ?> (<?= $profil['nim']; ?>)</p>
</body>
</html>