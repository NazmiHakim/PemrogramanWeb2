<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
</head>
<body>
    <h1>Profil Praktikan</h1>
    <nav>
        <a href="/">Beranda</a> |
        <a href="/home/profil">Profil</a>
    </nav>
    <ul>
        <li>Nama: <?= $profil['nama']; ?></li>
        <li>NIM: <?= $profil['nim']; ?></li>
        <li>Asal Prodi: <?= $profil['asal_prodi']; ?></li>
        <li>Hobi: <?= $profil['hobi']; ?></li>
        <li>Skill: <?= $profil['skill']; ?></li>
        <li>Gambar: <br><img src="/img/<?= $profil['gambar']; ?>" width="100"></li>
    </ul>
</body>
</html>