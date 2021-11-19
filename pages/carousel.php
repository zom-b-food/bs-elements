<!doctype html>
<html lang="en">

<head>
    <?php include '../pages/inc/globals-top.php'; ?>
    <meta name="description"
        content="Adam L Marsh; UI/UX Designer and Developer, www.adam-marsh.com, www.ui-design-engineering.com, www.myuikit.com, front-end web design and development.">
    <meta name="author" content="ui-design-engineering.com, www.myuikit.com">
    <title>Grid Template for Bootstrap</title>

    <style type="text/css">
    .carousel {
        margin-bottom: 4rem;
    }

    .carousel-caption {
        bottom: 3rem;
        z-index: 10;
    }

    .carousel-item {
        height: 32rem;
        background-color: #777;
    }

    .carousel-item>img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 32rem;
    }

    .carousel-item-next,
    .carousel-item-prev,
    .carousel-item.active {
        display: block;
    }

    .carousel .carousel-inner {
        box-shadow: 0 10px 25px 0 rgba(0, 0, 0, 0.3);
    }

    .carousel .now-ui-icons {
        font-size: 2em;
    }

    /* Carousel base class */
    .carousel {
        margin-bottom: 4rem;
    }

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        bottom: 3rem;
        z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
        height: 32rem;
        background-color: #777;
    }

    .carousel-item>img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 32rem;
    }

    .carousel-item-next,
    .carousel-item-prev,
    .carousel-item.active {
        display: block;
    }
    </style>
</head>

<body class="sidebar-collapse">

    <?php include '../pages/inc/header.php'; ?>


    <section class="container">
        <!-- Three columns of text below the carousel -->
        <!-- /.row -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="../dist/img/bg1.jpg" alt="First slide">

                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h5>Nature, United States</h5>

                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id
                                elit.</p>

                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="../dist/img/bg3.jpg" alt="Second slide">

                    <div class="container">
                        <div class="carousel-caption">
                            <h5>Somewhere Beyond, United States</h5>

                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id
                                elit.</p>

                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="../dist/img/bg4.jpg" alt="Third slide">

                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h5>Yellowstone National Park, United States</h5>

                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id
                                elit.</p>

                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <script src="../lib/bootstrap-4.3.1.min.js" type="text/javascript"></script>
</body>

</html>