<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <a href="<?= base_url('gallery/article'); ?>" class="btn btn-secondary"> <i class="fa fa-arrow-left mr-2" aria-hidden="true"></i> Kembali</a>

    <div class="row">
        <div class="col-lg">

            <?= form_error('name', '<div class="alert alert-danger">', '</div>'); ?>

            <div class="row">
                <div class="card-body">
                    <?php echo form_open_multipart('gallery/createArticle'); ?>
                    <div class="form-group col-md-10 mx-auto">
                        <strong>
                            <h5>Judul</h5>
                        </strong>
                        <input class="form-control" type="text" name="title" id="title" onkeyup="createSlug()" autofocus autocomplete="off" value="<?php echo set_value('title'); ?>">
                        <?php echo form_error('title', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group col-md-10 mx-auto">
                        <strong>
                            <h5>Isi Konten</h5>
                        </strong>
                        <textarea class="ckeditor" id="content" name="content"><?php echo set_value('content'); ?></textarea>
                        <?php echo form_error('content', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group col-md-10 mx-auto">
                        <strong>
                            <h5>Url</h5>
                        </strong>
                        <input type="text" id="url" name="url" class="form-control" required readonly value="<?php echo set_value('url'); ?>">
                        <?php echo form_error('url', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group col-md-10 mx-auto">
                        <strong>
                            <h5>Cover</h5>
                        </strong>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image">
                            <label for="image" class="custom-file-label">Choose File</label>
                        </div>
                    </div>
                    <div class="form-group col-md-3 mx-auto">
                        <input class="form-control btn btn-primary" type="submit" name="add" id="add" value="Tambah Artikel">
                    </div>
                    </form>
                    <div class="col-md-3 mx-auto">
                        <a href="<?= base_url('gallery/article'); ?>" class="btn btn-danger form-control">Kembali</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->