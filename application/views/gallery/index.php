<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/gallery.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>">
</head>

<body>
    <div class="content-wrapper">
        <div class="section-header">
            <header class="header-responsive" id="headRespawnd">
                <div class="card-logo-header">
                    <img src="<?= base_url(); ?>assets/img/logo bem.png" alt="Logo BEM" class="logo-bem">
                    <h2 class="title-brand">BEM UBSI BOGOR</h2>
                </div>
                <nav class="card-nav-link" id="Navbar">
                    <a href="<?= base_url('home') ?>" class="link-header">
                        Home
                    </a>
                    <a href="<?= base_url('home') ?>" class="link-header">
                        About Us
                    </a>
                    <a href="<?= base_url('gallery') ?>" class="link-header active">
                        Gallery
                    </a>
                    <a href="<?= base_url('contact') ?>" class="link-header">
                        Contact
                    </a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars" id="iconNav"></i>
                    </a>
                </nav>
            </header>
            <div class="container-header-contact">
                <div class="overlay-bg">

                </div>
                <h2 class="title-gallery">
                    Gallery Kegiatan
                </h2>
            </div>
        </div>
        <div class="section-body-gallery">
            <div class="desc-gallery">

                <h2 class="title-content-gallery">
                    Kegiatan Terbaru
                </h2>
            </div>
            <div class="card-content-gallery">
                <div class="card-image-gallery-kegiatan">
                    <?php foreach ($kegiatan as $k) { ?>
                        <a href="<?= base_url(); ?>gallery/DetailArticle/<?php echo $k['url'] ?>" class="link-card-gallery">
                            <img src="<?= base_url('assets/img/cover/' . $k['cover']) ?>" alt="" class="img-gallery-kegiatan" width="300" style="border-radius: 5%;">
                            <h2 class="title-gallery-kegiatan"><?= $k['title'] ?></h2>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="desc-gallery">
                <h2 class="title-content-gallery">
                    Program Kerja
                </h2>
            </div>
            <div class="card-content-gallery">
                <div class="card-image-proker-kegiatan">
                    <?php foreach ($proker as $p) { ?>
                        <a href="<?= base_url(); ?>gallery/DetailArticle/<?php echo $p['url'] ?>" class="link-card-gallery">
                            <img src="<?= base_url('assets/img/cover/' . $p['cover']) ?>" alt="" class="img-gallery-kegiatan" width="300" style="border-radius: 5%;">
                            <h2 class="title-gallery-kegiatan"><?= $p['title'] ?></h2>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="desc-gallery">
                <h2 class="title-content-gallery">
                    Lain - Lain
                </h2>
            </div>
            <div class="card-content-gallery">
                <div class="card-image-gallery-kegiatan">
                    <?php foreach ($lainnya as $l) { ?>
                        <a href="<?= base_url(); ?>gallery/DetailArticle/<?php echo $l['url'] ?>" class="link-card-gallery">
                            <img src="<?= base_url('assets/img/cover/' . $l['cover']) ?>" alt="" class="img-gallery-kegiatan" width="300" style="border-radius: 5%;">
                            <h2 class="title-gallery-kegiatan"><?= $l['title'] ?></h2>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <footer class="text-center text-lg-start bg-light text-muted">

            <!-- Section: Links  -->
            <section id="footer">
                <div class="container text-center text-md-start mt-5 p-4">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Badan Eksekutif Mahasiswa
                            </h6>
                            <p>
                                Unviersitas Bina Sarana Informatika
                            </p>
                            <p>
                                PSDKU Kota Bogor
                            </p>
                            <p>
                                Kabinet Delarosa
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <p>
                                <img src="<?= base_url(); ?>assets/img/Logo UBSI 1.png" height="80px">
                            </p>
                            <p>
                                <img src="<?= base_url(); ?>assets/img/logo bem.png" height="80px">
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <p>
                                <img src="<?= base_url(); ?>assets/img/logo-delarosa.png" height="85px">
                            </p>
                            <p>
                                <img src="<?= base_url(); ?>assets/img/BSC@300x-8.png" height="85px">
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-2">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Contact
                            </h6>
                            <p><i class="fas fa-home me-3"></i> Jl. Merdeka No.168, RT.01/RW.05, Ciwaringin, Kecamatan Bogor Tengah,
                                Kota Bogor, Jawa Barat 16124</p>
                            <p>
                                <i class="fab fa-instagram me-3"></i>
                                @bemubsibogor
                            </p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                © <?= date('Y') ?> Copyright:
                <a class="text-reset fw-bold" href="">BEM UBSI BOGOR</a> - <a href="https://www.linkedin.com/in/surya-intan-permana-b60766214/" target="blank">Surya Intan Permana</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
</body>
<script src="<?= base_url(); ?>assets/js/main.js"></script>

</html>