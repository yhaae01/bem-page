        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <div class="row">
                <div class="col-lg-6">
                    <?= $this->session->flashdata('message') ?>
                    <form action="<?= base_url('user/changePassword') ?>" method="post">
                        <div class="form-group">
                            <label for="currentpassword">Password Lama</label>
                            <input type="password" class="form-control" name="currentpassword" id="currentpassword">
                            <?= form_error('currentpassword', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="newpassword1">Password Baru</label>
                            <input type="password" class="form-control" name="newpassword1" id="newpassword1">
                            <?= form_error('newpassword1', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="newpassword2">Ulangi Password</label>
                            <input type="password" class="form-control" name="newpassword2" id="newpassword2">
                            <?= form_error('newpassword2', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->