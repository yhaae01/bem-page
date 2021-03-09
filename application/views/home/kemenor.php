<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('name', '<div class="alert alert-danger">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahUser">Tambah User</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Posisi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $u) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= ucwords($u['name']); ?></td>
                            <td><img src="<?= base_url('assets/img/Kemenor/') . $u['image']; ?>" height="50"></td>
                            <td><?= ucwords($u['position']); ?></td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#ubahUser<?= $u['id']; ?>" class="badge badge-warning">ubah</a>
                                <a href="#" data-toggle="modal" data-target="#hapusUser<?= $u['id']; ?>" class="badge badge-danger">hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>

                        <!-- Hapus Modal -->
                        <div class="modal fade" id="hapusUser<?= $u['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="hapusUserLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="hapusUserLabel">Hapus User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('content/deleteKemenor/') . $u['id']; ?>" method="post">
                                            <p>Yakin ingin hapus User: <?= ucwords($u['name']); ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-outline-secondary">Ya, hapus</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Ubah User -->
                        <div class="modal fade" id="ubahUser<?= $u['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="ubahUserLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ubahUserLabel">Ubah User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo form_open_multipart('content/editkemenor'); ?>
                                        <input type="hidden" name="id" value="<?= $u['id']; ?>">
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" class="form-control" name="name" value="<?= $u['name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Foto</label><br>
                                            <img class="mb-3" src="<?= base_url('assets/img/kemenor/') . $u['image']; ?>" height="100">
                                            <div class="custom-file mb-2">
                                                <input type="file" name="image" class="custom-file-input">
                                                <label class="custom-file-label">Pilih gambar...</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="position">Posisi</label>
                                            <select class="form-control" name="position" id="position">
                                                <option value="<?= ucwords($u['position']); ?>"><?= ucwords($u['position']); ?></option>
                                                <option value="ketua">Ketua</option>
                                                <option value="wakil">Wakil</option>
                                                <option value="bendahara">Bendahara</option>
                                                <option value="anggota">Anggota</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Insert User -->
<div class="modal fade" id="tambahUser" tabindex="-1" role="dialog" aria-labelledby="tambahUserLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahUserLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('content/insertKemenor'); ?>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <div class="custom-file mb-2">
                        <input type="file" name="image" class="custom-file-input">
                        <label class="custom-file-label">Pilih gambar...</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="position">Posisi</label>
                    <select class="form-control" name="position" id="position">
                        <option value="">-- Pilih Posisi --</option>
                        <option value="ketua">Ketua</option>
                        <option value="wakil">Wakil</option>
                        <option value="bendahara">Bendahara</option>
                        <option value="anggota">Anggota</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>