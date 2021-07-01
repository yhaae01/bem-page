<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/contact.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>">
</head>

<body>
    <div class="content-wrapper">
        <div class="section-header">
            <header class="header-responsive" id="headRespawnd">
                <div class="card-logo-header">
                    <img src="./assets/img/logo bem.png" alt="Logo BEM" class="logo-bem">
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
        <footer class="footer-responsive">
            <div class="card-content-footer">
                <div class="card-desc-footer">
                    <div class="card-image-big">
                        <img src="./assets/img/Logo UBSI 1.png" alt="Logo BSI Footer" class="card-image-footer-bsi">
                        <img src="./assets/img/logo bem.png" alt="Logo BEM Footer" class="card-image-footer-bem">
                    </div>
                    <div class="card-image-small">
                        <img src="./assets/img/logo-delarosa.png" alt="Logo Kabinet Delarosa" class="card-image-footer-delarosa">
                        <img src="./assets/img/BSC@300x-8.png" alt="Logo BSC" class="card-image-footer-bsc">
                    </div>
                    <div class="card-desc-footer-bem">
                        <h2>Badan Eksekutif Mahasiswa</h2>
                        <p>Universitas Bina Sarana Informatika</p>
                        <p>PSDKU Kota Bogor</p>
                        <p>Kabinet Delarosa</p>
                    </div>
                </div>
                <div class="card-sosmed">
                    <div class="card-sosmed-footer">
                        <h2>Social Media :</h2>
                        <a href="#" class="link-sosmed-instagram">
                            <img src="./assets/img/icon-ig.png" alt="Icon Instagram Footer">
                        </a>
                        <a href="#" class="link-sosmed-email">
                            <img src="./assets/img/icon-email.png" alt="Icon Email Footer">
                        </a>
                    </div>
                    <div class="card-address-footer">
                        <img src="./assets/img/icon-address.png" alt="Icon Address Footer" class="card-icon-address">
                        <p class="desc-address">Jl. Merdeka No.168, RT.01/RW.05, Ciwaringin, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16124</p>
                    </div>
                </div>
            </div>
            <div class="copyright">
                Copyright 2021 - BEM UBSI Bogor
            </div>
        </footer>
    </div>
</body>
<script src="./assets/js/main.js"></script>
<script>
    window.onscroll = function() {
        scrollFunctionContact()
    };

    function scrollFunctionContact() {
        var s = document.getElementById('headRespawnd');
        if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
            s.style.position = "fixed";
            s.style.backgroundColor = "#1e2c91";
            s.style.top = "0px";
            s.style.width = "100%";
            s.style.zIndex = "3";
        } else if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
            s.style.position = "relative";
            s.style.backgroundColor = "auto";
            s.style.top = "0px";
            s.style.width = "100%";
            s.style.zIndex = "3";
        } else {
            s.style = "none";
        }
    }
</script>

</html>