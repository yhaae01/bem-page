<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('name', '<div class="alert alert-danger">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>

            <a href="<?= base_url('gallery/createArticle'); ?>" class="btn btn-primary mb-3">Tambah Artikel</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($articles as $article) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= ucwords($article['name']); ?></td>
                            <td><img src="<?= base_url('assets/img/bph/') . $article['image']; ?>" height="50"></td>
                            <td><?= ucwords($article['position']); ?></td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#ubahUser<?= $article['id']; ?>" class="badge badge-warning">ubah</a>
                                <a href="#" data-toggle="modal" data-target="#hapusUser<?= $article['id']; ?>" class="badge badge-danger">hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>

                        <!-- Hapus Modal -->
                        <div class="modal fade" id="hapusUser<?= $article['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="hapusUserLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="hapusUserLabel">Hapus User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('content/deleteBph/') . $article['id']; ?>" method="post">
                                            <p>Yakin ingin hapus User: <?= ucwords($article['name']); ?></p>
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
                        <div class="modal fade" id="ubahUser<?= $article['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="ubahUserLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ubahUserLabel">Ubah User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo form_open_multipart('content/editBph'); ?>
                                        <input type="hidden" name="id">
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" class="form-control" name="name" value="<?= $article['name']; ?>">
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
                                                <option value="<?= ucwords($article['position']); ?>"><?= ucwords($article['position']); ?></option>
                                                <option value="ketua">Ketua</option>
                                                <option value="wakil">Wakil</option>
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