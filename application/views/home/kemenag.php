<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php echo form_open_multipart('content/insert'); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nm_ketua">Nama Ketua</label>
                        <input type="text" class="form-control" name="nm_ketua">

                    </div>
                    <div class="form-group">
                        <label for="">Foto Ketua</label>
                        <input type="file" name="img_ketua">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nm_wakil">Nama Wakil</label>
                        <input type="text" class="form-control" name="nm_wakil">

                    </div>
                    <div class="form-group">
                        <label for="">Foto Wakil</label>
                        <input type="file" name="img_wakil" multiple="multiple">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nm_anggota1">Nama Anggota</label>
                        <input type="text" class="form-control" name="img_anggota1">

                    </div>
                    <div class="form-group">
                        <label for="">Foto Ketua</label>
                        <input type="file" name="img_anggota1">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nm_anggota2">Nama Anggota</label>
                        <input type="text" class="form-control" name="img_anggota2">

                    </div>
                    <div class="form-group">
                        <label for="">Foto Ketua</label>
                        <input type="file" name="img_anggota2">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->