<!doctype HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $this->title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
        <meta name="description" content="Default Description">
        <meta name="keywords" content="Magento, Varien, E-commerce">
        <link rel="icon" href="static/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="static/favicon.ico" type="image/x-icon">
        <link href="//fonts.googleapis.com/css?family=Roboto:400,400italic,300,700,300italic&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
        <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:700,400,300&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="static/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="static/js/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="static/js/superfish.js"></script>
        <script type="text/javascript" src="static/js/scripts.js"></script>
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="static/css/jquery.bxslider.css" media="all">
        <link rel="stylesheet" type="text/css" href="static/css/photoswipe.css" media="all">
        <link rel="stylesheet" type="text/css" href="static/css/bootstrap.css" media="all">
        <link rel="stylesheet" type="text/css" href="static/css/extra_style.css" media="all">
        <link rel="stylesheet" type="text/css" href="static/css/styles.css" media="all">
        <link rel="stylesheet" type="text/css" href="static/css/responsive.css" media="all">
        <link rel="stylesheet" type="text/css" href="static/css/superfish.css" media="all">
        <link rel="stylesheet" type="text/css" href="static/css/camera.css" media="all">
        <link rel="stylesheet" type="text/css" href="static/css/widgets.css" media="all">
        <link rel="stylesheet" type="text/css" href="static/css/cloud-zoom.css" media="all">
        <link rel="stylesheet" type="text/css" href="static/css/catalogsale.css" media="all">
        <link rel="stylesheet" type="text/css" href="static/css/print.css" media="print">
        <script type="text/javascript" src="static/js/prototype.js"></script>
        <script type="text/javascript" src="static/js/ccard.js"></script>
        <script type="text/javascript" src="static/js/validation.js"></script>
        <script type="text/javascript" src="static/js/builder.js"></script>
        <script type="text/javascript" src="static/js/effects.js"></script>
        <script type="text/javascript" src="static/js/dragdrop.js"></script>
        <script type="text/javascript" src="static/js/controls.js"></script>
        <script type="text/javascript" src="static/js/slider.js"></script>
        <script type="text/javascript" src="static/js/js.js"></script>
        <script type="text/javascript" src="static/js/form.js"></script>
        <script type="text/javascript" src="static/js/translate.js"></script>
        <script type="text/javascript" src="static/js/cookies.js"></script>
        <script type="text/javascript" src="static/js/cloud-zoom.1.0.2.js"></script>
        <script type="text/javascript" src="static/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="static/js/jquery.mobile.customized.min.js"></script>
        <script type="text/javascript" src="static/js/bootstrap.js"></script>
        <script type="text/javascript" src="static/js/jquery.carouFredSel-6.2.1.js"></script>
        <script type="text/javascript" src="static/js/jquery.touchSwipe.js"></script>
        <script type="text/javascript" src="static/js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="static/js/tm-stick-up.js"></script>
        <script type="text/javascript" src="static/js/carousel.js"></script>
        <script type="text/javascript" src="static/js/msrp.js"></script>
    </head>
    <body class="ps-static  cms-index-index cms-home">
        <div class="wrapper ps-static en-lang-class">
            <div class="page">
                <div class="shadow"></div>
                <div class="swipe-left"></div>
                <!-- CART -->
                <?php include __DIR__ . '/base/cart.view.php'; ?>
                <!-- \CART -->
                <div class="top-icon-menu">
                    <div class="swipe-control"><i class="fa fa-align-justify"></i></div>
                    <div class="top-search"><i class="fa fa-search"></i></div>
                    <span class="clear"></span>
                </div>
                <!-- HEADER -->
                <?php include __DIR__ . '/base/header.view.php'; ?>
                <!-- \HEADER -->
                <!-- NAV -->
                <?php include __DIR__ . '/base/nav.view.php'; ?>
                <!-- \NAV -->
                <div class="main-container col2-left-layout">
                    <div class="container">
                        <?php $this->render_body(); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>