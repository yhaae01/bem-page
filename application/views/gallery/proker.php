<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/article.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>">
</head>

<body>
    <div class="content-wrapper">
        <header class="header-responsive" id="headRespawnd">
            <div class="card-logo-header">
                <img src="<?= base_url(); ?>assets/img/logo bem.png" alt="Logo BEM" class="logo-bem">
                <div class="pipe">|</div>
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
        <div class="section-body-article">
            <div class="overlay-bg"></div>
            <h2 class="title-page">
                Kegiatan Terbaru
            </h2>
            <div class="card-wrapper-content-article">
                <div class="card-content-article">
                    <div class="card-image-article">
                        <img src="<?= base_url(); ?>assets/img/image-article.png" alt="Image Article" class="image-article">
                    </div>
                    <div class="card-article">
                        <h2 class="title-article">
                            Pengabdian Masyarakat
                        </h2>
                        <article>
                            <p class="content-article">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quis a perferendis saepe obcaecati praesentium rerum aspernatur itaque possimus aperiam laborum repellendus delectus, aliquam, non libero molestias? Illum quidem autem modi cumque temporibus. Sequi neque, fugiat laudantium quibusdam, velit nobis labore debitis aspernatur tenetur voluptatum quae ipsum nostrum, totam illo.[1]
                            </p>
                            <p class="content-article">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea iste excepturi dolorem fugiat, vel quisquam pariatur accusantium veritatis laudantium at blanditiis quia a sequi quaerat perferendis saepe nihil incidunt alias?.[2]
                            </p>
                        </article>
                    </div>
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