<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-md-6">
            <!-- Insert ketua -->
            <div class="card">
                <div class="card-body">
                    <?php echo form_open_multipart('content/insertKetuaBph'); ?>
                    <div class="form-group">
                        <label for="nm_ketua">Nama Ketua</label>
                        <input type="text" class="form-control" name="nm_ketua">
                        <?= form_error('nm_ketua', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Foto Ketua</label>
                        <input type="file" name="img_ketua">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <?php echo form_open_multipart('content/insertWakilBph'); ?>
                    <div class="form-group">
                        <label for="nm_wakil">Nama Wakil</label>
                        <input type="text" class="form-control" name="nm_wakil">
                        <?= form_error('nm_wakil', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Foto Wakil</label>
                        <input type="file" name="img_wakil" multiple="multiple">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <?php echo form_open_multipart('content/insertAnggota1Bph'); ?>
                    <div class="form-group">
                        <label for="nm_anggota1">Nama Anggota</label>
                        <input type="text" class="form-control" name="nm_anggota1">
                        <?= form_error('nm_anggota1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Foto Anggota</label>
                        <input type="file" name="img_anggota1">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <?php echo form_open_multipart('content/insertAnggota2Bph'); ?>
                    <div class="form-group">
                        <label for="nm_anggota2">Nama Anggota</label>
                        <input type="text" class="form-control" name="nm_anggota2">
                        <?= form_error('nm_anggota2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Foto Anggota</label>
                        <input type="file" name="img_anggota2">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->