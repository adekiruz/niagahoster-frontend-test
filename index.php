<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/styles.css" type="text/css">

    <title>Front End Test</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 hide-mobile">
                <div class="d-flex justify-content-start align-items-center">
                    <i class="bi bi-bookmark-dash-fill text-primary fs-2 me-2"></i> <span>Gratis Ebook 9 Cerdas
                        Menggunakan
                        Domain [x]</span>
                </div>
            </div>
            <div class="col-md-6 hide-mobile text-end">
                <ul class="list-inline">
                    <li><a href="#"><i class="bi bi-telephone-fill me-1"></i> 0274-5305505</a></li>
                    <li><a href="#"><i class="bi bi-chat-right-fill me-1"></i> Live Chat</a></li>
                    <li><a href="#"><i class="bi bi-person-circle me-1"></i> Member Area</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid border-top border-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid p-0">
                    <a class="navbar-brand" href="#"><img src="assets/svg/nh-logo.svg" alt="logo niagahoster"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Hosting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Domain</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Server</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Website</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Afiliasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Promo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Pembayaran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Review</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Kontak</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <section>
        <div class="container-fluid pb-5 border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mt-5 text-md-start">
                        <h1 class="font-montserrat-bold">PHP Hosting</h1>
                        <div class="fs-2 font-montserrat-light">Cepat, handal, penuh dengan modul PHP yang Anda butuhkan
                        </div>
                        <div class="mt-3">
                            <div class="fs-5 mb-1 font-nunitosans-light"><i class="bi bi-check-circle-fill me-1"
                                    style="color: #00b100;"></i> Solusi PHP untuk performa query yang lebih cepat.</div>
                            <div class="fs-5 mb-1 font-nunitosans-light"><i class="bi bi-check-circle-fill me-1"
                                    style="color: #00b100;"></i> Konsumsi memori yang lebih rendah.</div>
                            <div class="fs-5 mb-1 font-nunitosans-light"><i class="bi bi-check-circle-fill me-1"
                                    style="color: #00b100;"></i> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</div>
                            <div class="fs-5 mb-1 font-nunitosans-light"><i class="bi bi-check-circle-fill me-1"
                                    style="color: #00b100;"></i> Fitur enkripsi IonCube dan Zend Guard Loaders</div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 text-center text-lg-end">
                        <img src="/assets/svg/illustration banner PHP hosting-01.svg"
                            alt="illustration banner PHP hosting" height="80%" width="auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-center align-items-end">
                <div class="col-lg-3 text-center mt-5">
                    <div class="mb-5">
                        <img src="/assets/svg/illustration-banner-PHP-zenguard01.svg"
                            alt="illustration-banner-PHP-zenguard">
                    </div>
                    <div>PHP Zend Guard Loader</div>
                </div>
                <div class="col-lg-3 text-center mt-5">
                    <div class="mb-3">
                        <img src="/assets/svg/icon-composer.svg" alt="php composer">
                    </div>
                    <div>PHP Composer</div>
                </div>
                <div class="col-lg-3 text-center mt-5">
                    <div class="mb-5">
                        <img src="/assets/svg/icon-php-hosting-ioncube.svg" alt="php-hosting-ioncube">
                    </div>
                    <div>PHP ionCube Loader</div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <?php
        $prices = [
            'bayi' => [
                'real_price' => '19.900',
                'discounted_price' => ['14', '900']
            ],
            'pelajar' => [
                'real_price' => '46.900',
                'discounted_price' => ['23', '450']
            ],
            'personal' => [
                'real_price' => '58.900',
                'discounted_price' => ['38', '900']
            ],
            'bisnis' => [
                'real_price' => '109.900',
                'discounted_price' => ['65', '900']
            ]
        ];
    ?>
    <section id="pricing" class="mt-5">
        <div class="container">
            <div class="row text-center">
                <h2 class="font-montserrat-bold">Paket Hosting Singapura yang Tepat</h2>
                <div class="fs-3 font-montserrat-light">Diskon 40% Domain dan SSL Gratis untuk Anda</div>
            </div>
            <div class="container p-5">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <div class="row justify-content-center align-items-start">
                            <div class="col-xl-3 p-0">
                                <div class="pricing-card mt-4">
                                    <div class="pricing-header">
                                        <div class="fs-4 pricing-card-title p-1 font-montserrat-bold">Bayi</div>
                                        <div class="pricing-card-price">
                                            <div class="text-decoration-line-through">Rp <?=$prices['bayi']['real_price']?></div>
                                            <div class="d-flex justify-content-center align-items-start">Rp <b
                                                    class="discounted-price font-montserrat-bold"><?=$prices['bayi']['discounted_price'][0]?></b><b
                                                    class="font-montserrat-bold">.<?=$prices['bayi']['discounted_price'][1]?></b>/bln</div>
                                        </div>
                                        <div class="registered-users-count p-2"><b>938</b> Pengguna terdaftar</div>
                                    </div>
                                    <div class="pricing-body">
                                        <div class="features p-1 p-3">
                                            <div class="feature p-1"><b>0.5X RESOURCE POWER</b></div>
                                            <div class="feature p-1"><b>500 MB </b> Disk Space</div>
                                            <div class="feature p-1"><b>Unlimited</b> Bandwidth</div>
                                            <div class="feature p-1"><b>Unlimited</b> Databases</div>
                                            <div class="feature p-1"><b>1</b> Domain</div>
                                            <div class="feature p-1"><b>Instant</b> Backup</div>
                                            <div class="feature p-1"><b>Unlimited SSL</b> Gratis Selamanya</div>
                                        </div>
                                    </div>
                                    <div class="pricing-footer">
                                        <div class="choose-now-btn mt-4 mb-4">
                                            <a href="#">Pilih Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 p-0">
                                <div class="pricing-card mt-4">
                                    <div class="pricing-header">
                                        <div class="fs-4 pricing-card-title p-1 font-montserrat-bold">Pelajar</div>
                                        <div class="pricing-card-price">
                                            <div class="text-decoration-line-through">Rp <?=$prices['pelajar']['real_price']?></div>
                                            <div class="d-flex justify-content-center align-items-start">Rp <b
                                                    class="discounted-price font-montserrat-bold"><?=$prices['pelajar']['discounted_price'][0]?></b><b
                                                    class="font-montserrat-bold">.<?=$prices['pelajar']['discounted_price'][1]?></b>/bln</div>
                                        </div>
                                        <div class="registered-users-count p-2"><b>4.168</b> Pengguna terdaftar</div>
                                    </div>
                                    <div class="pricing-body">
                                        <div class="features p-1 p-3">
                                            <div class="feature p-1"><b>1X RESOURCE POWER</b></div>
                                            <div class="feature p-1"><b>Unlimited </b> Disk Space</div>
                                            <div class="feature p-1"><b>Unlimited</b> Bandwidth</div>
                                            <div class="feature p-1"><b>Unlimited</b> POP3 Email</div>
                                            <div class="feature p-1"><b>Unlimited</b> Databases</div>
                                            <div class="feature p-1"><b>10</b> Addon Domains</div>
                                            <div class="feature p-1"><b>Instant</b> Backup</div>
                                            <div class="feature p-1"><b>Domain Gratis</b> Selamanya</div>
                                            <div class="feature p-1"><b>Unlimited SSL</b> Gratis Selamanya</div>
                                        </div>
                                    </div>
                                    <div class="pricing-footer">
                                        <div class="choose-now-btn mt-4 mb-4">
                                            <a href="#">Pilih Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 p-0">
                                <div class="pricing-card mt-4 active" style="position: relative;">
                                    <div class="ribbon ribbon-top-left"><span>BEST SELLER!</span></div>
                                    <div class="pricing-header">
                                        <div class="fs-4 pricing-card-title p-1 font-montserrat-bold">Personal</div>
                                        <div class="pricing-card-price">
                                            <div class="text-decoration-line-through">Rp <?=$prices['personal']['real_price']?></div>
                                            <div class="d-flex justify-content-center align-items-start">Rp <b
                                                    class="discounted-price font-montserrat-bold"><?=$prices['personal']['discounted_price'][0]?></b><b
                                                    class="font-montserrat-bold">.<?=$prices['personal']['discounted_price'][1]?></b>/bln</div>
                                        </div>
                                        <div class="registered-users-count p-2"><b>10.017</b> Pengguna terdaftar</div>
                                    </div>
                                    <div class="pricing-body">
                                        <div class="features p-1 p-3">
                                            <div class="feature p-1"><b>2X RESOURCE POWER</b></div>
                                            <div class="feature p-1"><b>Unlimited</b> Disk Space</div>
                                            <div class="feature p-1"><b>Unlimited</b> Bandwidth</div>
                                            <div class="feature p-1"><b>Unlimited</b> POP3 Email</div>
                                            <div class="feature p-1"><b>Unlimited</b> Databases</div>
                                            <div class="feature p-1"><b>Unlimited</b> Addon Domains</div>
                                            <div class="feature p-1"><b>Instant</b> Backup</div>
                                            <div class="feature p-1"><b>Domain Gratis</b> Selamanya</div>
                                            <div class="feature p-1"><b>Unlimited SSL</b> Gratis Selamanya</div>
                                            <div class="feature p-1"><b>Private</b> Name Server</div>
                                            <div class="feature p-1"><b>SpamAssasin</b> Mail Protection</div>
                                        </div>
                                    </div>
                                    <div class="pricing-footer">
                                        <div class="choose-now-btn mt-4 mb-4">
                                            <a href="#">Pilih Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 p-0">
                                <div class="pricing-card mt-4">
                                    <div class="pricing-header">
                                        <div class="fs-4 pricing-card-title p-1 font-montserrat-bold">Bisnis</div>
                                        <div class="pricing-card-price">
                                            <div class="text-decoration-line-through">Rp <?=$prices['bisnis']['real_price']?></div>
                                            <div class="d-flex justify-content-center align-items-start">Rp <b
                                                    class="discounted-price font-montserrat-bold"><?=$prices['bisnis']['discounted_price'][0]?></b><b
                                                    class="font-montserrat-bold">.<?=$prices['bisnis']['discounted_price'][1]?></b>/bln</div>
                                        </div>
                                        <div class="registered-users-count p-2"><b>3.552</b> Pengguna terdaftar</div>
                                    </div>
                                    <div class="pricing-body">
                                        <div class="features p-1 p-3">
                                            <div class="feature p-1"><b>3X RESOURCE POWER</b></div>
                                            <div class="feature p-1"><b>Unlimited </b> Disk Space</div>
                                            <div class="feature p-1"><b>Unlimited</b> Bandwidth</div>
                                            <div class="feature p-1"><b>Unlimited</b> POP3 Email</div>
                                            <div class="feature p-1"><b>Unlimited</b> Databases</div>
                                            <div class="feature p-1"><b>Unlimited</b> Addon Domains</div>
                                            <div class="feature p-1"><b>Magic Auto</b> Backup & Restore</div>
                                            <div class="feature p-1"><b>Domain Gratis</b> Selamanya</div>
                                            <div class="feature p-1"><b>Unlimited SSL</b> Gratis Selamanya</div>
                                            <div class="feature p-1"><b>Private</b> Name Server</div>
                                            <div class="feature p-1"><b>Prioritas</b> Layanan Support</div>
                                            <div class="feature p-1">
                                                <i class="bi bi-star-fill fs-6" style="color: #078ce4;"></i>
                                                <i class="bi bi-star-fill fs-6" style="color: #078ce4;"></i>
                                                <i class="bi bi-star-fill fs-6" style="color: #078ce4;"></i>
                                                <i class="bi bi-star-fill fs-6" style="color: #078ce4;"></i>
                                                <i class="bi bi-star-fill fs-6" style="color: #078ce4;"></i>
                                            </div>
                                            <div class="feature p-1"><b>SpamExpert</b> Pro Email Protection</div>
                                        </div>
                                    </div>
                                    <div class="pricing-footer">
                                        <div class="choose-now-btn mt-4 mb-4">
                                            <a href="#">Diskon 40%</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PRICING -->

    <section id="php-advantages" class="mt-5 mb-3">
        <div class="container mb-5">
            <div class="fs-2 font-montserrat-light text-center">
                Powerful dengan Limit PHP yang lebih Besar
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 mt-4">
                    <div class="list-group text-center">
                        <span class="list-group-item fs-6"><i class="bi bi-check-circle-fill float-start fs-5"
                                style="color: #00b100;"></i>
                            max execution time 300s</span>
                        <span class="list-group-item list-group-item-secondary fs-6 border-top-0 border-bottom-0"><i
                                class="bi bi-check-circle-fill float-start fs-5" style="color: #00b100;"></i> max
                            execution
                            time 300s</span>
                        <span class="list-group-item fs-6"><i class="bi bi-check-circle-fill float-start fs-5"
                                style="color: #00b100;"></i> php memory limit 1024 MB</span>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="list-group text-center">
                        <span class="list-group-item fs-6"><i class="bi bi-check-circle-fill float-start fs-5"
                                style="color: #00b100;"></i> post max size 128 MB</span>
                        <span class="list-group-item list-group-item-secondary fs-6 border-top-0 border-bottom-0"><i
                                class="bi bi-check-circle-fill float-start fs-5" style="color: #00b100;"></i> upload max
                            filesize 128 MB</span>
                        <span class="list-group-item fs-6"><i class="bi bi-check-circle-fill float-start fs-5"
                                style="color: #00b100;"></i> max input vars 2500</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <hr class="m-auto">
            </hr>
        </div>
    </section>

    <section id="hosting-package" class="mt-4">
        <div class="container">
            <div class="fs-2 font-montserrat-light text-center">
                Semua Paket Hosting Sudah Termasuk
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 text-center p-5">
                    <img class="mb-3" src="/assets/svg/icon PHP Hosting_PHP Semua Versi.svg"
                        alt="PHP Hosting_PHP Semua Versi" height="auto" width="64px">
                    <h5 class="font-montserrat-bold">PHP Semua Versi</h5>
                    <div class="desc">Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</div>
                </div>
                <div class="col-md-4 text-center p-5">
                    <img class="mb-3" src="/assets/svg/icon PHP Hosting_My SQL.svg" alt="PHP Hosting_My SQL"
                        height="auto" width="64px">
                    <h5 class="font-montserrat-bold">MySQL Versi 5.6</h5>
                    <div class="desc">Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</div>
                </div>
                <div class="col-md-4 text-center p-5">
                    <img class="mb-3" src="/assets/svg/icon PHP Hosting_CPanel.svg" alt="PHP Hosting_CPanel"
                        height="auto" width="64px">
                    <h5 class="font-montserrat-bold">Panel Hosting cPanel</h5>
                    <div class="desc">Kelola website dengan panel canggih yang familiar di hati Anda.</div>
                </div>
                <div class="col-md-4 text-center p-5">
                    <img class="mb-3" src="/assets/svg/icon PHP Hosting_garansi uptime.svg"
                        alt="PHP Hosting_garansi uptime" height="auto" width="64px">
                    <h5 class="font-montserrat-bold">Garansi Uptime 99.9%</h5>
                    <div class="desc">Data center yang mendukung kelangsungan website Anda 24/7.</div>
                </div>
                <div class="col-md-4 text-center p-5">
                    <img class="mb-3" src="/assets/svg/icon PHP Hosting_InnoDB.svg" alt="PHP Hosting_InnoDB"
                        height="auto" width="64px">
                    <h5 class="font-montserrat-bold">Database InnoDB Unlimited</h5>
                    <div class="desc">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</div>
                </div>
                <div class="col-md-4 text-center p-5">
                    <img class="mb-3" src="/assets/svg/icon PHP Hosting_My SQL remote.svg"
                        alt="PHP Hosting_My SQL remote" height="auto" width="64px">
                    <h5 class="font-montserrat-bold">Wildcard Remote MySQL</h5>
                    <div class="desc">Mendukung s/d 25 max_user_connections dan 100 max_connections.</div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <hr class="m-auto">
            </hr>
        </div>
    </section>

    <section id="laravel-full-support" class="mt-5">
        <div class="container border-bottom">
            <div class="fs-2 font-montserrat-light text-center">
                Mendukung Penuh Framework Laravel
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-5 text-start">
                    <div class="desc font-nunitosans-light mb-3 mt-3">
                        Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami
                        mendukung penuh framework favorit Anda
                    </div>
                    <div class="list-item pt-1 pb-2 font-montserrat-light"><span><i
                                class="bi bi-check-circle-fill float-start me-2" style="color: #00b100;"></i>Install
                            Laravel 1 <b class="fw-bold">klik</b> dengan Softaculous
                            Installer.</span></div>
                    <div class="list-item pt-1 pb-2 font-montserrat-light"><span><i
                                class="bi bi-check-circle-fill float-start me-2" style="color: #00b100;"></i>Mendukung
                            ekstensi <b class="fw-bold">PHP MCrypt, phar, mbstring, json,</b>
                            dan <b class="fw-bold">fileinfo.</b></span></div>
                    <div class="list-item pt-1 pb-2 font-montserrat-light"><span><i
                                class="bi bi-check-circle-fill float-start me-2" style="color: #00b100;"></i>Tersedia <b
                                class="fw-bold">Composer</b> dan <b class="fw-bold">SSH</b> untuk menginstal
                            packages pilihan Anda.</span></div>
                    <div class="note pt-3">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</div>
                    <div class="mt-5 mb-5">
                        <a href="#" class="select-hosting-btn">Pilih Hosting Anda</a>
                    </div>
                </div>
                <div class="col-xl-5 mt-5 text-center text-lg-end">
                    <img class="mt-3" src="/assets/svg/illustration banner support laravel hosting.svg"
                        alt="illustration banner support laravel hosting" height="95%" width="auto">
                </div>
            </div>
        </div>
    </section>

    <section id="php-modules" class="mt-5">
        <div class="container">
            <div class="fs-2 font-montserrat-light text-center mb-5">
                Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <div class="col-md-3 ps-5 text-center text-md-start">
                            <div class="php-module">IcePHP</div>
                            <div class="php-module">apc</div>
                            <div class="php-module">apcu</div>
                            <div class="php-module">apm</div>
                            <div class="php-module">ares</div>
                            <div class="php-module">bcmath</div>
                            <div class="php-module">bcompiler</div>
                            <div class="php-module">big_int</div>
                            <div class="php-module">bitset</div>
                            <div class="php-module">bloomy</div>
                            <div class="php-module">bz2_filter</div>
                            <div class="php-module">clamav</div>
                            <div class="php-module">coin_acceptor</div>
                            <div class="php-module">crack</div>
                            <div class="php-module">dba</div>
                        </div>
                        <div class="col-md-3 ps-5 text-center text-md-start">
                            <div class="php-module">http</div>
                            <div class="php-module">huffman</div>
                            <div class="php-module">idn</div>
                            <div class="php-module">igbinary</div>
                            <div class="php-module">imagick</div>
                            <div class="php-module">imap</div>
                            <div class="php-module">inclued</div>
                            <div class="php-module">inotify</div>
                            <div class="php-module">interbase</div>
                            <div class="php-module">intl</div>
                            <div class="php-module">ioncube_loader</div>
                            <div class="php-module">ioncube_loader_4</div>
                            <div class="php-module">jsmin</div>
                            <div class="php-module">json</div>
                            <div class="php-module">ldap</div>
                        </div>
                        <div class="col-md-3 ps-5 text-center text-md-start">
                            <div class="php-module">nd_pdo_mysql</div>
                            <div class="php-module">oauth</div>
                            <div class="php-module">oci8</div>
                            <div class="php-module">odbc</div>
                            <div class="php-module">opcache</div>
                            <div class="php-module">pdf</div>
                            <div class="php-module">pdo</div>
                            <div class="php-module">pdo_dblib</div>
                            <div class="php-module">pdo_firebird</div>
                            <div class="php-module">pdo_mysql</div>
                            <div class="php-module">pdo_odbc</div>
                            <div class="php-module">pdo_pgsql</div>
                            <div class="php-module">pdo_sqlite</div>
                            <div class="php-module">pgsql</div>
                            <div class="php-module">phalcon</div>
                        </div>
                        <div class="col-md-3 ps-5 text-center text-md-start">
                            <div class="php-module">stats</div>
                            <div class="php-module">stem</div>
                            <div class="php-module">stomp</div>
                            <div class="php-module">suhosin</div>
                            <div class="php-module">sybase_ct</div>
                            <div class="php-module">sysvmsg</div>
                            <div class="php-module">sysvsem</div>
                            <div class="php-module">sysvshm</div>
                            <div class="php-module">tidy</div>
                            <div class="php-module">timezonedb</div>
                            <div class="php-module">trader</div>
                            <div class="php-module">transit</div>
                            <div class="php-module">uploadprogress</div>
                            <div class="php-module">uri_template</div>
                            <div class="php-module">uuid</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="more-php-modules-btn" href="#">Selengkapnya</a>
            </div>
        </div>
    </section>

    <section id="linux-hosting" class="mt-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 text-start ps-5 pe-5">
                    <div class="row">
                        <div class="col">
                            <div class="fs-2 font-montserrat-light text-start">
                                Linux Hosting yang Stabil dengan Teknologi LVE
                            </div>
                        </div>
                    </div>
                    <div class="desc font-nunitosans-light mb-3 mt-3">
                        SuperMicro <b class="fw-bold">Intel Xeon 24-Cores</b> server dengan RAM <b class="fw-bold">128
                            GB</b> dan teknologi <b class="fw-bold">LVE CloudLinux</b> untuk stabilitas server Anda.
                        Dilengkapi dengan <b class="fw-bold">SSD</b> untuk kecepatan <b class="fw-bold">MySQL</b> dan
                        caching, Apache load balancer berbasis LiteSpeed Technologies, <b class="fw-bold">CageFS</b>
                        security, <b class="fw-bold">Raid-10</b> protection dan auto backup untuk keamanan website PHP
                        Anda.
                    </div>
                    <div class="mt-5 mb-5">
                        <a href="#" class="select-hosting-btn">Pilih Hosting Anda</a>
                    </div>
                </div>
                <div class="col-xl-6 mt-5 text-center">
                    <img class="img-fluid mt-3" src="/assets/images/Image support.png" alt="Image support">
                </div>
            </div>
        </div>
    </section>

    <section id="social">
        <div class="container p-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <span class="note">
                        Bagikan jika Anda menyukai halaman ini.
                    </span>
                </div>
                <div class="col-md-6 d-flex justify-content-md-center align-items-center">
                    <span class="share d-flex justify-content-center align-items-center"><i class="bi bi-facebook fs-2"
                            style="color: #24589a;"></i> <span>80k</span> </span>
                    <span class="share d-flex justify-content-center align-items-center"><i class="bi bi-twitter fs-2"
                            style="color: #09adf4;"></i> <span>450</span> </span>
                    <span class="share d-flex justify-content-center align-items-center"><i class="bi bi-google fs-2"
                            style="color: #f85037;"></i> <span>1900</span> </span>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container pt-5 pb-5 ps-4">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 border-end font-montserrat-light">
                    Perlu <span class="font-montserrat-bold">BANTUAN?</span> Hubungi Kami : <span class="font-montserrat-bold">0274-5305505</span>
                </div>
                <div class="col-md-4 text-center">
                    <a class="live-chat-btn fs-5" href="#">
                        <div class="d-flex justify-content-start align-items-center">
                            <i class="bi bi-chat-right-fill me-4 fs-3"></i> <span>Live Chat</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-3 col-sm-6 mt-5">
                    <h6 class="footer-title mt-4 mb-4">HUBUNGI KAMI</h6>
                    <div class="footer-item">0274-5305505</div>
                    <div class="footer-item">Senin - Minggu</div>
                    <div class="footer-item">24 Jam Nonstop</div>
                    <div class="footer-item mt-3">
                        Jl. Selokan Mataram Monjali Karangjati MT I/304 Sinduadi, Mlati, Sleman Yogyakarta 55284
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mt-5">
                    <h6 class="footer-title mt-4 mb-4">LAYANAN</h6>
                    <div class="footer-item"><a href="#">Domain</a></div>
                    <div class="footer-item"><a href="#">Shared Hosting</a></div>
                    <div class="footer-item"><a href="#">Cloud VPS Hosting</a></div>
                    <div class="footer-item"><a href="#">Managed VPS Hosting</a></div>
                    <div class="footer-item"><a href="#">Web Builder</a></div>
                    <div class="footer-item"><a href="#">Keamanan SSL/HTTPS</a></div>
                    <div class="footer-item"><a href="#">Jasa Pembuatan Website</a></div>
                    <div class="footer-item"><a href="#">Program Affiliasi</a></div>
                </div>
                <div class="col-md-3 col-sm-6 mt-5">
                    <h6 class="footer-title mt-4 mb-4">SERVICE HOSTING</h6>
                    <div class="footer-item"><a href="#">Hosting Murah</a></div>
                    <div class="footer-item"><a href="#">Hosting Indonesia</a></div>
                    <div class="footer-item"><a href="#">Hosting Singapura SG</a></div>
                    <div class="footer-item"><a href="#">Hosting PHP</a></div>
                    <div class="footer-item"><a href="#">Hosting Wordpress</a></div>
                    <div class="footer-item"><a href="#">Hosting Laravel</a></div>
                </div>
                <div class="col-md-3 col-sm-6 mt-5">
                    <h6 class="footer-title mt-4 mb-4">SERVICE HOSTING</h6>
                    <div class="footer-item"><a href="#">Knowledgebase</a></div>
                    <div class="footer-item"><a href="#">Blog</a></div>
                    <div class="footer-item"><a href="#">Cara Pembayaran</a></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6 mt-5">
                    <h6 class="footer-title mt-4 mb-4">TENTANG KAMI</h6>
                    <div class="footer-item"><a href="#">Tim Niagahoster</a></div>
                    <div class="footer-item"><a href="#">Karir</a></div>
                    <div class="footer-item"><a href="#">Events</a></div>
                    <div class="footer-item"><a href="#">Penawaran & Promo Spesial</a></div>
                    <div class="footer-item"><a href="#">Kontak Kami</a></div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-5">
                    <h6 class="footer-title mt-4 mb-4">KENAPA PILIH NIAGAHOSTER?</h6>
                    <div class="footer-item"><a href="#">Support Terbaik</a></div>
                    <div class="footer-item"><a href="#">Garansi Harga Termurah</a></div>
                    <div class="footer-item"><a href="#">Domain Gratis Selamanya</a></div>
                    <div class="footer-item"><a href="#">Datacenter Hosting Terbaik</a></div>
                    <div class="footer-item"><a href="#">Review Pelanggan</a></div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-5">
                    <h6 class="footer-title mt-4 mb-4">NEWSLETTER</h6>
                    <!-- <div class="row align-items-center newsletter-form mb-2">
                        <div class="col-6 text-start">
                            <input type="email" class="input-email w-auto" placeholder="Email">
                        </div>
                        <div class="col-6 text-end">
                            <button class="newsletter-subscribe-btn">Berlangganan</button>
                        </div>
                    </div> -->

                    <div class="subscribe-wrapper">
                        <div class="subscribe">
                            <form class="form-subscribe">
                                <input type="email" class="input-subscribe w-100" name="email" placeholder="Email"
                                    autocomplete="off">
                                <button type="submit" class="subscribe-btn"> Berlangganan </button>
                                <label for="subscribe-email" class="subscribe-message"></label>
                            </form>
                        </div>
                    </div>

                    <!-- <div class="newsletter-form">
                        <div class="input-group align-items-center">
                            <input type="email" class="form-control" placeholder="Email">
                            <button class="btn" type="button">Berlangganan</button>
                        </div>
                    </div> -->
                    <div class="note">Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</div>
                </div>
                <div class="col-lg-3 col-sm-6 d-flex justify-content-evenly align-items-center mt-5">
                    <i class="bi bi-facebook fs-1" style="color: white;"></i>
                    <i class="bi bi-twitter fs-1" style="color: white;"></i>
                    <i class="bi bi-google fs-1" style="color: white;"></i>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <h6 class="footer-title mb-2">PEMBAYARAN</h6>

                    <span class="payment-method"><img src="/assets/svg/bca.svg" alt="" height="32" width="auto"></span>
                    <span class="payment-method"><img src="/assets//svg/mandiri.svg" alt="" height="32"
                            width="auto"></span>
                    <span class="payment-method"><img src="/assets/svg/bni.svg" alt="" height="32" width="auto"></span>
                    <span class="payment-method"><img src="/assets/svg/visa.svg" alt="" height="32" width="auto"></span>
                    <span class="payment-method"><img src="/assets/svg/master.svg" alt="" height="32"
                            width="auto"></span>
                    <span class="payment-method"><img src="/assets/svg/atm-bersama.svg" alt="" height="32"
                            width="auto"></span>
                    <span class="payment-method"><img src="/assets/svg/permata-bank.svg" alt="" height="32"
                            width="auto"></span>
                    <span class="payment-method"><img src="/assets/svg/prima.svg" alt="" height="32"
                            width="auto"></span>
                    <span class="payment-method"><img src="/assets/svg/alto.svg" alt="" height="32" width="auto"></span>

                    <div class="note mt-4">Aktifasi instan dengan e-Payment. Hosting dan domain langsung aktif!</div>
                </div>
            </div>
            <div class="row footer-bottom mt-5">
                <div class="col-md-8">
                    <div>
                        Copyright &copy;2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and
                        DC Biznet Technovillage Jakarta
                    </div>
                    <div class="mt-1">Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing
                        technology</div>
                </div>
                <div class="col-md-4 text-center">
                    <a href="#">Syarat dan Ketentuan</a> | <a href="#">Kebijakan Privasi</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>