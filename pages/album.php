<!doctype html>
<html lang="en">
    <head>
        <?php include '../pages/inc/globals-top.php'; ?>
        <meta name="description"
              content="Adam L Marsh; UI/UX Designer and Developer, www.adam-marsh.com, www.ui-design-engineering.com, www.myuikit.com, front-end web design and development.">
        <meta name="author" content="ui-design-engineering.com, www.myuikit.com">
        <title>Album example for Bootstrap</title>
    </head>
    <body class="sidebar-collapse">

        <?php include '../pages/inc/header.php'; ?>

        <main role="main" class="container">
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Album example</h1>

                    <p class="lead text-muted">Something short and leading about the collection below—its contents, the
                        creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it
                        entirely.</p>

                    <p>
                        <a href="#" class="btn btn-primary">Main call to action</a>
                        <a href="#" class="btn btn-secondary">Secondary action</a>
                    </p>
                </div>
            </section>
            <div class="album text-muted">
                <div class="container">
                    <div class="row">
                        <div class="card col3">
                            <img src="/dist/img/1.png" alt="Card image cap">

                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card col3">
                            <img src="/dist/img/2.png" alt="Card image cap">

                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card col3">
                            <img src="/dist/img/3.png" alt="Card image cap">

                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card col3">
                            <img src="/dist/img/4.png" alt="Card image cap">

                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card col3">
                            <img src="/dist/img/5.png" alt="Card image cap">

                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card col3">
                            <img src="/dist/img/6.png" alt="Card image cap">

                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card col3">
                            <img src="/dist/img/7.png" alt="Card image cap">

                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card col3">
                            <img src="/dist/img/8.png" alt="Card image cap">

                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card col3">
                            <img src="/dist/img/1.png" alt="Card image cap">

                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
       
        <?php include '../pages/inc/footer.php'; ?>

        <?php include '../pages/inc/globals-bottom.php'; ?>

        <script>
            Holder.addTheme('thumb', {
                bg: '#55595c',
                fg: '#eceeef',
                text: 'Thumbnail'
            });
        </script>
    </body>
</html>
