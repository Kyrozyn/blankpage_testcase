<?= $this->extend('layouts/empty') ?>

<?= $this->section('content') ?>
<div class="content content-full">
    <h2 class="text-center"><?= $career['title'] ?></h2>
    <h4 class="text-center"><span class="fa fa-calendar"></span> <?= $career['date'] ?></h4>
    <h4 class="text-center"><span class="fa fa-clock"></span> <?= $career['time'] ?></h4>
    <h4 class="text-center"><span class="fa fa-map-pin"></span> <?= $career['location'] ?></h4>
</div>
<?= $this->endSection() ?>
