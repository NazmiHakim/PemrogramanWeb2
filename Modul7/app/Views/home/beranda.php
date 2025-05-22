<!-- app/Views/beranda.php -->

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="alert alert-success text-center">
            <h1 class="display-5">Selamat Datang, <strong><?= esc(session()->get('username')) ?></strong>!</h1>
            <p class="lead">Ini adalah halaman beranda. Silahkan gunakan fitur fitur yang ada</p>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Navigasi Cepat</h5>
                <p class="card-text">Gunakan menu di atas untuk mengakses fitur-fitur aplikasi:</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="/buku" class="text-decoration-none">Kelola Data Buku</a></li>
                    <li class="list-group-item"><a href="/logout" class="text-decoration-none text-danger">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
