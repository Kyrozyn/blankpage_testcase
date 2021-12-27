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
                                    Career
                                </h1>
                                <p class="font-size-h4 font-w300 text-muted mb-5">
                                    Join our team and become a part of our family.
                                </p>
                                <span class="d-inline-block">
                                                <a class="btn btn-primary px-3 py-2" href="#investorsdocument">
                                                    <i class="fa fa-fw fa-people-arrows mr-1"></i> See available Careers
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
    <div class="content content-full">
        <div class="row">
            <div class="col-md-6">
                <h2 class="content-heading pt-0">Job Fairs</h2>
                <p class="text-muted mb-2">
                    Come and meet us
                </p>
                <button type="button" class="btn btn-primary push" data-toggle="modal" data-target="#modal-job-fairs">
                    See Job Fairs
                </button>
            </div>
            <div class="col-md-6">
                <h2 class="content-heading pt-0">Campus Hiring</h2>
                <p class="text-muted mb-2">
                    Come and meet us at Campus
                </p>
                <button type="button" class="btn btn-primary push" data-toggle="modal"
                        data-target="#modal-campus-hiring">Campus Hiring
                </button>
            </div>
        </div>

    </div>
</main>
<div class="modal fade" id="modal-job-fairs" tabindex="-1" role="dialog" aria-labelledby="modal-block-fadein"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Job Fairs</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" name="date" id="date">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <select class="form-control" id="location_select">
                                    <option value="">Select Location</option>
                                    <option>Jakarta</option>
                                    <option>Bandung</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="jobfairblockgroup">
                            <?php foreach ($jobfairs as $jobfair) { ?>
                                    <div class="col-6">
                                    <div class="block" id="jobfair">
                                        <div class="block-header block-header-default text-center">
                                            <h3 class="block-title" id="title"><?= $jobfair['title'] ?></h3>
                                        </div>
                                        <div class="block-content text-center">
                                            <h6 id="location"><?= $jobfair['location'] ?></h6>
                                            <h6 id="date"><?= $jobfair['date'] ?></h6>
                                            <button type="button" class="btn btn-primary push" data-toggle="modal"
                                                    data-target="#modal-detail" onclick="setIDDetail(<?= $jobfair['id']?>)">Detail
                                            </button>
                                        </div>
                                    </div>
                                    </div>
                            <?php } ?>
                    </div>

                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <!--                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>-->
                    <!--                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>-->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-campus-hiring" tabindex="-1" role="dialog" aria-labelledby="modal-block-fadein"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Campus Hiring</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" name="date" id="date_campus">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <select class="form-control" id="location_select_campus">
                                    <option value="">Select Location</option>
                                    <option>Jakarta</option>
                                    <option>Bandung</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="campushiringblockgroup">
                        <?php foreach ($campushiring as $campus) { ?>
                            <div class="col-6">
                                <div class="block" id="jobfair">
                                    <div class="block-header block-header-default text-center">
                                        <h3 class="block-title" id="title"><?= $campus['title'] ?></h3>
                                    </div>
                                    <div class="block-content text-center">
                                        <h6 id="locationcampus"><?= $campus['location'] ?></h6>
                                        <h6 id="datecampus"><?= $campus['date'] ?></h6>
                                        <button type="button" class="btn btn-primary push" data-toggle="modal"
                                                data-target="#modal-detail" onclick="setIDDetail(<?= $campus['id']?>)">Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <!--                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>-->
                    <!--                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>-->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="modal-block-fadein"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Detail</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item embed-responsive-16by9" id="detailiframe" src="http://google.com"
                            allowfullscreen name="iframefront"></iframe>
                    </div>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <!--                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>-->
                    <!--                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>-->
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>

<?= $this->section('css') ?>

<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
    $(document).on('show.bs.modal', '.modal', function () {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });
    $(document).ready(function () {
        $('#date').change(function () {
            var valuedate = $('#date').val();
            var valueloc = $('#location_select').val();
            console.log(valuedate);
            console.log(valueloc);
            if (valueloc == '') {
                $('#jobfairblockgroup').find("#date:not(:contains(" + valuedate + "))").parent().parent().parent().css('display', 'none');
                $('#jobfairblockgroup').find("#date:contains(" + valuedate + ")").parent().parent().parent().css('display', 'block');
            } else {
                $('#jobfairblockgroup').find("#location:not(:contains(" + valueloc + "))").parent().parent().parent().css('display', 'none');
                $('#jobfairblockgroup').find("#location:contains(" + valueloc + ")").parent().parent().parent().css('display', 'block');
                $('#jobfairblockgroup').find("#date:not(:contains(" + valuedate + "))").parent().parent().parent().css('display', 'none');
                $('#jobfairblockgroup').find("#date:contains(" + valuedate + ")").parent().parent().parent().css('display', 'block');
                $('#jobfairblockgroup').find("#location:not(:contains(" + valueloc + "))").parent().parent().parent().css('display', 'none');

            }
        });
        $('#location_select').change(function () {
            var valueloc = $('#location_select').val();
            var valuedate = $('#date').val();
            console.log(valueloc);
            console.log(valuedate);
            if (valuedate == '') {
                $('#jobfairblockgroup').find("#location:not(:contains(" + valueloc + "))").parent().parent().parent().css('display', 'none');
                $('#jobfairblockgroup').find("#location:contains(" + valueloc + ")").parent().parent().parent().css('display', 'block');
            } else {
                $('#jobfairblockgroup').find("#date:not(:contains(" + valuedate + "))").parent().parent().parent().css('display', 'none');
                $('#jobfairblockgroup').find("#date:contains(" + valuedate + ")").parent().parent().parent().css('display', 'block');
                $('#jobfairblockgroup').find("#location:not(:contains(" + valueloc + "))").parent().parent().parent().css('display', 'none');
                $('#jobfairblockgroup').find("#location:contains(" + valueloc + ")").parent().parent().parent().css('display', 'block');
                $('#jobfairblockgroup').find("#date:not(:contains(" + valuedate + "))").parent().parent().parent().css('display', 'none');
            }
        });

        $('#date_campus').change(function () {
            var valuedate = $('#date_campus').val();
            var valueloc = $('#location_select_campus').val();
            console.log(valuedate);
            console.log(valueloc);
            if (valueloc == '') {
                $('#campushiringblockgroup').find("#datecampus:not(:contains(" + valuedate + "))").parent().parent().parent().css('display', 'none');
                $('#campushiringblockgroup').find("#datecampus:contains(" + valuedate + ")").parent().parent().parent().css('display', 'block');
            } else {
                $('#campushiringblockgroup').find("#locationcampus:not(:contains(" + valueloc + "))").parent().parent().parent().css('display', 'none');
                $('#campushiringblockgroup').find("#locationcampus:contains(" + valueloc + ")").parent().parent().parent().css('display', 'block');
                $('#campushiringblockgroup').find("#datecampus:not(:contains(" + valuedate + "))").parent().parent().parent().css('display', 'none');
                $('#campushiringblockgroup').find("#datecampus:contains(" + valuedate + ")").parent().parent().parent().css('display', 'block');
                $('#campushiringblockgroup').find("#locationcampus:not(:contains(" + valueloc + "))").parent().parent().parent().css('display', 'none');

            }
        });
        $('#location_select_campus').change(function () {
            var valueloc = $('#location_select_campus').val();
            var valuedate = $('#date_campus').val();
            console.log(valueloc);
            console.log(valuedate);
            if (valuedate == '') {
                $('#campushiringblockgroup').find("#locationcampus:not(:contains(" + valueloc + "))").parent().parent().parent().css('display', 'none');
                $('#campushiringblockgroup').find("#locationcampus:contains(" + valueloc + ")").parent().parent().parent().css('display', 'block');
            } else {
                $('#campushiringblockgroup').find("#datecampus:not(:contains(" + valuedate + "))").parent().parent().parent().css('display', 'none');
                $('#campushiringblockgroup').find("#datecampus:contains(" + valuedate + ")").parent().parent().parent().css('display', 'block');
                $('#campushiringblockgroup').find("#locationcampus:not(:contains(" + valueloc + "))").parent().parent().parent().css('display', 'none');
                $('#campushiringblockgroup').find("#locationcampus:contains(" + valueloc + ")").parent().parent().parent().css('display', 'block');
                $('#campushiringblockgroup').find("#datecampus:not(:contains(" + valuedate + "))").parent().parent().parent().css('display', 'none');
            }
        });
    });
    var iddetail = 0;
    function setIDDetail(id){
        iddetail = id;
        $('#detailiframe').attr('src', '<?= base_url('careers')?>'+'/'+id);
    }
</script>
<?= $this->endSection() ?>
