<?= $this->extend('layouts/empty') ?>

<?= $this->section('content') ?>
    <div class="content content-full">
        <form action="<?= base_url('/investors/content/add/file') ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="menufront_id" value="<?= $menufront_id ?>">
            <div class="form-group">
                <label for="name">Nama File</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required <?php if (isset($menu)){ ?> value="<?= $menu['name']?>" <?php } ?>>
            </div>
            <div class="form-group">
                <label for="name">Tahun</label>
                <input type="text" pattern="^[12][0-9]{3}$" class="form-control" id="year" name="year" required <?php if (isset($menucontent)){ ?> value="<?= $menucontent['year']?>" <?php } ?>>
            </div>
            <div class="form-group">
                <label class="d-block" for="example-file-input">Upload File</label>
                <input type="file" id="pdf_file" name="pdf_file" accept="application/pdf" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Tambah File</button>
            </div>
        </form>
    </div>
<?= $this->endSection() ?>