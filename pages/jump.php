<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="">
    <title>Frontier BPM - Bootstrap 4 </title>
    <?php include '../pages/inc/globals-top.php'; ?>
</head>

<body class="sidebar-collapse" id="top">
    <div class="se-pre-con"></div>
    <script>
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
    </script>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="200">
            <div class="container">
                <div class="dropdown button-dropdown">
                    <a href="#" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                        <span class="button-bar"></span>
                        <span class="button-bar"></span>
                        <span class="button-bar"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-header">Dropdown header</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">One more separated link</a>
                    </div>
                </div>
                <div class="navbar-translate">
                    <a class="navbar-brand" href="../../index.php" rel="tooltip" title="Created for Frontier-BPM"
                        data-placement="bottom">
                        Frontier BPM
                        <small>(sassified)</small>
                    </a>
                    <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="navbar-nav" id="anchor-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="#top">Top</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#middle">Middle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#bottom">Bottom</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" rel="tooltip" title="LinkedIn Profile" data-placement="bottom"
                                href="https://www.linkedin.com/in/sassmaster/" target="_blank">
                                <i class="fa fa-linkedin"></i>
                                <p class="d-lg-none d-xl-none">LinkedIn</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" rel="tooltip" title="My Github" data-placement="bottom"
                                href="https://github.com/zom-b-food" target="_blank">
                                <i class="fa fa-github-square"></i>
                                <p class="d-lg-none d-xl-none">Github</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" rel="tooltip" title="Contact" data-placement="bottom"
                                href="mailto:am@ui-design-engineering.com">
                                <i class="fa fa-envelope"></i>
                                <p>mail@mail.com</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="page-header" filter-color="green">
            <div class="page-header-image" data-parallax="true"
                style="background-image: url('/dist/img/bg1-parallax.jpg');"></div>
            <!-- First Parallax Section -->
            <div class="container centered">
                <div class="pt100">
                    <h1 class="txt-white">Page-Level BS4 Elements</h1>
                    <a href="../pages/bs-4-sass-kit.zip">
                        <button class="btn btn-primary btn-curved" type="button">Call to Action</button>
                    </a>
                    <div class="col-md-12 mt50 d-none d-sm-block">
                        <ul id="tabsJustified" class="nav nav-tabs">
                            <li class="nav-item"><a href="#" data-target="#full1" data-toggle="tab"
                                    class="nav-link small text-uppercase active square">About</a></li>
                            <li class="nav-item"><a href="#" data-target="#current1" data-toggle="tab"
                                    class="nav-link small text-uppercase square">Templates</a></li>
                        </ul>
                        <div class="tab-wrapper">
                            <div id="tabsJustifiedContent" class="tab-content">
                                <div id="full1" class="tab-pane fade active show">
                                    <div class="row tight smoke">
                                        <div class="col-sm-6">
                                            <p class="lead">This SASS-ified BS-4 Kit download is a php website that uses
                                                server-side includes for common components like header, navigation, and
                                                footer. You can reskin the app by merely changing the scss variables.
                                                The
                                                kit uses Gulp package manager to compile and concatenate js and css
                                                files. Feel free to
                                                examine the gulp file and make changes as you see fit.</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="lead">Most elements/components are stock BS4, however I have used
                                                a
                                                few plugins that perform better than the out-of-the-box Bootstrap.
                                                Plugins
                                                used:</p>
                                            <ul>
                                                <li>jquery.bxslider.js</li>
                                                <li>jquery.beefup.js</li>
                                                <li>jquery.filtertable.js</li>
                                                <li>gijgo-datepicker.js</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="current1" class="tab-pane fade">
                                    <div class="row tight smoke">
                                        <div class="col-sm-4">
                                            <h4>Generic Page/Component Templates</h4>
                                            <ul>
                                                <li>
                                                    <a href="../pages/album.php">Album</a>
                                                </li>
                                                <li>
                                                    <a href="../pages/blog.php">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="../pages/carousel.php">Carousel</a>
                                                </li>
                                                <li>
                                                    <a href="../pages/offcanvas.php">Offcanvas (sidebar)</a>
                                                </li>
                                                <li>
                                                    <a href="../pages/grid.php">Grid</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <h4>...More</h4>
                                            <ul>
                                                <li>
                                                    <a href="../pages/justified-nav.php">Justified Nav</a>
                                                </li>
                                                <li>
                                                    <a href="../pages/navbars.php">Navbars</a>
                                                </li>
                                                <li>
                                                    <a href="../pages/signin.php">Sign-in</a>
                                                </li>
                                                <li>
                                                    <a href="../pages/starter-template.php">Starter
                                                        Template</a>
                                                </li>
                                                <li>
                                                    <a href="../pages/sticky-footer.php">Sticky Footer</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <h4>Demo Apps</h4>
                                            <h5>
                                                <a href="/flexor/index.html">Flexor</a>
                                            </h5>
                                            <h5>
                                                <a href="/infinity/index.html">Infinity</a>
                                            </h5>
                                            <h5>
                                                <a href="/meghna/index.html">Meghna</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tight onlysmall smoke">
                        <div class="col-sm-6">
                            <h4>Stock BS-4 Templates</h4>
                            <ul>
                                <li>
                                    <a href="../pages/album.php">Album</a>
                                </li>
                                <li>
                                    <a href="../pages/blog.php">Blog</a>
                                </li>
                                <li>
                                    <a href="../pages/carousel.php">Carousel</a>
                                </li>
                                <li>
                                    <a href="../pages/offcanvas.php">Offcanvas (sidebar)</a>
                                </li>
                                <li>
                                    <a href="../pages/grid.php">Grid</a>
                                </li>
                                <li>
                                    <a href="../pages/justified-nav.php">Justified Nav</a>
                                </li>
                                <li>
                                    <a href="../pages/navbars.php">Navbars</a>
                                </li>
                                <li>
                                    <a href="../pages/signin.php">Sign-in</a>
                                </li>
                                <li>
                                    <a href="../pages/starter-template.php">Starter
                                        Template</a>
                                </li>
                                <li>
                                    <a href="../pages/sticky-footer.php">Sticky Footer</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add More Parallax Sections Here -->
        </div>
    </header>
    <main role="main">
        <section class="container wow fadeInUp">
            <h2>JS Components</h2>
            <div class="row" id="modals">
                <div class="col-md-6">
                    <p class="category">Accordion</p>
                    <article class="beefup accordion1">
                        <h4 class="beefup__head">
                            Item 1
                        </h4>
                        <div class="beefup__body">
                            <p>
                                The sheer absence of sound and motion gave the moment an eerie tension. The dark
                                birds and the pale landscape created a loneliness that wasn't entirely unpleasant.
                                It made me want to sleep, to envision myself stuffed within a warm bed piled with
                                downy quilts and pillows.
                            </p>
                        </div>
                    </article>
                    <article class="beefup accordion1">
                        <h4 class="beefup__head">
                            Item 2
                        </h4>
                        <div class="beefup__body">
                            <p>A reformation takes place in the winter. Even house plants notice it. The ficus
                                dropped
                                its leaves a month ago and I have yet to collect them.</p>
                            <article class="beefup accordion1 nested">
                                <h5 class="beefup__head">
                                    Nested Item
                                </h5>
                                <div class="beefup__body nested">
                                    <p>
                                        I wonder if there is any philosophy that understands the value of dreams and
                                        visions as fully as Hamlet's. But in the end, it doesn't really matter.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </article>
                    <hr />
                    <p class="category">bxSlider</p>
                    <div class="bxslider">
                        <div><img src="../dist/img/bg1.jpg" title="Hand On the Hammock"></div>
                        <div><img src="../dist/img/bg4.jpg" title="Up On the Roof"></div>
                        <div><img src="../dist/img/bg5.jpg" title="The Chinese Dragon"></div>
                    </div>
                    <script>
                    $(function() {
                        $('.bxslider').bxSlider({
                            auto: true,
                            autoControls: true,
                            stopAutoOnClick: true,
                            pager: true,
                            mode: 'fade',
                            captions: true,
                            slideWidth: 1273
                        });
                    });
                    </script>
                </div>
                <div class="col-md-6 leftBorder">
                    <p class="category">Popovers</p>
                    <button type="button" class="btn btn-default" data-container="body"
                        data-original-title="Popover On Left" data-toggle="popover" data-placement="left"
                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-color="primary">
                        On left
                    </button>
                    <button type="button" class="btn btn-default" data-container="body"
                        data-original-title="Popover on Top" data-toggle="popover" data-placement="top"
                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-color="primary">
                        On top
                    </button>
                    <button type="button" class="btn btn-default" data-container="body"
                        data-original-title="Popover on Right" data-toggle="popover" data-placement="right"
                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-color="primary">
                        On right
                    </button>
                    <button type="button" class="btn btn-default" data-container="body"
                        data-original-title="Popover on Bottom" data-toggle="popover" data-placement="bottom"
                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-color="primary">
                        On bottom
                    </button>
                    <hr />
                    <p class="category">Tooltips</p>
                    <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip"
                        data-placement="left" title="Tooltip on left" data-container="body" data-animation="true"
                        data-delay="100">On
                        left
                    </button>
                    <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top" data-container="body" data-animation="true">On top
                    </button>
                    <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip"
                        data-placement="bottom" title="Tooltip on bottom" data-container="body" data-animation="true">On
                        bottom
                    </button>
                    <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip"
                        data-placement="right" title="Tooltip on right" data-container="body" data-animation="true">On
                        right
                    </button>
                    <hr />
                    <p class="category">Modal</p>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
                        Launch Modal
                    </button>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#myModal2">
                        Launch Modal Mini
                    </button>
                    <hr />
                    <p class="category">Gijgo Datepicker</p>
                    <div class="datepicker-container">
                        <input id="datepicker" width="150" />
                        <script>
                        $('#datepicker').datepicker({
                            uiLibrary: 'bootstrap4',
                            iconsLibrary: 'fontawesome'
                        });
                        </script>
                    </div>
                </div>
            </div>
        </section>
        <hr />
        <section class="container wow fadeInUp">
            <h2>Images</h2>
            <div class="row">
                <div class="col-sm-2">
                    <p class="category">Image</p>
                    <img src="../dist/img/avatar.jpg" alt="Rounded Image" class="rounded">
                </div>
                <div class="col-sm-2">
                    <p class="category">Circle Image</p>
                    <img src="../dist/img/avatar.jpg" alt="Circle Image" class="rounded-circle">
                </div>
                <div class="col-sm-2">
                    <p class="category">Raised</p>
                    <img src="../dist/img/avatar.jpg" alt="Raised Image" class="rounded img-raised">
                </div>
                <div class="col-sm-2">
                    <p class="category">Circle Raised</p>
                    <img src="../dist/img/avatar.jpg" alt="Thumbnail Image" class="rounded-circle img-raised">
                </div>
            </div>
        </section>
        <hr />
        <section class="container wow fadeInUp">
            <h2>Show/Hide classes &amp; CSS Specificity</h2>
            <p class="category">Show/Hide Classes <span class="note">(change screen size to see breakpoints)</span>
            </p>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-block bg-success yespad">i am visible from (1px) to xl -</div>
                    <div class="d-none d-md-block bg-success yespad">i am visible from md (768px) to xl -</div>
                    <div class="d-none d-lg-block bg-success yespad">i am visible from lg (992px) to xl -</div>
                    <div class="d-none d-xl-block bg-success yespad">i am visible from xl (1200px) to -</div>
                    <div class="d-sm-none bg-danger yespad">i will be NOT visible from sm (576px) to xl -</div>
                    <div class="d-md-none bg-danger yespad">i will be NOT visible from md (768px) to xl -</div>
                    <div class="d-lg-none bg-danger yespad">i will be NOT visible from lg (992px) to xl -</div>
                    <div class="d-xl-none bg-danger yespad">i will be NOT visible from xl (1200px) to -</div>
                </div>
            </div>
            <p class="category">Selector Specificity SASS</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="parent">div class "parent"
                        <div class="child">div class "child" (first child)
                            <div class="grand-child">
                                div class "grand-child"
                            </div>
                            <div class="grand-child sibling">
                                div class "grand-child sibling"
                            </div>
                        </div>
                        <div class="child">
                            div class "child" (last child)
                        </div>
                    </div>
                </div>
                <div class="col-md-6 leftBorder">
                    <pre>
.parent {
  color:red;
  .child {
    margin-left:12px;
    color:blue;
    &:last-child {
      text-decoration:underline;
    }
    .grand-child  {
      margin-left:12px;
      color:green;
      &.sibling {
        color:purple;
      }
    }
  }
}


</pre>
                </div>
            </div>
        </section>
        <hr />
        <section class="container wow fadeInUp">
            <h2>Responsive Table w/ Search &amp; Sort</h2>
            <p class="category">Search and sort this responsive table</p>
            <div class="row">
                <div class="col-md-1">&nbsp;</div>
                <div class="col-md-10" id="flip-scroll">
                    <table class="table-sort">
                        <thead>
                            <tr>
                                <th class="table-sort" scope="col" title="President Number">#</th>
                                <th class="table-sort" scope="col">Participant</th>
                                <th class="table-sort" scope="col">Sessions</th>
                                <th class="table-sort" scope="col">Activation Year</th>
                                <th class="table-sort" scope="col">Facility</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>George Martin</td>
                                <td>two</td>
                                <td>2014</td>
                                <td>Dallas, TX</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Adam Benson</td>
                                <td>one</td>
                                <td>1997</td>
                                <td>Baltimore, MD</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Thomas Maxwell</td>
                                <td>two</td>
                                <td>2011</td>
                                <td>Dallas, TX</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>James Harte</td>
                                <td>two</td>
                                <td>2017</td>
                                <td>Houston, TX</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>James Latham</td>
                                <td>two</td>
                                <td>2012</td>
                                <td>San Francisco, CA</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Quincy Peebles</td>
                                <td>one</td>
                                <td>2009</td>
                                <td>San Francisco, CA</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Andrew Taylor</td>
                                <td>two</td>
                                <td>2007</td>
                                <td>Seattle, WA</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Van Benson Heinz</td>
                                <td>one</td>
                                <td>2001</td>
                                <td>Modesto, CA</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Henry Stevens</td>
                                <td>three</td>
                                <td>2011</td>
                                <td>Sacramento, CA</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Tyler Hayes</td>
                                <td>three</td>
                                <td>2008</td>
                                <td>Colorado Springs, CA</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Kim Chaiseman</td>
                                <td>one</td>
                                <td>2009</td>
                                <td>Seattle, WA</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Zachary Penmore</td>
                                <td>three</td>
                                <td>2014</td>
                                <td>Tacoma, WA</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Amy Fillmore</td>
                                <td>three</td>
                                <td>2016</td>
                                <td>Albany, NY</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Franklin Nixon Jr</td>
                                <td>one</td>
                                <td>2017</td>
                                <td>Miami, FL</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Carrie Buchanan</td>
                                <td>one</td>
                                <td>1999</td>
                                <td>San Diego, CA</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Tyler McMann</td>
                                <td>three</td>
                                <td>2013</td>
                                <td>Baltimore, MD</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Andrew Wilson</td>
                                <td>three</td>
                                <td>2014</td>
                                <td>Colorado Springs, CO</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Charles Grant</td>
                                <td>two</td>
                                <td>2009</td>
                                <td>Houston, TX</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-1">&nbsp;</div>
            </div>
        </section>
        <hr />
        <section id="basic-elements" class="container wow fadeInDown">
            <h2>Buttons &amp; Colors</h2>
            <div id="buttons">
                <p class="category">button styles</p>
                <div class="row">
                    <div class="col-md-10">
                        <button class="btn btn-primary" type="button">Default</button>
                        <button class="btn btn-primary btn-round" type="button">Round</button>
                        <button class="btn btn-primary btn-curved" type="button">Curved</button>
                        <button class="btn btn-primary btn-curved" type="button">
                            <i class="now-ui-icons ui-2_favourite-28"></i> With Icon
                        </button>
                        <button class="btn btn-primary btn-icon btn-curved" type="button">
                            <i class="now-ui-icons ui-2_favourite-28"></i>
                        </button>
                        <button class="btn btn-primary btn-simple btn-curved" type="button">Simple</button>
                    </div>
                </div>
                <p class="category">button sizes</p>
                <div class="row">
                    <div class="col-md-10">
                        <button class="btn btn-primary btn-sm">Small</button>
                        <button class="btn btn-primary">Regular</button>
                        <button class="btn btn-primary btn-lg">Large</button>
                    </div>
                </div>
                <p class="category">button colors</p>
                <div class="row">
                    <div class="col-md-10">
                        <button class="btn">Default</button>
                        <button class="btn btn-primary">Primary</button>
                        <button class="btn btn-secondary">Secondary</button>
                        <button class="btn btn-tertiary">Tertiary</button>
                        <button class="btn btn-info">Info</button>
                        <button class="btn btn-success">Success</button>
                        <button class="btn btn-warning">Warning</button>
                        <button class="btn btn-danger">Danger</button>
                        <button class="btn btn-neutral">Neutral</button>
                    </div>
                </div>
                <p class="category">Button Links</p>
                <div class="row">
                    <div class="col-md-8">
                        <button class="btn btn-link">Default</button>
                        <button class="btn btn-link btn-primary ">Primary</button>
                        <button class="btn btn-link btn-info">Info</button>
                        <button class="btn btn-link btn-success">Success</button>
                        <button class="btn btn-link btn-warning">Warning</button>
                        <button class="btn btn-link btn-danger">Danger</button>
                    </div>
                </div>
            </div>
        </section>
        <hr />
        <section id="inputs" class="container wow fadeInUp">
            <h2>Inputs</h2>
            <p class="category">Form Controls</p>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <input type="text" value="" placeholder="Regular" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group has-success">
                        <input type="text" value="Success" class="form-control form-control-success" />
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group has-danger">
                        <input type="email" value="Error Input" class="form-control form-control-danger" />
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user-circle"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Left Font Awesome Icon">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Right Nucleo Icon">
                        <span class="input-group-addon">
                            <i class="now-ui-icons users_single-02"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="space-70"></div>
            <div class="row" id="checkRadios">
                <div class="col-sm-6 col-lg-3">
                    <p class="category">Checkboxes</p>
                    <div class="checkbox">
                        <input id="checkbox1" type="checkbox">
                        <label for="checkbox1">
                            Unchecked
                        </label>
                    </div>
                    <div class="checkbox">
                        <input id="checkbox2" type="checkbox" checked="">
                        <label for="checkbox2">
                            Checked
                        </label>
                    </div>
                    <div class="checkbox">
                        <input id="checkbox3" type="checkbox" disabled="">
                        <label for="checkbox3">
                            Disabled unchecked
                        </label>
                    </div>
                    <div class="checkbox">
                        <input id="checkbox4" type="checkbox" checked="" disabled="">
                        <label for="checkbox4">
                            Disabled checked
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <p class="category">Radios</p>
                    <div class="radio">
                        <input type="radio" name="radio1" id="radio1" value="option1">
                        <label for="radio1">
                            Radio is off
                        </label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="radio1" id="radio2" value="option2" checked="">
                        <label for="radio2">
                            Radio is on
                        </label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="radio3" id="radio3" value="option3" disabled="">
                        <label for="radio3">
                            Disabled radio is off
                        </label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="radio4" id="radio4" value="option4" checked="" disabled="">
                        <label for="radio4">
                            Disabled radio is on
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <p class="category">Toggle Buttons</p>
                    <input type="checkbox" name="checkbox" class="bootstrap-switch" checked />
                    <br>
                    <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="ON"
                        data-off-label="OFF" />
                </div>
                <div class="col-sm-6 col-lg-3">
                    <p class="category">Sliders</p>
                    <div id="sliderRegular" class="slider"></div>
                    <br>
                    <div id="sliderDouble" class="slider slider-primary"></div>
                </div>
            </div>
        </section>
        <hr />
        <section id="middle" class="wow fadeInUp">
            <div class="container">
                <h2>Parallax</h2>
            </div>
            <!-- First Parallax Section -->
            <div class="paral paralsec txt-white">
                <p class="lead pt20">Full-width Parallax Div/Row</p>
                <p class="lead">Here is a short description 1</p>
                <p class="lead">
                    <a class="btn btn-secondary btn-lg btn-md" href="#" role="button">Here is a button</a>
                </p>
            </div>
            <!-- Add More Parallax Sections Here -->
        </section>
        <hr />
        <section class="container wow fadeInUp">
            <h2>Tabs on Cards</h2>
            <div class="row">
                <div class="col-sm-6">
                    <p class="category">Tabs with Icons on Card</p>
                    <!-- Nav tabs -->
                    <div class="card nopad">
                        <ul class="nav nav-tabs nav-tabs-secondary justify-content-center">
                            <li class="nav-item nav-link nojump active" data-toggle="tab" data-target="#home">
                                <i class="now-ui-icons objects_umbrella-13"></i> Home
                            </li>
                            <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#profile">
                                <i class="now-ui-icons shopping_cart-simple"></i> Profile
                            </li>
                            <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#messages">
                                <i class="now-ui-icons shopping_shop"></i> Messages
                            </li>
                            <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#settings">
                                <i class="now-ui-icons ui-2_settings-90"></i> Settings
                            </li>
                        </ul>
                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <p>"Everywhere but in Valencia people are mowing lawns, planting fences, tuning
                                        engines, counting receipts, baking bread, hanging laundry, keeping the wheel
                                        turning. Tradition, not convention, holds us here in Valencia . In the
                                        valley, the wheel does not turn. We keep it still, anchor it in the beach,
                                        in the brackish water of Vero bay. But if I choose, I could sit on my hands
                                        upon a dune and watch the sky, and when the clouds thin, I can raise my head
                                        to watch the sea terns dipping into the waves and coming forth into the sky,
                                        back into the light. </p>
                                </div>
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <p> I could watch them glide inches above the sea...inches above the seatop at
                                        unfathomable speeds. The littleness of the bird, defiant and inimitable
                                        against the rushing backdrop is equally unfathomable, yet the little bird
                                        dismisses it without a sense of ego or bravado. Mass and energy, sprinting
                                        elements of wind and water exist outside the wheel where ambition and
                                        progress is overruled by freedom and instinct. If I chose to, I could watch
                                        the performance from a bluff, unconcerned with its science as the terns
                                        artfully fly undaunted by the sea's eerie and magnetic charm. </p>
                                </div>
                                <div class="tab-pane" id="messages" role="tabpanel">
                                    <p>I could watch these little birds dance like ice-skating companions whose
                                        familiar touches have been practiced to extinction. I could observe this
                                        foreplay of physics, the mating of balance and gravity that is today, at
                                        this precise moment, more dynamic than ever. And then suddenly comes the
                                        peace. The serenity between the breezes, the incoming waves, the barking of
                                        the gulls. It's like stepping off a treadmill and hearing its wheels and
                                        bearings rub slowly to a stop. And everything is calm. A visual stillness
                                        comes like a meteor getting darker the deeper it moves into space.</p>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <p> It is like a rest in a musical score when the chorus and the orchestra stops
                                        for a beat or two and nothing plays but the space: the silent part that
                                        comes at the end of a foreign film before the credits when it is quiet and
                                        the last scene freezes upon the screen. I could see and hear that today on
                                        Tower Hill if I chose to. It is the last scene when serenity takes over and
                                        the recapitulation finally and really does surrender. The tern drags a talon
                                        along the seatop much like a lazy schoolgirl floating in a raft downstream
                                        dips her foot into the flood, dragging a toe beneath her. "
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <p class="category">Tabs with Background on Card</p>
                    <!-- Tabs with Background on Card -->
                    <div class="card nopad">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab"
                                        aria-controls="One" aria-selected="true">One</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab"
                                        aria-controls="Two" aria-selected="false">Two</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab"
                                        aria-controls="Three" aria-selected="false">Three</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active p-3" id="one" role="tabpanel"
                                aria-labelledby="one-tab">
                                <h5 class="card-title">Tab Card One</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                                <h5 class="card-title">Tab Card Two</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                                <h5 class="card-title">Tab Card Three</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>

                        </div>
                    </div>
                    <!-- End Tabs on plain Card -->
                </div>
            </div>
        </section>
        <hr />
        <section id="progress-bars" class="container wow fadeInUp">
            <h2>Badges &amp; Pills</h2>
            <div class="row">
                <div class="col-md-6">
                    <p class="category">Badges</p>
                    <span class="badge badge-default">Default</span>
                    <span class="badge badge-primary">Primary</span>
                    <span class="badge badge-secondary">Secondary</span>
                    <span class="badge badge-tertiary">Tertiary</span>
                    <span class="badge badge-warning">Warning</span>
                    <span class="badge badge-danger">Danger</span>
                </div>
                <div class="col-md-6 leftBorder">
                    <p class="category">Pills</p>
                    <ul class="nav nav-pills nav-pills-primary" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#active" role="tablist">
                                <i class="fa fa-diamond"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#link" role="tablist">
                                <i class="fa fa-thermometer-full"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#link" role="tablist">
                                <i class="fa fa-suitcase"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" data-toggle="tab" href="#disabled" role="tablist">
                                <i class="fa fa-exclamation"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <hr />
        <section class="container progress-element wow fadeInUp">
            <h2>Bars &amp; Pagination</h2>
            <div class="row">
                <div class="col-md-6">
                    <p class="category">Progress Bars</p>
                    <div class="progress-container progress-primary">
                        <strong>English</strong>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100">100</div>
                        </div>
                        <strong>French</strong>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                aria-valuemax="100">50</div>
                        </div>
                        <strong>Spanish</strong>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                aria-valuemax="100">20</div>
                        </div>
                        <div class="spacer" data-height="30"></div>
                    </div>
                </div>
                <div class="col-md-6 leftBorder">
                    <p class="category">Pagination</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#link">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#link">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#link">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#link">5</a>
                            </li>
                        </ul>
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#link" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa fa-angle-double-left"
                                            aria-hidden="true"></i></span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#link">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#link">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#link">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#link" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <hr />
        <section class="container wow fadeInUp">
            <h2>Icons &amp; Typography</h2>
            <p class="category">Icons (Ligature Symbols)</p>
            <div class="row">
                <div class="col-md-1">&nbsp;</div>
                <div class="col-md-10">
                    <table>
                        <tr class="header">
                            <th class="symbol">Symbol</th>
                            <th class="ligature">Ligature</th>
                            <th class="unicode">Unicode</th>
                            <th class="symbol">Symbol</th>
                            <th class="ligature">Ligature</th>
                            <th class="unicode">Unicode</th>
                        </tr>
                        <tr>
                            <td class="lsf symbol">table</td>
                            <td class="ligature">table, cell</td>
                            <td class="unicode">\E127</td>
                            <td class="lsf symbol">copy</td>
                            <td class="ligature">copy, files</td>
                            <td class="unicode">\E038</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">cut</td>
                            <td class="ligature">cut, scissors</td>
                            <td class="unicode">\E03b</td>
                            <td class="lsf symbol">backspace</td>
                            <td class="ligature">backspace</td>
                            <td class="unicode">\E010</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">alignleft</td>
                            <td class="ligature">alignleft</td>
                            <td class="unicode">\E005</td>
                            <td class="lsf symbol">aligncenter</td>
                            <td class="ligature">aligncenter</td>
                            <td class="unicode">\E004</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">alignright</td>
                            <td class="ligature">alignright</td>
                            <td class="unicode">\E006</td>
                            <td class="lsf symbol">alignadjust</td>
                            <td class="ligature">alignadjust</td>
                            <td class="unicode">\E003</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">italic</td>
                            <td class="ligature">italic</td>
                            <td class="unicode">\E079</td>
                            <td class="lsf symbol">bold</td>
                            <td class="ligature">bold</td>
                            <td class="unicode">\E01f</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">underline</td>
                            <td class="ligature">underline</td>
                            <td class="unicode">\E132</td>
                            <td class="lsf symbol">strike</td>
                            <td class="ligature">strike</td>
                            <td class="unicode">\E159</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">emphasis</td>
                            <td class="ligature">emphasis</td>
                            <td class="unicode">\E152</td>
                            <td class="lsf symbol">code</td>
                            <td class="ligature">code</td>
                            <td class="unicode">\E032</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">link</td>
                            <td class="ligature">link, chain</td>
                            <td class="unicode">\E082</td>
                            <td class="lsf symbol">quote</td>
                            <td class="ligature">quote</td>
                            <td class="unicode">\E10b</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">graph</td>
                            <td class="ligature">graph</td>
                            <td class="unicode">\E05b</td>
                            <td class="lsf symbol">magic</td>
                            <td class="ligature">magic, effect</td>
                            <td class="unicode">\E089</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">brush</td>
                            <td class="ligature">brush</td>
                            <td class="unicode">\E022</td>
                            <td class="lsf symbol">color</td>
                            <td class="ligature">color, palette</td>
                            <td class="unicode">\E033</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">contrast</td>
                            <td class="ligature">contrast, adjust</td>
                            <td class="unicode">\E001</td>
                            <td class="lsf symbol">ink</td>
                            <td class="ligature">ink, water</td>
                            <td class="unicode">\E14a</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">gradation</td>
                            <td class="ligature">gradation, grayscale</td>
                            <td class="unicode">\E149</td>
                            <td class="lsf symbol">sepia</td>
                            <td class="ligature">sepia, grunge</td>
                            <td class="unicode">\E14e</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">invert</td>
                            <td class="ligature">invert</td>
                            <td class="unicode">\E14b</td>
                            <td class="lsf symbol">paint</td>
                            <td class="ligature">paint</td>
                            <td class="unicode">\E09b</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">paramater</td>
                            <td class="ligature">paramater, param, slider</td>
                            <td class="unicode">\E09c</td>
                            <td class="lsf symbol">crop</td>
                            <td class="ligature">crop</td>
                            <td class="unicode">\E039</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">check</td>
                            <td class="ligature">check, ok</td>
                            <td class="unicode">\E029</td>
                            <td class="lsf symbol">checkbox</td>
                            <td class="ligature">checkbox</td>
                            <td class="unicode">\E02a</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">checkboxempty</td>
                            <td class="ligature">checkboxempty</td>
                            <td class="unicode">\E02b</td>
                            <td class="lsf symbol">pc</td>
                            <td class="ligature">pc, display, computer</td>
                            <td class="unicode">\E09e</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">keyboard</td>
                            <td class="ligature">keyboard</td>
                            <td class="unicode">\E07d</td>
                            <td class="lsf symbol">mobile</td>
                            <td class="ligature">mobile, iphone, smartphone</td>
                            <td class="unicode">\E078</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">horizontal</td>
                            <td class="ligature">horizontal</td>
                            <td class="unicode">\E071</td>
                            <td class="lsf symbol">vertical</td>
                            <td class="ligature">vertical</td>
                            <td class="unicode">\E138</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">web</td>
                            <td class="ligature">web</td>
                            <td class="unicode">\E13f</td>
                            <td class="lsf symbol">mail</td>
                            <td class="ligature">mail</td>
                            <td class="unicode">\E08a</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">shopping</td>
                            <td class="ligature">shopping, cart</td>
                            <td class="unicode">\E119</td>
                            <td class="lsf symbol">dashboard</td>
                            <td class="ligature">dashboard</td>
                            <td class="unicode">\E03c</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">key</td>
                            <td class="ligature">key</td>
                            <td class="unicode">\E07c</td>
                            <td class="lsf symbol">sns</td>
                            <td class="ligature">sns, network</td>
                            <td class="unicode">\E11f</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">calendar</td>
                            <td class="ligature">calendar</td>
                            <td class="unicode">\E15e</td>
                            <td class="lsf symbol">tabs</td>
                            <td class="ligature">tabs</td>
                            <td class="unicode">\E095</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">dailycalendar</td>
                            <td class="ligature">dailycalendar</td>
                            <td class="unicode">\E025</td>
                            <td class="lsf symbol">ban</td>
                            <td class="ligature">ban</td>
                            <td class="unicode">\E012</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">remove</td>
                            <td class="ligature">remove, close</td>
                            <td class="unicode">\E10f</td>
                            <td class="lsf symbol">pen</td>
                            <td class="ligature">pen, pencil, write</td>
                            <td class="unicode">\E09f</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">eraser</td>
                            <td class="ligature">eraser</td>
                            <td class="unicode">\E148</td>
                            <td class="lsf symbol">edit</td>
                            <td class="ligature">edit, addnew</td>
                            <td class="unicode">\E041</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">tag</td>
                            <td class="ligature">tag</td>
                            <td class="unicode">\E128</td>
                            <td class="lsf symbol">setup</td>
                            <td class="ligature">setup, wrench, spanner</td>
                            <td class="unicode">\E117</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">setting</td>
                            <td class="ligature">setting, gear</td>
                            <td class="unicode">\E055</td>
                            <td class="lsf symbol">etc</td>
                            <td class="ligature">etc, ellipsis</td>
                            <td class="unicode">\E043</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">category</td>
                            <td class="ligature">category, drawer</td>
                            <td class="unicode">\E028</td>
                            <td class="lsf symbol">clip</td>
                            <td class="ligature">clip, attach</td>
                            <td class="unicode">\E030</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">bookmark</td>
                            <td class="ligature">bookmark</td>
                            <td class="unicode">\E021</td>
                            <td class="lsf symbol">book</td>
                            <td class="ligature">book</td>
                            <td class="unicode">\E020</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">album</td>
                            <td class="ligature">album</td>
                            <td class="unicode">\E002</td>
                            <td class="lsf symbol">user</td>
                            <td class="ligature">user, you, human, man</td>
                            <td class="unicode">\E137</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">friend</td>
                            <td class="ligature">friend, users</td>
                            <td class="unicode">\E051</td>
                            <td class="lsf symbol">group</td>
                            <td class="ligature">group</td>
                            <td class="unicode">\E05c</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">laugh</td>
                            <td class="ligature">laugh</td>
                            <td class="unicode">\E07f</td>
                            <td class="lsf symbol">wink</td>
                            <td class="ligature">wink</td>
                            <td class="unicode">\E081</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">smile</td>
                            <td class="ligature">smile</td>
                            <td class="unicode">\E11e</td>
                            <td class="lsf symbol">surprise</td>
                            <td class="ligature">surprise</td>
                            <td class="unicode">\E124</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">frustrate</td>
                            <td class="ligature">frustrate</td>
                            <td class="unicode">\E052</td>
                            <td class="lsf symbol">trouble</td>
                            <td class="ligature">trouble</td>
                            <td class="unicode">\E12d</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">male</td>
                            <td class="ligature">male, man</td>
                            <td class="unicode">\E176</td>
                            <td class="lsf symbol">female</td>
                            <td class="ligature">female, woman, lady</td>
                            <td class="unicode">\E175</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">globe</td>
                            <td class="ligature">globe, global, earth</td>
                            <td class="unicode">\E058</td>
                            <td class="lsf symbol">home</td>
                            <td class="ligature">home, house</td>
                            <td class="unicode">\E072</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">building</td>
                            <td class="ligature">building</td>
                            <td class="unicode">\E023</td>
                            <td class="lsf symbol">rss</td>
                            <td class="ligature">rss, feed</td>
                            <td class="unicode">\E113</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">server</td>
                            <td class="ligature">server</td>
                            <td class="unicode">\E16c</td>
                            <td class="lsf symbol">sitemap</td>
                            <td class="ligature">sitemap</td>
                            <td class="unicode">\E16d</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">app</td>
                            <td class="ligature">app, application</td>
                            <td class="unicode">\E009</td>
                            <td class="lsf symbol">memo</td>
                            <td class="ligature">memo</td>
                            <td class="unicode">\E08d</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">meal</td>
                            <td class="ligature">meal, dish, lunch</td>
                            <td class="unicode">\E08c</td>
                            <td class="lsf symbol">coffee</td>
                            <td class="ligature">coffee, cup</td>
                            <td class="unicode">\E146</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">spa</td>
                            <td class="ligature">spa, onsen</td>
                            <td class="unicode">\E177</td>
                            <td class="lsf symbol">game</td>
                            <td class="ligature">game</td>
                            <td class="unicode">\E054</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">college</td>
                            <td class="ligature">college</td>
                            <td class="unicode">\E174</td>
                            <td class="lsf symbol">bag</td>
                            <td class="ligature">bag</td>
                            <td class="unicode">\E173</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">present</td>
                            <td class="ligature">present, gift</td>
                            <td class="unicode">\E109</td>
                            <td class="lsf symbol">umbrella</td>
                            <td class="ligature">umbrella</td>
                            <td class="unicode">\E178</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">twinkle</td>
                            <td class="ligature">twinkle, spark, hot</td>
                            <td class="unicode">\E073</td>
                            <td class="lsf symbol">crown</td>
                            <td class="ligature">crown</td>
                            <td class="unicode">\E03a</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">circle</td>
                            <td class="ligature">circle</td>
                            <td class="unicode">\E02e</td>
                            <td class="lsf symbol">info</td>
                            <td class="ligature">info, information</td>
                            <td class="unicode">\E075</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">help</td>
                            <td class="ligature">help</td>
                            <td class="unicode">\E070</td>
                            <td class="lsf symbol">refreshbutton</td>
                            <td class="ligature">refreshbutton</td>
                            <td class="unicode">\E14d</td>
                        </tr>
                        <tr>
                            <td class="lsf symbol">terminal</td>
                            <td class="ligature">terminal</td>
                            <td class="unicode">\E16e</td>
                            <td class="lsf symbol"></td>
                            <td class="ligature"></td>
                            <td class="unicode"></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-1">&nbsp;</div>
            </div>
            <p id="bottom">&nbsp;</p>
            <p class="category">Typography <small>(in Card container)</small></p>
            <div class="row">
                <div class="card">
                    <div class="typography-line">
                        <h1>
                            <span>Header 1</span>Walking Through Brambles
                        </h1>
                    </div>
                    <div class="typography-line">
                        <h2>
                            <span>Header 2</span>Walking Through Brambles
                        </h2>
                    </div>
                    <div class="typography-line">
                        <h3>
                            <span>Header 3</span>Walking Through Brambles
                        </h3>
                    </div>
                    <div class="typography-line">
                        <h4>
                            <span>Header 4</span>Walking Through Brambles
                        </h4>
                    </div>
                    <div class="typography-line">
                        <h5>
                            <span>Header 5</span>Walking Through Brambles
                        </h5>
                    </div>
                    <div class="typography-line">
                        <h6>
                            <span>Header 6</span>Walking Through Brambles
                        </h6>
                    </div>
                    <div class="typography-line">
                        <p>
                            <span>Paragraph</span>
                            Occasionally I'll wake with a new attitude. I'll discover a new fragrance coming through
                            the window or from the pile of old books on the nightstand or from the bed sheets
                            recently washed by a quiet stranger still adjusting to her own independence. And then
                            I'll question my own freedom and discover that my dreams have been indentured by change
                            and I've embraced a new choice as though it were a long aspired goal finally reached. By
                            nightfall I will remember what I've lost and realize that my independence was at some
                            point compromised by a lifetime of worry, doubt and ignorance. Experience is my last
                            reward; and time will make from it another memory that I will tuck away inside me until
                            the dream is over and I awake to another day tapping at my window.
                        </p>
                    </div>
                    <div class="typography-line">
                        <span>Quote</span>
                        <blockquote>
                            <p class="blockquote blockquote-primary">
                                "Occasionally I'll wake with a new attitude. I'll discover a new fragrance coming
                                through the window or from the pile of old books on the nightstand or from the bed
                                sheets recently washed by a quiet stranger still adjusting to her own independence."
                                <br>
                                <br>
                                <small>
                                    - GWL: Walking Through Brambles
                                </small>
                            </p>
                        </blockquote>
                    </div>
                    <div class="typography-line">
                        <span>Muted Text</span>
                        <p class="text-muted">
                            Meanwhile, the town square will burst with energy as my backyard recovers from my
                            lawnmower's scourging.
                        </p>
                    </div>
                    <div class="typography-line">
                        <span>Primary Text</span>
                        <p class="text-primary">
                            Meanwhile, the town square will burst with energy as my backyard recovers from my
                            lawnmower's scourging.</p>
                    </div>
                    <div class="typography-line">
                        <span>Info Text</span>
                        <p class="text-info">
                            Meanwhile, the town square will burst with energy as my backyard recovers from my
                            lawnmower's scourging. </p>
                    </div>
                    <div class="typography-line">
                        <span>Success Text</span>
                        <p class="text-success">
                            Meanwhile, the town square will burst with energy as my backyard recovers from my
                            lawnmower's scourging.</p>
                    </div>
                    <div class="typography-line">
                        <span>Warning Text</span>
                        <p class="text-warning">
                            Meanwhile, the town square will burst with energy as my backyard recovers from my
                            lawnmower's scourging.
                        </p>
                    </div>
                    <div class="typography-line">
                        <span>Danger Text</span>
                        <p class="text-danger">
                            Meanwhile, the town square will burst with energy as my backyard recovers from my
                            lawnmower's scourging. </p>
                    </div>
                    <div class="typography-line">
                        <h2>
                            <span>Small Tag</span>
                            Header with small subtitle
                            <br>
                            <small>Use "small" tag for the headers</small>
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sart Modal -->
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <h4 class="title title-up">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>Occasionally I'll wake with a new attitude. I'll discover a new fragrance coming through
                            the window or from the pile of old books on the nightstand or from the bed sheets
                            recently washed by a quiet stranger still adjusting to her own independence. And then
                            I'll question my own freedom and discover that my dreams have been indentured by change
                            and I've embraced a new choice as though it were a long aspired goal finally reached. By
                            nightfall I will remember what I've lost and realize that my independence was at some
                            point compromised by a lifetime of worry, doubt and ignorance. Experience is my last
                            reward; and time will make from it another memory that I will tuck away inside me until
                            the dream is over and I awake to another day tapping at my window.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default">Nice Button</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  End Modal -->
        <!-- Mini Modal -->
        <div class="modal fade modal-mini modal-primary" id="myModal2" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <div class="modal-profile">
                            <i class="now-ui-icons users_circle-08"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p>Occasionally I'll wake with a new attitude.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link btn-neutral">Back</button>
                        <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  End Modal -->
    </main>
    <?php include '../pages/inc/footer.php'; ?>
    <?php include '../pages/inc/globals-bottom.php'; ?>
    <script>
    $(".myTab").click(function() {
        $(".myTab").removeClass("active"), $(".myTab").removeClass("current"), $(this).addClass("current")
    });

    $(function() {

        'use strict'

        // Sliders for demo purpose in refine cards section
        var slider = document.getElementById('sliderRegular');
        noUiSlider.create(slider, {
            start: 40,
            connect: [true, false],
            range: {
                min: 0,
                max: 100
            }
        });

        var slider2 = document.getElementById('sliderDouble');
        noUiSlider.create(slider2, {
            start: [20, 60],
            connect: true,
            range: {
                min: 0,
                max: 100
            }
        });

        $('table.table-sort').tablesort();
        $('table').filterTable();
        $('.accordion1').beefup();



    });

    var delay = 850;
    $(".progress-bar").each(function(i) {
        $(this).delay(delay * i).animate({
            width: $(this).attr('aria-valuenow') + '%'
        }, delay);

        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: delay,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now) + '%');
            }
        });
    });

    new WOW().init();
    </script>
    <div class="counter d-none d-sm-block">
        <?php
            $count_my_page = ("countlog-bs.txt");
            $hits = file($count_my_page);
            $hits[0]++;
            $fp = fopen($count_my_page, "w");
            fputs($fp, "$hits[0]");
            fclose($fp);
            echo $hits[0];
            ?>
    </div>
</body>

</html>