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
                <table class="table table-vcenter">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">#</th>
                        <th>Nama Menu</th>
                        <th>Kategori</th>
                        <th style="width: 15%;">Konten Pertahun</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($menus as $key => $menu) {?>
                    <tr>
                        <th class="text-center" scope="row"><?=$key+1?></th>
                        <td class="font-w600">
                            <a href="#"><?=$menu['name']?></a>
                        </td>
                        <td>
                            <a href="#"><?=$menu['category']?></a>
                        </td>
                        <td>
                            <a href="#"><?= $menu['with_year'] ? "Ya" : "Tidak"  ?></a>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="<?= base_url('investors/content/'.$menu['id']) ?>" class="btn btn-sm btn-primary mr-2" title="Lihat Konten">
                                    <i class="fa fa-book-open"></i>
                                </a>
                                <a href="<?= base_url('investors/menu/edit/'.$menu['id']) ?>" class="btn btn-sm btn-primary mr-2"  title="Edit">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <a href="<?= base_url('investors/menu/delete/'.$menu['id']) ?>" class="btn btn-sm btn-danger"  title="Hapus">
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