<?= $this->extend('layouts/empty') ?>

<?= $this->section('content') ?>
    <div class="content content-full">
        <div class="row">
            <div class="col-12">
                <?php if($withyear){ ?>
                <div class="form-group">
                    <label for="example-select">Tahun</label>
                    <select class="form-control" id="year" name="year" onchange="location = this.value">
                        <option value="0">Pilih Tahun....</option>
                        <?php foreach ($year as $y) { ?>
                            <option value="<?= base_url('investors/post/'.$datamenu["id"].'/'.$y) ?>"><?= $y ?></option>
                        <?php } ?>
                    </select>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <?php foreach($datacontent as $content) { ?>
            <div class="content content-full">
                <?= $content["content"] ?>
            </div>
            <?php } ?>
        </div>
    </div>
<?= $this->endSection() ?>