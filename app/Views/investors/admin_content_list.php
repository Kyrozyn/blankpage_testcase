<?= $this->extend('layouts/empty') ?>

<?= $this->section('content') ?>
    <div class="content content-full">
    <div class="block block-rounded">
        <div class="block-content">
            <?php if (session()->getFlashData('success')) { ?>
                <div class="alert alert-success" role="alert">
                    <p class="mb-0"><?= session()->getFlashData('success') ?></p>
                </div>
            <?php } ?>
            <?php if (!$is_file) { ?>
            <a href="<?= base_url('/investors/content/'.$menufront_id.'/add') ?>" class="btn btn-primary mb-4">Tambah Konten</a>
            <?php } else { ?>
            <a href="<?= base_url('/investors/content/'.$menufront_id.'/add/file') ?>" class="btn btn-primary mb-4">Tambah File</a>
            <?php } ?>

    <table class="table table-vcenter">
                <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <?php if ($is_file) { ?>
                    <th>Nama</th>
                    <?php } ?>
                    <th>Tahun</th>
                    <th class="text-center" style="width: 100px;">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($contents as $key => $content) {?>
                    <tr>
                        <th class="text-center" scope="row"><?=$key+1?></th>
                        <?php if ($is_file) { ?>
                        <td class="font-w600">
                            <a href="#"><?=$content['name'] ?></a>
                        </td>
                        <?php } ?>
                        <td class="font-w600">
                            <a href="#"><?=$content['year']?></a>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <?php if (!$is_file) { ?>
                                <a href="<?= base_url('investors/content/edit/'.$content['id']) ?>" class="btn btn-sm btn-primary mr-2"  title="Edit">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <?php } ?>
                                <a href="<?= base_url('investors/content/delete/'.$content['id']) ?>" class="btn btn-sm btn-danger"  title="Hapus">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
<?= $this->endSection() ?>