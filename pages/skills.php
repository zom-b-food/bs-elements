<!doctype html>
<html lang="en">

<head>
    <?php include '../pages/inc/globals-top.php'; ?>
    <meta name="description" content="">

    <title>Progress Bars for Bootstrap</title>

    <style type="text/css">
    .progress {
        margin: 0 0 40px 0;
    }

    .progress-bar {
        width: 0;
    }
    </style>
</head>

<body class="sidebar-collapse">

    <?php include '../pages/inc/header.php'; ?>


    <section class="container">

        <!-- section title -->
        <h2 class="section-title font-black text-uppercase">Intermission</h2>
        <p class="mt-2">Let's watch some progress bars.</p>
        <div class="spacer" data-height="90"></div>
        <div class="row">
            <div class="col-md-6">

                <h4>English</h4>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                        aria-valuemax="100">100</div>
                </div>
                <h4>French</h4>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                        aria-valuemax="100">50</div>
                </div>
                <h4>Spanish</h4>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                        aria-valuemax="100">20</div>
                </div>
            </div>
        </div>
    </section>

    <script src="/lib/bootstrap-4.3.1.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script type="text/javascript">
    
    </script>

</body>

</html>
