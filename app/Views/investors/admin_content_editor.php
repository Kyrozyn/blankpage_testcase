<?= $this->extend('layouts/empty') ?>

<?= $this->section('content') ?>
<div class="content content-full">
    <div class="form-group">
        <div id="error"></div>
    </div>
    <?php if (!session()->get('no_year') == 1) { ?>
    <div class="form-group">
        <label for="name">Tahun</label>
        <input type="number" class="form-control" id="year" name="year" required <?php if (isset($menucontent)){ ?> value="<?= $menucontent['year']?>" <?php } ?>>
    </div>
    <?php } ?>
    <div class="js-summernote"><?php if (isset($menucontent)){ ?> <?= $menucontent['content']?> <?php } ?></div>
</div>

<button class="btn btn-primary" onclick="<?php if (isset($menucontent)){ ?>editData()<?php } else{ ?>addData()<?php } ?>">Submit</button>
<?= $this->endSection() ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="<?= base_url('assets/js/plugins/summernote/summernote-bs4.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="<?= base_url('assets/js/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<script>jQuery(function(){Dashmix.helpers(['summernote']);});</script>
<script>
    <?php if (isset($menucontent)){ ?>
    function editData(){
        <?php if (!session()->get('no_year') == 1) { ?>
        var data = {id: <?= $menucontent['id'] ?>,  content : $('.js-summernote').summernote('code'), year: $('#year').val(), menufront_id: <?=$menucontent['menufront_id']?>};
        <?php } else { ?>
        var data = {id: <?= $menucontent['id'] ?>,  content : $('.js-summernote').summernote('code'), year: 1999, menufront_id: <?=$menucontent['menufront_id']?>};
        <?php } ?>
        console.log(data);
            $.ajax({
                url: '<?= base_url('/investors/content/edit') ?>',
                type: 'POST',
                data: data,
                success: function(response){
                    console.log("hi");
                    window.location = "<?= base_url('/investors/content/'. $menucontent['menufront_id']) ?>";
                }
            });
    }
    <?php }else { ?>
    function addData(){
        var data = {content : $('.js-summernote').summernote('code'), menufront_id: <?= $menufront_id ?>, year: $('#year').val()};
        console.log(data);
        //validate year
        var validate_year = /^[12][0-9]{3}$/.test(data.year);
        if(!validate_year){
            $('#error').html('<div class="alert alert-danger">Tahun harus 4 digit angka</div>');
        }
        else{
            $.ajax({
                url: '<?= base_url('/investors/content/add') ?>',
                type: 'POST',
                data: data,
                success: function(response){
                    window.location.replace("<?= base_url('/investors/content/'.$menufront_id) ?>");
                    // console.log(response);
                }
            });
        }
    }
    <?php } ?>
</script>
<?= $this->endSection() ?>
