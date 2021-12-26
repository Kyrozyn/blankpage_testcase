<?= $this->extend('layouts/empty') ?>

<?= $this->section('content') ?>
    <div class="content content-full">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="example-select">Tahun</label>
                    <select class="form-control" id="year" name="year" onchange="location = this.value">
                        <option value="0">Pilih Tahun....</option>

                        <?php foreach ($year as $y) { ?>
                       <option value="<?= base_url('investors/post/'.$datamenu["id"].'/'.$y) ?>"><?= $y ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($datacontent as $content) {?>
            <div class="col-4">
                <div class="block pb-3">
                    <div class="block-header block-header-default">
                        <h3 class="block-title text-center"><?= $content['name'] ?></h3>
                    </div>
                    <div class="block-content text-center">
                        <h5 class=""><?= $content['year'] ?></h5>
                        <a class="btn btn-primary btn-sm align-content-center" href="<?= base_url('/investors/content/file/download/'.$content['id']) ?>">Download</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
<?= $this->endSection() ?>