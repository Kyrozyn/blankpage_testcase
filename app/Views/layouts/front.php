<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Demo Apps Test Case Andreas</title>

    <meta name="description" content="Demo Apps Test Case Andreas">
    <meta name="author" content="Andreas">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Demo Apps Test Case Andreas">
    <meta property="og:site_name" content="Demo Apps Test Case Andreas">
    <meta property="og:description" content="Demo Apps Test Case Andreas">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="<?= base_url('assets/css/dashmix.min.css') ?>">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->

    <!-- Smooth Scrolling -->
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <?= $this->renderSection('css') ?>
</head>
<body>
<!-- Page Container -->
<div id="page-container" class="sidebar-dark side-scroll page-header-fixed page-header-glass main-content-boxed">

    <!-- Sidebar -->
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
            <div class="content-header bg-white-10">
                <!-- Logo -->
                <a class="font-w600 text-white tracking-wide" href="">
                            <span class="smini-visible">
                                D<span class="opacity-75">x</span>
                            </span>
                    <span class="smini-hidden">
                                Blankpage<span class="opacity-75"> Digital</span>
                            </span>
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div>
                    <!-- Toggle Sidebar Style -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                    <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler"
                       data-class="fa-toggle-off fa-toggle-on" data-toggle="layout" data-action="sidebar_style_toggle"
                       href="javascript:void(0)">
                        <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                    </a>
                    <!-- END Toggle Sidebar Style -->

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close"
                       href="javascript:void(0)">
                        <i class="fa fa-times-circle"></i>
                    </a>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side Navigation -->
            <div class="content-side">
                <ul class="nav-main">
                    <li class="nav-main-item ml-lg-auto">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                           aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-brush"></i>
                            <span class="nav-main-link-name">Investors</span>
                        </a>
                        <ul class="nav-main-submenu nav-main-submenu-right">
                            <li class="nav-main-item">
                                <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                                    <i class="nav-main-link-icon fa fa-circle text-default"></i>
                                    <span class="nav-main-link-name">Default</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" data-toggle="theme"
                                   data-theme="assets/css/themes/xwork.min.css" href="#">
                                    <i class="nav-main-link-icon fa fa-circle text-xwork"></i>
                                    <span class="nav-main-link-name">xWork</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" data-toggle="theme"
                                   data-theme="assets/css/themes/xmodern.min.css" href="#">
                                    <i class="nav-main-link-icon fa fa-circle text-xmodern"></i>
                                    <span class="nav-main-link-name">xModern</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/xeco.min.css"
                                   href="#">
                                    <i class="nav-main-link-icon fa fa-circle text-xeco"></i>
                                    <span class="nav-main-link-name">xEco</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" data-toggle="theme"
                                   data-theme="assets/css/themes/xsmooth.min.css" href="#">
                                    <i class="nav-main-link-icon fa fa-circle text-xsmooth"></i>
                                    <span class="nav-main-link-name">xSmooth</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" data-toggle="theme"
                                   data-theme="assets/css/themes/xinspire.min.css" href="#">
                                    <i class="nav-main-link-icon fa fa-circle text-xinspire"></i>
                                    <span class="nav-main-link-name">xInspire</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" data-toggle="theme"
                                   data-theme="assets/css/themes/xdream.min.css" href="#">
                                    <i class="nav-main-link-icon fa fa-circle text-xdream"></i>
                                    <span class="nav-main-link-name">xDream</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/xpro.min.css"
                                   href="#">
                                    <i class="nav-main-link-icon fa fa-circle text-xpro"></i>
                                    <span class="nav-main-link-name">xPro</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" data-toggle="theme"
                                   data-theme="assets/css/themes/xplay.min.css" href="#">
                                    <i class="nav-main-link-icon fa fa-circle text-xplay"></i>
                                    <span class="nav-main-link-name">xPlay</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="#">
                            <i class="nav-main-link-icon fa fa-map"></i>
                            <span class="nav-main-link-name">Leaflet Maps</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="#">
                            <i class="nav-main-link-icon fa fa-map"></i>
                            <span class="nav-main-link-name">Career</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="d-flex align-items-center">
                <!-- Logo -->
                <a class="link-fx font-size-lg font-w600 text-dark" href="#">
                    Blankpage<span class="text-primary"> Digital</span>
                </a>
                <!-- END Logo -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="d-flex align-items-center">
                <!-- Menu -->
                <div class="d-none d-lg-block">
                    <ul class="nav-main nav-main-horizontal nav-main-hover">
                        <li class="nav-main-item ml-lg-auto">
                            <a class="nav-main-link nav-main-link-submenu active" data-toggle="submenu"
                               aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-users"></i>
                                <span class="nav-main-link-name">Investors</span>
                            </a>
                            <ul class="nav-main-submenu nav-main-submenu-right">
                                <?php
                                $menufrontsmodel = new \App\Models\MenuFront();
                                $menufronts = $menufrontsmodel->findAll();
                                ?>
                                <?php foreach ($menufronts as $menufront){?>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="<?= base_url('investors/'.$menufront['id'])?>">
                                        <span class="nav-main-link-name"><?= $menufront['name'] ?></span>
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="javascript:void(0)">
                                <i class="nav-main-link-icon fa fa-map"></i>
                                <span class="nav-main-link-name">Leaflet Maps</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="javascript:void(0)">
                                <i class="nav-main-link-icon fab fa-paypal"></i>
                                <span class="nav-main-link-name">Career</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Menu -->

                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-dual d-lg-none ml-1" data-toggle="layout"
                        data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <?= $this->renderSection('content') ?>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="footer-static bg-white">
        <div class="content py-4">

            <!-- Footer Copyright -->
            <div class="row font-size-sm pt-4">
                <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-right">
                    Blankpage Digital
                </div>
                <div class="col-sm-6 order-sm-1 text-center text-sm-left">
                    &copy; <span
                            data-toggle="year-copy"></span>
                </div>
            </div>
            <!-- END Footer Copyright -->
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Dashmix JS -->
<script src="<?= base_url('assets/js/dashmix.core.min.js') ?>"></script>
<script src="<?= base_url('assets/js/dashmix.app.min.js') ?>     "></script>
<?= $this->renderSection('scripts') ?>

</body>
</html>