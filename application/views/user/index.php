<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3" style="width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img class="card-img-top" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="Card image cap">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title"><?= ucwords($user['name']); ?></h3>
                    <h6 class="card-text">date created:</h6>
                    <span class="badge badge-primary"><?= date('d F Y', $user['date_created']); ?></span>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->