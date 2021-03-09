<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/index.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>
    <div class="content-wrapper">
        <div class="section-header">
            <header class="bem-header " id="headHomeRespawnd">
                <div class="container-brand-bem">
                    <div class="container-brand-logo-bem">
                        <img src="<?= base_url(); ?>assets/img/logo bem.png" alt="Logo" class="brand-logo">
                    </div>
                    <div class="pipe">|</div>
                    <div class="container-brand-title-bem">
                        <h2 class="title-brand">
                            BEM UBSI BOGOR
                        </h2>
                    </div>
                </div>
                <nav class="card-nav-link" id="Navbar">
                    <a href="<?= base_url('home') ?>" class="link-header active">
                        Home
                    </a>
                    <a href="#" class="link-header">
                        About Us
                    </a>
                    <a href="<?= base_url('gallery') ?>" class="link-header">
                        Gallery
                    </a>
                    <a href="<?= base_url('contact') ?>" class="link-header">
                        Contact
                    </a>
                    <a href="javascript:void(0);" class="icon" onclick="responsiveHeader()">
                        <i class="fa fa-bars" id="iconNav"></i>
                    </a>
                </nav>
            </header>

            <div class="container-header">
                <img src="<?= base_url(); ?>assets/img/icon-cover.png" alt="Image Cover" class="image-cover-card">
                <img src="<?= base_url(); ?>assets/img/Ellipse 1.png" alt="Image Cover" class="image-cover-ellipse">
            </div>
        </div>
        <div class="section-content-header">
            <h2 class="landing-title">
                Badan Eksekutif Mahasiswa UBSI PSDKU Bogor
            </h2>
            <h4 class="content-landing">
                BEM UBSI Bogor adalah organisasi kemahasiswaan dalam ikatan moral dan intelektual yang menampung dan
                menyalurkan aspirasi mahasiswa
                Universitas BSI kampus PSDKU Bogor , dalam memperoleh hak dan kewajibannya sebagai mahasiswa.
            </h4>
        </div>
        <div class="section-content-body">
            <div class="container-ellipse2">
                <img src="<?= base_url(); ?>assets/img/Ellipse-2.png" alt="Ellipse 2" class="ellipse-2-card">
                <img src="<?= base_url(); ?>assets/img/logo bem.png" alt="Logo Ellipse Body" class="logo-ellipse-body">
                <div class="desc-title-body">
                    <h3 class="title-content-body">
                        About Us
                    </h3>
                    <h2 class="subtitle-content-body">
                        Visi Misi Dan Sejarah
                    </h2>

                    <div class="container-sejarah">
                        <p>Sebelum menjadi Badan Eksekutif Mahasiswa(BEM). Awalnya BEM adalah Himpunan Mahasiwa. Yang di
                            dirikan pada tahun 2004, di kampus UBSI Merdeka. Berawal dari inisiatif mahasiswa yang ingin
                            memiliki wadah untuk mahasiswa bisa berproses untuk menjadi mahasiswa yang sejatinya, yang
                            memenuhi 3 Peranan mahasiswa, serta Mengamalkan Tridharma perguruan tinggi, Wadah untuk
                            penghimpunan aspirasi dan juga inovasi.
                        </p>
                        <p>Setelah 4 Tahun menjadi HIMA (Himpunan Mahasiswa). Organisasi ini bertranformasi menjadi
                            Senat Mahasiswa yang di dirikan pada tanggal 28 Oktober 2008, Dan di dirikan Oleh Kang Acep.
                            Beliau adalah Mahasiswa yang menginiasi adanya senat, dan juga Kampus UBSI PSDKU yang saat
                            itu masih menjadi AMIK, Telah memenuhi syarat untuk bisa membangun lembaga eksekutif
                            mahasiswa.</p>
                        <p>Dan Setelah 11 Tahun menjadi Senat Mahasiswa, dan di karenakan AMIK BSI Bertransformasi
                            menjadi UBSI (Universitas Bina Sarana Informatika). Maka Senat Pun Bertransformasi menjadi
                            BEM UBSI PSDKU BOGOR Hingga saat ini.</p>
                    </div>
                    <div class="container-content-body">
                        <div class="container-definisi">
                            <div class="container-content-definisi">
                                <h2 class="title-content-definisi">
                                    Definisi
                                </h2>
                                <p>
                                    BEM UBSI Kota Bogor adalah organisasi kemahasiswaan dalam ikatan moral dan
                                    intelektual yang menampung dan menyalurkan aspirasi mahasiswa Universitas BSI kampus
                                    PSDKU Bogor dalam memperoleh hak dan kewajibannya sebagai mahasiswa.
                                </p>
                            </div>
                            <div class="container-icon-definisi">
                                <img src="<?= base_url(); ?>assets/img/icon-definisi.png" alt="Icon Definisi" class="icon-definisi-card">
                            </div>
                        </div>
                        <div class="container-landasan-hukum">
                            <div class="container-icon-landasan-hukum">
                                <img src="<?= base_url(); ?>assets/img/icon-landasan-hukum.png" alt="Icon Landasan Hukum" class="icon-landasan-hukum">
                            </div>
                            <div class="container-content-landasan-hukum">
                                <h2 class="title-content-landasan-hukum">
                                    Landasan Hukum
                                </h2>
                                <p>
                                    BEM UBSI Kota BOGOR berasaskan pada:
                                </p>
                                <ul class="ul-landasan-hukum">
                                    <li>
                                        1. Pancasila.
                                    </li>
                                    <li>
                                        2. UUD 1945.
                                    </li>
                                    <li>
                                        3. Tri Dharma Perguruan Tinggi.
                                    </li>
                                    <li>
                                        4. Status UBSI.
                                    </li>
                                    <li>
                                        5. AD/ART BEM UBSI Kampus Kota BOGOR.
                                    </li>
                                    <li>
                                        6. Keputusan Rektor UBSI Nomor 225/1.02/UBSI/2018 tentang organisasi
                                        kemahasiswaaan di lingkungan UBSI.
                                    </li>
                                    <li>
                                        7. Dengan menjunjung tinggi moral dan akhlaq
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="container-visi-bem">
                            <div class="container-content-visi-bem">
                                <h2 class="title-bem">
                                    Visi BEM UBSI Bogor
                                </h2>
                                <p>
                                    Meningkatkan dan mengembangkan fungsi BEM sebagai wadah aspiratif mahasiswa UBSI
                                    PSDKU Bogor
                                </p>
                            </div>
                            <div class="container-icon-visi-bem">
                                <img src="<?= base_url(); ?>assets/img/icon-visi-bem.png" alt="Icon Visi Misi Bem" class="icon-visi-bem-card">
                            </div>
                        </div>
                        <div class="container-misi-bem">
                            <div class="container-icon-misi-bem">
                                <img src="<?= base_url(); ?>assets/img/icon-misi-bem.png" alt="Icon Misi Bem" class="icon-misi-bem-card">
                            </div>
                            <div class="container-content-misi-bem">
                                <h2 class="title-misi-bem">
                                    Misi BEM UBSI Bogor
                                </h2>
                                <ul class="ul-misi-bem">
                                    <li>
                                        1. Mengaktifkan kegiatan Mahasiswa.
                                    </li>
                                    <li>
                                        2. Menciptakan dan Menjaga kepercayaan pihak internal dan eksternal.
                                    </li>
                                    <li>
                                        3. Menciptakan lingkungan kampus yang kondusif.
                                    </li>
                                    <li>
                                        4. Membantu menjembatani dan memberi advokasi kepada Mahasiswa.
                                    </li>
                                    <li>
                                        5. Meningkatkan kepedulian dan Kesadaran Mahasiswa terhadap kehidupan sosial
                                        masyarakat.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content-structure">
            <div class="container-card-structure">
                <img src="<?= base_url(); ?>assets/img/Ellipse-2.png" alt="Logo Ellipse Structure" class="logo-ellipse-structure">
                <img src="<?= base_url(); ?>assets/img/logo-delarosa.png" alt="Logo Delarosa Structure" class="logo-delarosa-structure">
                <div class="desc-structure">
                    <div class="container-wrapper-title-structure">
                        <h3 class="title-content-structure">
                            Kabinet Delarosa
                        </h3>
                        <h2 class="subtitle-content-structure">
                            Susunan Kepengurusan
                        </h2>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-2">
                                <button class="card" data-toggle="modal" data-target="#modalbph">
                                    <img src="<?= base_url(); ?>assets/img/BPH.png" alt="" class="card-image-structure-group">
                                    <h5 class="title-card-structure">Badan Pengurus Harian</h5>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-2"><button class="card" data-toggle="modal" data-target="#modalkemenko">
                                    <img src="<?= base_url(); ?>assets/img/Men ekonomi@300x-8.png" alt="" class="card-image-structure-group">
                                    <h4 class="title-card-structure">Kementrian Ekonomi</h4>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-2"><button class="card" data-toggle="modal" data-target="#modalkemenag">
                                    <img src="<?= base_url(); ?>assets/img/Men Agama@300x-8.png" alt="" class="card-image-structure-group">
                                    <h4 class="title-card-structure">Kementrian Agama</h4>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-2"><button class="card" data-toggle="modal" data-target="#modalkemenor">
                                    <img src="<?= base_url(); ?>assets/img/Men Olahraga@300x-8.png" alt="" class="card-image-structure-group">
                                    <h4 class="title-card-structure">Kementrian Olahraga</h4>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-2"><button class="card" data-toggle="modal" data-target="#modalkemendagri">
                                    <img src="<?= base_url(); ?>assets/img/Mendikbud@300x-8.png" alt="" class="card-image-structure-group">
                                    <h5 class="title-card-structure">Kementrian Dalam Negeri</h5>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-2"><button class="card" data-toggle="modal" data-target="#modalkemendikbud">
                                    <img src="<?= base_url(); ?>assets/img/Mendagri@300x-8.png" alt="" class="card-image-structure-group">
                                    <h5 class="title-card-structure">Kementrian Pendidikan & Budaya</h5>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-2"><button class="card" data-toggle="modal" data-target="#modalkemenlu">
                                    <img src="<?= base_url(); ?>assets/img/Menlu@300x-8.png" alt="" class="card-image-structure-group">
                                    <h5>Kementrian Luar Negri</h5>
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-2"><button class="card" data-toggle="modal" data-target="#modalkemenkominfo">
                                    <img src="<?= base_url(); ?>assets/img/Kominfo@300x-8.png" alt="" class="card-image-structure-group">
                                    <h5 class="title-card-structure">Kementrian Komunikasi Dan Informatika</h5>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content-patner">
            <div class="card-content-patner">
                <h2>Member Of :</h2>
                <ul class="card-image-patner">
                    <li>
                        <img src="<?= base_url(); ?>assets/img/BEM-SI-01 1.png" alt="Bem SI">
                    </li>
                    <li>
                        <img src="<?= base_url(); ?>assets/img/Bsb@300x-8.png" alt="Bem SI">
                    </li>
                </ul>
            </div>
        </div>
        <div class="section-content-footer">
            <div class="card-content-footer">
                <div class="card-desc">
                    <div class="card-image-big">
                        <img src="<?= base_url(); ?>assets/img/Logo UBSI 1.png" alt="Logo BSI Footer" class="card-image-footer-bsi">
                        <img src="<?= base_url(); ?>assets/img/logo bem.png" alt="Logo BEM Footer" class="card-image-footer-bem">
                    </div>
                    <div class="card-image-small">
                        <img src="<?= base_url(); ?>assets/img/logo-delarosa.png" alt="Logo Kabinet Delarosa" class="card-image-footer-delarosa">
                        <img src="<?= base_url(); ?>assets/img/BSC@300x-8.png" alt="Logo BSC" class="card-image-footer-bsc">
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
                            <img src="<?= base_url(); ?>assets/img/icon-ig.png" alt="Icon Instagram Footer">
                        </a>
                        <a href="#" class="link-sosmed-email">
                            <img src="<?= base_url(); ?>assets/img/icon-email.png" alt="Icon Email Footer">
                        </a>
                    </div>
                    <div class="card-address-footer">
                        <img src="<?= base_url(); ?>assets/img/icon-address.png" alt="Icon Address Footer" class="card-icon-address">
                        <p class="desc-address">Jl. Merdeka No.168, RT.01/RW.05, Ciwaringin, Kecamatan Bogor Tengah,
                            Kota Bogor, Jawa Barat 16124</p>
                    </div>
                </div>
            </div>
            <div class="copyright">
                Copyright 2021 - BEM UBSI Bogor
            </div>
        </div>

        <!-- Modal BPH -->
        <div class="modal fade" id="modalbph" tabindex="-1" role="dialog" aria-labelledby="modalbphLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h5 class="modal-title" id="modalbphLabel">Modal title</h5> -->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <?php foreach ($bph as $bp) : ?>
                                        <img src="<?= base_url('assets/img/bph/') . $bp->image; ?>" height="150" alt="">
                                        <h3><?= ucwords($bp->position); ?></h3>
                                        <h4><?= ucwords($bp->name); ?></h4>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal BPH -->

    </div>
</body>
<script src="<?= base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
<script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/main.js"></script>
<script>
    function scrollFunctionHome() {
        var s = document.getElementById("headHomeRespawnd");
        if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
            s.style.position = "fixed";
            s.style.backgroundColor = "#1e2c91";
            s.style.top = "0px";
            s.style.width = "100%";
            s.style.zIndex = "2";
        } else if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
            s.style.position = "relative";
            s.style.backgroundColor = "auto";
            s.style.top = "0px";
            s.style.width = "100%";
            s.style.zIndex = "2";
        } else {
            s.style = "none";
        }
    }
</script>

</html>