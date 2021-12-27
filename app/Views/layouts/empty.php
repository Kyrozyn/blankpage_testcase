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
<div id="page-container" class="sidebar-dark side-scroll page-header-fixed page-header-glass main-content-boxed bg-white">

    <!-- Main Container -->
    <?= $this->renderSection('content') ?>
    <!-- END Main Container -->

</div>
<!-- END Page Container -->

<!-- Dashmix JS -->
<script src="<?= base_url('assets/js/dashmix.core.min.js') ?>"></script>
<script src="<?= base_url('assets/js/dashmix.app.min.js') ?>     "></script>
<?= $this->renderSection('scripts') ?>

</body>
</html>