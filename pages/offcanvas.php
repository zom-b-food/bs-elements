<!doctype html>
<html lang="en">
    <head>
        <?php include '../pages/inc/globals-top.php'; ?>
        <meta name="description"
              content="Adam L Marsh; UI/UX Designer and Developer, www.adam-marsh.com, www.ui-design-engineering.com, www.myuikit.com, front-end web design and development.">
        <meta name="author" content="ui-design-engineering.com, www.myuikit.com">
        <title>Off Canvas Template for Bootstrap</title>
    </head>
    <body class="sidebar-collapse">

        <?php include '../pages/inc/header.php'; ?>
        <p>&nbsp;</p>

        <p>&nbsp;</p>
        <main role="main" class="container">
            <div class="row row-offcanvas row-offcanvas-right">
                <div class="col-12 col-md-9">
                    <p class="float-right d-md-none">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
                    </p>
                    <div class="jumbotron">
                        <h1>Hello, world!</h1>

                        <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try
                            some responsive-range viewport sizes to see it in action.</p>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <h2>Heading</h2>

                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                                porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

                            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                        </div>
                        <!--/span-->
                        <div class="col-6 col-lg-4">
                            <h2>Heading</h2>

                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                                porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

                            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                        </div>
                        <!--/span-->
                        <div class="col-6 col-lg-4">
                            <h2>Heading</h2>

                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                                porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

                            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                        </div>
                        <!--/span-->
                        <div class="col-6 col-lg-4">
                            <h2>Heading</h2>

                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                                porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

                            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                        </div>
                        <!--/span-->
                        <div class="col-6 col-lg-4">
                            <h2>Heading</h2>

                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                                porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

                            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                        </div>
                        <!--/span-->
                        <div class="col-6 col-lg-4">
                            <h2>Heading</h2>

                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                                porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

                            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                </div>
                <!--/span-->
                <div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">Link</a>
                        <a href="#" class="list-group-item">Link</a>
                        <a href="#" class="list-group-item">Link</a>
                        <a href="#" class="list-group-item">Link</a>
                        <a href="#" class="list-group-item">Link</a>
                        <a href="#" class="list-group-item">Link</a>
                        <a href="#" class="list-group-item">Link</a>
                        <a href="#" class="list-group-item">Link</a>
                        <a href="#" class="list-group-item">Link</a>
                        <a href="#" class="list-group-item">Link</a>
                    </div>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
            <hr>
        </main>
        <!--/.container-->
      
        <?php include '../pages/inc/footer.php'; ?>
        <?php include '../pages/inc/globals-bottom.php'; ?>
        <script>
            $(function () {
                'use strict'

                $('[data-toggle="offcanvas"]').on('click', function () {
                    $('.row-offcanvas').toggleClass('active')
                })
            })
        </script>
    </body>
</html>
