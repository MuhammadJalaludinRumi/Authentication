<div class="lime-container">
    <div class="lime-body">
        <!-- Topbar sederhana -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm mb-4">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('guest'); ?>">
                    <strong>Management</strong>
                </a>
                <div class="ml-auto">
                    <a href="<?= base_url('auth'); ?>" class="btn btn-primary btn-sm">Login</a>
                    <a href="<?= base_url('auth/register'); ?>" class="btn btn-success btn-sm">Signup</a>
                </div>
            </div>
        </nav>

        <!-- Konten utama -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-4">
                    <h3>Selamat Datang di Website Management</h3>
                    <p class="lead">Ini adalah halaman guest (umum). Untuk fitur lebih lengkap, silakan login atau daftar akun baru.</p>
                </div>
            </div>

            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Informasi</h5>
                            <p>Website ini menampilkan data ruang, profil user, dan fitur lainnya. 
                            Silakan login untuk akses penuh.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Keuntungan</h5>
                            <p>Dengan mendaftar, Anda bisa mengelola data, menyimpan informasi, 
                            serta berinteraksi dengan user lain.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Mulai Sekarang</h5>
                            <p>Buat akun Anda atau login untuk mulai menggunakan semua fitur website ini.</p>
                            <a href="<?= base_url('auth/register'); ?>" class="btn btn-success btn-block">Daftar Gratis</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="lime-footer mt-5">
                <div class="container text-center">
                    <span class="footer-text">eja.wingky tamvvan © <?= date('Y'); ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
