<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../pages/inc/globals-top.php'; ?>
    <meta name="description"
        content="Adam L Marsh; UI/UX Designer and Developer, www.adam-marsh.com, www.ui-design-engineering.com, www.myuikit.com, front-end web design and development.">
    <meta name="author" content="ui-design-engineering.com, www.myuikit.com">

</head>

<body>
    <header>
        <h1>BeefUp <span>A jQuery Accordion Plugin</span></h1>
        <a href="https://github.com/Schascha/BeefUp" title="View on GitHub" class="button">GitHub</a>
    </header>

    <main>

        <article class="beefup example1">
            <h3 class="beefup__head">
                Item 1
            </h3>

            <div class="beefup__body">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                    mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                </p>
            </div>
        </article>

        <article class="beefup example1">
            <h3 class="beefup__head">
                Item 2
            </h3>

            <div class="beefup__body">
                <article class="beefup example1">
                    <h4 class="beefup__head">
                        Nested Item
                    </h4>

                    <div class="beefup__body">
                        <p>
                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate
                            eget,
                            arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                        </p>
                    </div>
                </article>
            </div>
        </article>

        <pre>
$('.example1').beefup();
</pre>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
        <script src="/lib/jquery.beefup.min.js"></script>
        <script>
        $(function() {

            // Default
            $('.example1').beefup();


        });
        </script>
</body>

</html>