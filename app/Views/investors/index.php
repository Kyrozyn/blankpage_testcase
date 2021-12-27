<?= $this->extend('layouts/front') ?>

<?= $this->section('content') ?>
<main id="main-container">
    <!-- Hero -->
    <div class="bg-image"
         style="background-image: url('https://www.jayaproperty.com/frontend/web_elements/BANNER_INVESTOR.jpg');">
        <div class="hero hero-lg bg-white-90 overflow-hidden">
            <div class="hero-inner">
                <div class="content content-full">
                    <div class="row">
                        <div class="col-lg-5 text-center text-lg-left d-lg-flex align-items-lg-center">
                            <div>
                                <h1 class="h2 font-w700 mb-3">
                                    Investors
                                </h1>
                                <p class="font-size-h4 font-w300 text-muted mb-5">
                                    Meeting our stakeholders' aspirations, together
                                </p>
                                <span class="d-inline-block">
                                                <a class="btn btn-primary px-3 py-2" href="#investorsdocument">
                                                    <i class="fa fa-fw fa-book mr-1"></i> Read the Investors Document
                                                </a>
                                            </span>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1 d-none d-lg-block">
                            <img class="img-fluid"
                                 src="https://www.jayaproperty.com/frontend/web_elements/1630481360_b16c5cdfab3a289f42b1.jpg"
                                 alt="Hero Promo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-meta" id="investorsdocument">
                <div class="invisible" data-toggle="appear" data-timeout="450">
                                <span class="d-inline-block animated bounce infinite">
                                    <i class="si si-arrow-down text-muted fa-2x"></i>
                                </span>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Section #1 -->
    <div class="bg-white" id="section1">
        <div class="content content-full">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="list-group push">
                        <?php foreach ($menus as $menu) { ?>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center <?= $menu['id'] == $id ? 'active' : '' ?>" href="<?= base_url('investors/'.$menu['id']) ?>"" >
                            <?= $menu['name'] ?>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?= base_url('investors/post').'/'.$id ?>"
                                allowfullscreen name="iframefront"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Section #1 -->

    <!-- Section #2 -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="list-group push">
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="<?= base_url('investors/menu/') ?>" target="iframebe">
                            Daftar Menu
                        </a>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="<?= base_url('investors/menu/add') ?>" target="iframebe">
                            Tambah Menu
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?= base_url('investors/menu/') ?>"
                                allowfullscreen name="iframebe"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Section #2 -->
</main>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<?php

/**
 * Scroll when there's ID in URL
 * https://stackoverflow.com/questions/19012495/smooth-scroll-to-div-id-jquery
 * @var integer $with_id
 *
 */
if ($with_id) {
    echo '<script>
        $( document ).ready(function() {
                 $("html, body").animate({
                    scrollTop: $("#section1").offset().top - 70
                    }, 100);
        });
        </script>';
}
?>
<?= $this->endSection() ?>
