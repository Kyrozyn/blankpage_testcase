<?= $this->extend('layouts/empty') ?>

<?= $this->section('content') ?>
<div class="content content-full">
    <form action="<?= isset($menu) ? base_url('/investors/menu/edit/')  : base_url('/investors/menu/add/') ?>" method="post">
        <?php if (isset($menu)) { ?>
        <input type="hidden" name="id" value="<?= $menu['id'] ?>">
        <?php } ?>
        <div class="form-group">
            <label for="name">Nama Menu</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required <?php if (isset($menu)){ ?> value="<?= $menu['name']?>" <?php } ?>>
        </div>
        <?php if (!isset($menu)) { ?>
        <div class="form-group">
            <label for="category">Kategori</label>
            <select class="form-control" id="category" name="category">
                <option value="HTML">HTML</option>
                <option value="File">File</option>
            </select>
        </div>
        <div class="form-group" id="radio_pertahun">
            <label class="d-block">Konten Pertahun</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="Pertahun1" name="with_year" value="1" checked="">
                <label class="form-check-label" for="Pertahun1">Ya</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="Pertahun2" name="with_year" value="0">
                <label class="form-check-label" for="Pertahun2">Tidak</label>
            </div>
        </div>
        <?php } ?>
        <div class="form-group">
            <?php if (isset($menu)) { ?>
            <button type="submit" class="btn btn-primary">Edit</button>
            <?php } else { ?>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <?php } ?>
        </div>
    </form>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script>
        $(document).ready(function() {
            $('#category').change(function() {
                if ($(this).val() == 'HTML') {
                    $('#radio_pertahun').show();
                } else {
                    $('input:radio[name=with_year][value=1]').click();
                    $('#radio_pertahun').hide();
                }
            });
        });
    </script>
<?= $this->endSection() ?>