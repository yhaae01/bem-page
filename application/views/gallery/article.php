<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/article.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>">
</head>

<body>
    <div class="content-wrapper">
        <header class="header-responsive" id="headRespawnd">
            <div class="card-logo-header">
                <img src="./assets/img/logo bem.png" alt="Logo BEM" class="logo-bem">
                <div class="pipe">|</div>
                <h2 class="title-brand">BEM UBSI BOGOR</h2>
            </div>
            <nav class="card-nav-link" id="Navbar">
                <a href="index.html" class="link-header">
                    Home
                </a>
                <a href="#" class="link-header">
                    About Us
                </a>
                <a href="gallery-revisi.html" class="link-header active">
                    Gallery
                </a>
                <a href="contact-revisi.html" class="link-header">
                    Contact
                </a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars" id="iconNav"></i>
                </a>
            </nav>
        </header>
        <div class="section-body-article">
            <div class="overlay-bg">

            </div>
            <h2 class="title-page">
                Kegiatan Terbaru
            </h2>
            <div class="card-wrapper-content-article">
                <div class="card-content-article">
                    <div class="card-image-article">
                        <img src="./assets/img/image-article.png" alt="Image Article" class="image-article">
                    </div>
                    <div class="card-article">
                        <h2 class="title-article">
                            WEBINAR ORGANISASI
                        </h2>
                        <article>
                            Webinar (akronim dari web seminar) adalah istilah umum dalam dunia kajian yang merujuk
                            kepada kegiatan seminar yang dilakukan secara daring, menggunakan situs web atau aplikasi
                            tertentu berbasis internet. Cara ini memungkinkan pembicara atau pengisi materi membagikan
                            informasi mereka jarak jauh, lewat internet maupun media elektronik lainnya. Selain untuk
                            kepentingan kajian akademik, webinar juga dapat dimanfaatkan untuk kepentingan marketing,
                            koordinasi antarlembaga, dan pembelajaran jarak jauh. Untuk webinar terbatas, agar dapat
                            berpartisipasi secara aktif, peserta webinar biasanya mendaftar terlebih dahulu.
                        </article>
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
        scrollFunction()
    };

    function scrollFunction() {
        var s = document.getElementById("headRespawnd");
        if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
            s.style.position = "fixed";
            s.style.backgroundColor = "#1e2c91";
            s.style.top = "0px";
            s.style.zIndex = "1";
        } else if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
            s.style.position = "relative";
            s.style.backgroundColor = "auto";
            s.style.top = "0px";
            s.style.zIndex = "2";
        } else {
            s.style.position = "relative";
            s.style.backgroundColor = "auto";
            s.style.top = "0px";
            s.style.zIndex = "2";
        }
    }
</script>

</html>