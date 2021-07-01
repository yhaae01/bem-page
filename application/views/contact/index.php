<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/contact.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>">
</head>

<body>
    <div class="content-wrapper">
        <div class="section-header">
            <header class="header-responsive" id="headRespawnd">
                <div class="card-logo-header">
                    <img src="<?= base_url() ?>assets/img/logo bem.png" alt="Logo BEM" class="logo-bem">
                    <h2 class="title-brand">BEM UBSI BOGOR</h2>
                </div>
                <nav class="card-nav-link" id="Navbar">
                    <a href="<?= base_url('home') ?>" class="link-header">
                        Home
                    </a>
                    <a href="<?= base_url('home') ?>" class="link-header">
                        About Us
                    </a>
                    <a href="<?= base_url('gallery') ?>" class="link-header">
                        Gallery
                    </a>
                    <a href="<?= base_url('contact') ?>" class="link-header active">
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
                <h2 class="title-contact">
                    Kontak
                </h2>
            </div>
        </div>
        <div class="section-body-contact">
            <div class="card-content-contact">
                <div class="card-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5075290076015!2d106.78589831418604!3d-6.583653666188248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c44c0bb80afb%3A0x8b1ac66abca140b1!2sJl.%20Merdeka%20No.168%2C%20RT.01%2FRW.05%2C%20Ciwaringin%2C%20Kecamatan%20Bogor%20Tengah%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016124!5e0!3m2!1sen!2sid!4v1610288099666!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:1px solid #eaeaea; box-shadow: 2px 2px 9px hsl(0, 0%, 80%); border-radius: 20px;" class="maps" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="desc-address-maps">
                    <div class="card-desc-address">
                        <h2 class="title-desc-maps">
                            Sekretariat
                        </h2>
                        <p class="subtitle-desc-maps">
                            Jl. Merdeka No.168, RT.01/RW.05, Ciwaringin, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16124
                        </p>
                    </div>
                    <div class="card-desc-address">
                        <h2 class="title-desc-maps">
                            Nomor Telepon / WA
                        </h2>
                        <p class="subtitle-desc-maps">
                            Menteri Komunikasi dan Informatika
                        </p>
                        <p class="subtitle-desc-maps">
                            - 085782727479 (Abdul Aziz)
                        </p>
                        <p class="subtitle-desc-maps">
                            Presiden Mahasiswa
                        </p>
                        <p class="subtitle-desc-maps">
                            - 085771434638 (Thifal Pratama)
                        </p>
                    </div>
                    <div class="card-desc-address">
                        <h2 class="title-desc-maps">
                            Email
                        </h2>
                        <p class="subtitle-desc-maps">
                            bemubsi.bogor27@gmail.com
                        </p>
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
<script src="<?= base_url() ?>assets/js/main.js"></script>

</html>