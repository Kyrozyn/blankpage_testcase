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
                                    Maps
                                </h1>
                                <p class="font-size-h4 font-w300 text-muted mb-5">
                                    See our properties on the map
                                </p>
                                <span class="d-inline-block">
                                                <a class="btn btn-primary px-3 py-2" href="#investorsdocument">
                                                    <i class="fa fa-fw fa-map mr-1"></i> See the Maps
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
            <div class="col-3">
                <div class="form-group">
                    <select class="form-control" id="city">
                        <option value="">Kota</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Tangerang">Tangerang</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="checkbox_category" id="customCheck1" checked value="Shop" >
                        <label class="custom-control-label" for="customCheck1">Shop</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="checkbox_category" id="customCheck2" checked value="Landmark" >
                        <label class="custom-control-label" for="customCheck2">Landmark</label>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div id="map" style="height: 500px"></div>
            </div>
        </div>

    </div>
</main>

<?= $this->endSection() ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
      integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
      crossorigin=""/>
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

<script>
    $( document ).ready(function() {
        var map = L.map('map', {
            center: [-6.2294867, 106.8894296],
            zoom: 11
        });
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1Ijoia3lyb3p5biIsImEiOiJja3huYzh3ODcxbXEyMndwbmdmZ3Z2NGUzIn0.XRES66iY45esJlZF2vM2HQ'
        }).addTo(map);
        var url_post = "<?= base_url('/maps/all') ?>";
        $("#city").change(function () {
            if($("#city").val() == ""){
                url_post = "<?= base_url('/maps/all') ?>";
                console.log('a');
            }
            else{
                url_post = "<?= base_url('/maps') ?>" + "/" + $("#city").val();
                map.eachLayer(function (layer) {
                    if (layer instanceof L.Marker) {
                        map.removeLayer(layer);
                    }
                });
                c();
            }
        });

        $("input[name='checkbox_category']").change(function (){
            //delete all markers
            map.eachLayer(function (layer) {
                if (layer instanceof L.Marker) {
                    map.removeLayer(layer);
                }
            });
            c();
        })
        function c(){
            var datachecked = [];
            $.each($("input[name='checkbox_category']:checked"),function (){
                datachecked.push($(this).val());
            });
            var datapost = {post : datachecked};
            $.ajax({
                type: "POST",
                url: url_post,
                data: datapost,
                success: function (mydata) {
                    var datas = JSON.parse(mydata);
                    datas.forEach(function (mydata) {
                        var marker = L.marker([mydata.lat, mydata.long], {
                            elevation: 260.0,
                            title: mydata.name
                        }).addTo(map);
                        marker.bindPopup("<b>"+mydata.name+"</b><br>"+mydata.address);
                        console.log(mydata.name)
                    });
                }
            });
        }
        c();
    });
</script>
<?= $this->endSection() ?>
