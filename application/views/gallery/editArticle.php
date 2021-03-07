<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <a href="<?= base_url('gallery/article'); ?>" class="btn btn-secondary"> <i class="fa fa-arrow-left mr-2" aria-hidden="true"></i> Kembali</a>

    <div class="row">
        <div class="col-lg">
            <div class="row">
                <div class="card-body">
                    <?php echo form_open_multipart('gallery/ubah?id=' . $data['id'] . ''); ?>
                    <div class="form-group col-md-10 mx-auto">
                        <strong>
                            <h5>Judul</h5>
                        </strong>
                        <?php
                        $isi = '';
                        if (set_value('title')) {
                            $isi = set_value('title');
                        } else {
                            $isi = $data['title'];
                        }
                        ?>
                        <input class="form-control" type="text" name="title" id="title" onkeyup="createSlug()" autofocus autocomplete="off" value="<?= $isi; ?>">
                        <?php echo form_error('title', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group col-md-10 mx-auto">
                        <strong>
                            <h5>Isi Konten</h5>
                        </strong>
                        <?php
                        $content = '';
                        if (set_value('content')) {
                            $content = set_value('content');
                        } else {
                            $content = $data['content'];
                        }
                        ?>
                        <textarea class="ckeditor" id="content" name="content"><?php echo $content; ?></textarea>
                        <?php echo form_error('content', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group col-md-10 mx-auto">
                        <strong>
                            <h5>Url</h5>
                        </strong>
                        <?php
                        $url = '';
                        if (set_value('url')) {
                            $url = set_value('url');
                        } else {
                            $url = $data['url'];
                        }
                        ?>
                        <input type="text" id="url" name="url" class="form-control" required readonly value="<?php echo $url; ?>">
                        <?php echo form_error('url', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group col-md-10 mx-auto">
                        <strong>
                            <h5>Cover</h5>
                        </strong>
                        <?php
                        if ($data['cover']) {
                            echo '<img src="' . base_url() . 'assets/img/cover/' . $data['cover'] . '" width="250" class="img-thumbnail mx-auto">';
                            echo '<div class="custom-file">';
                            echo '<input type="file" class="custom-file-input" name="image" id="image">';
                            echo '<label for="image" class="custom-file-label">' . $data['cover'] . '</label>';
                            echo '</div>';
                        } else {
                            echo '<div class="custom-file">';
                            echo '<input type="file" class="custom-file-input" name="image" id="image">';
                            echo '<label for="image" class="custom-file-label">Choose File</label>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <div class="form-group col-md-3 mx-auto">
                        <input class="form-control btn btn-primary" type="submit" name="add" id="add" value="Ubah Artikel">
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