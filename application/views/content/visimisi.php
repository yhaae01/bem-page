<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        <div class="card">
            <div class="card-body">
                <?php echo $this->session->flashdata('message'); ?>
                <form action="<?= base_url('content/visimisi') ?>" method="POST">
                    <div class="form-group">
                        <h3 class="mb-3">Visi</h3>
                        <textarea name="visi" id="visi" cols="30" rows="10">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <h3 class="mb-3">Misi</h3>
                        <textarea name="misi" id="misi" cols="30" rows="10">
                        </textarea>
                        <input class="mt-5 btn btn-primary" type="submit" value="Simpan">
                </form>
            </div>
        </div>
</div>
<!-- /.container-fluid -->

</div>