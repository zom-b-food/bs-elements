<!doctype html>
<html lang="en">

<head>
    <?php include '../pages/inc/globals-top.php'; ?>
    <meta name="description"
        content="Adam L Marsh; UI/UX Designer and Developer, www.adam-marsh.com, www.ui-design-engineering.com, www.myuikit.com, front-end web design and development.">
    <meta name="author" content="ui-design-engineering.com, www.myuikit.com">
    <title>Justified Nav Template for Bootstrap</title>
    <!-- Custom styles for this template -->
    <style type="text/css">
    /* Main marketing message and sign up button */
    .jumbotron {
        text-align: center;
        background-color: transparent;
    }

    .jumbotron .btn {
        padding: 14px 24px;
        font-size: 21px;
    }

    .bob {
        background-image: linear-gradient(to bottom, #83889a 0%, #9da1b1 100%);
        border: 1px solid #e5e5e5;
    }

    @media (min-width: 768px) {
        .navbar-nav {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
        }

        .navbar-nav .nav-item {
            -ms-flex: 1 0 auto;
            -webkit-box-flex: 1;
            flex: 1 0 auto;
        }
    }

    /* Responsive: Portrait tablets and up */
    @media screen and (min-width: 768px) {

        /* Remove the padding we set earlier */
        .masthead,
        .marketing,
        .footer {
            padding-right: 0;
            padding-left: 0;
        }
    }
    </style>
</head>

<body class="sidebar-collapse">

    <?php include '../pages/inc/header.php'; ?>
    <main role="main" class="container">
        <header class="masthead">
            <h3 class="text-muted">Project name</h3>
            <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3 bob">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav text-md-center nav-justified w-100">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Downloads</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>

                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>Marketing stuff!</h1>

            <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus,
                tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                amet.</p>

            <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
        </div>
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                    porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

                <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                    porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

                <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                    Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus
                    commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>

                <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div>
    </main>
   
    <?php include '../pages/inc/footer.php'; ?>
    <?php include '../pages/inc/globals-bottom.php'; ?>
</body>

</html>
