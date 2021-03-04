<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?= $this->session->flashdata('message'); ?>
    <a href="#" class="btn btn-danger mb-3 btn-sm" data-toggle="modal" data-target="#trunBph"><span class="fas fa-trash"></span> Hapus Data</a>
    <div class="row">
        <div class="col-md-6">
            <!-- Insert ketua -->
            <div class="card">
                <div class="card-body">
                    <?php echo form_open_multipart('content/insertKetuaBph'); ?>
                    <div class="form-group">
                        <label for="name">Nama Ketua</label>
                        <input type="text" class="form-control" name="name">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Foto Ketua</label>
                        <div class="custom-file mb-2">
                            <input type="file" name="image" class="custom-file-input">
                            <label class="custom-file-label">Pilih gambar...</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <?php echo form_open_multipart('content/insertWakilBph'); ?>
                    <div class="form-group">
                        <label for="name">Nama Wakil</label>
                        <input type="text" class="form-control" name="name">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Foto Wakil</label>
                        <div class="custom-file mb-2">
                            <input type="file" name="image" class="custom-file-input">
                            <label class="custom-file-label">Pilih gambar...</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <?php echo form_open_multipart('content/insertAnggota1Bph'); ?>
                    <div class="form-group">
                        <label for="name">Nama Anggota</label>
                        <input type="text" class="form-control" name="name">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Foto Anggota</label>
                        <div class="custom-file mb-2">
                            <input type="file" name="image" class="custom-file-input">
                            <label class="custom-file-label">Pilih gambar...</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <?php echo form_open_multipart('content/insertAnggota2Bph'); ?>
                    <div class="form-group">
                        <label for="name">Nama Anggota</label>
                        <input type="text" class="form-control" name="name">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Foto Anggota</label>
                        <div class="custom-file mb-2">
                            <input type="file" name="image" class="custom-file-input">
                            <label class="custom-file-label">Pilih gambar...</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Truncate -->
<div class="modal fade" id="trunBph" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Yakin ingin hapus semua data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                <a href="<?= base_url('content/trunBph'); ?>" class="btn btn-outline-secondary">Ya, hapus</a>
            </div>
        </div>
    </div>
</div>