<div class="se-pre-con"></div>
<script>
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>
<style type="text/css">
    @media screen and (min-width: 572px) {
        .onlysmall {
            display: none;
        }
    }

    @media screen and (max-width: 571px) {
        .onlysmall {
            display: block;
            border: 1px solid rgba(2, 109, 14, 0.3) !important;
            border-radius: 2px;
            padding: 0 30px;
            margin-bottom: 20px;
            background: rgba(4, 133, 125, 0.3) !important;
            text-align: center;
        }

        ul {
            padding-left: 0;
        }

        li {
            list-style-type: none;
        }

    }
</style>

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
                <a class="navbar-brand" href="../../index.php" rel="tooltip"
                   title="Created by Adam @ www.ui-design-engineering.com" data-placement="bottom">
                    myuitkit.com
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

                            <p>am@ui-design-engineering.com</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header" filter-color="green">
        <div class="page-header-image" data-parallax="true"
             style="background-image: url('/dist/img/bg-parallax.jpg');"></div>
        <!-- First Parallax Section -->
        <div class="container">
            <div class="pt100">
                <h1 class="txt-white">SASS-ified BS-4 Kit</h1>
                <a href="../pages/bs-4-sass-kit.zip">
                    <button class="btn btn-primary btn-curved" type="button">Download This Kit</button>
                </a>

                <div class="col-md-12 mt50 d-none d-sm-block">
                    <ul id="tabsJustified" class="nav nav-tabs">
                        <li class="nav-item"><a href="/pages/jump.php" class="nav-link small text-uppercase square">About</a></li>
                        <li class="nav-item"><a href="#" data-target="#current1" data-toggle="tab"
                                                class="nav-link small text-uppercase active square">Templates</a></li>
                    </ul>
                    <div class="tab-wrapper">
                        <div id="tabsJustifiedContent" class="tab-content">
                            <div id="full1" class="tab-pane fade">
                                <div class="row tight smoke">
                                    <div class="col-sm-6">
                                        <p class="lead">This SASS-ified BS-4 Kit download is a php website that uses
                                            server-side includes for common components like header, navigation, and
                                            footer. You can reskin the app by merely changing the scss variables. The
                                            kit uses Grunt to compile and concatenate js and css files. Feel free to
                                            examine the grunt file and make changes as you see fit.</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="lead">Most elements/components are stock BS4, however I have used a
                                            few plugins that perform better than the out-of-the-box Bootstrap. Plugins
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
                            <div id="current1" class="tab-pane fade active show">
                                <div class="row tight smoke">
                                    <div class="col-sm-4">
                                        <h4>Stock BS-4 Templates</h4>
                                        <ul>
                                            <li>
                                                <a href="/pages/album.php">Album</a>
                                            </li>
                                            <li>
                                                <a href="/pages/blog.php">Blog</a>
                                            </li>
                                            <li>
                                                <a href="/pages/carousel.php">Carousel</a>
                                            </li>
                                            <li>
                                                <a href="/pages/offcanvas.php">Offcanvas (sidebar)</a>
                                            </li>
                                            <li>
                                                <a href="/pages/grid.php">Grid</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4>...More</h4>
                                        <ul>
                                            <li>
                                                <a href="/pages/justified-nav.php">Justified Nav</a>
                                            </li>
                                            <li>
                                                <a href="/pages/navbars.php">Navbars</a>
                                            </li>
                                            <li>
                                                <a href="/pages/signin.php">Sign-in</a>
                                            </li>
                                            <li>
                                                <a href="/pages/starter-template.php">Starter
                                                    Template</a>
                                            </li>
                                            <li>
                                                <a href="/pages/sticky-footer.php">Sticky Footer</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4>Full Non-Sass Apps</h4>
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
                                <a href="/pages/album.php">Album</a>
                            </li>
                            <li>
                                <a href="/pages/blog.php">Blog</a>
                            </li>
                            <li>
                                <a href="/pages/carousel.php">Carousel</a>
                            </li>
                            <li>
                                <a href="/pages/offcanvas.php">Offcanvas (sidebar)</a>
                            </li>
                            <li>
                                <a href="/pages/grid.php">Grid</a>
                            </li>
                            <li>
                                <a href="/pages/justified-nav.php">Justified Nav</a>
                            </li>
                            <li>
                                <a href="/pages/navbars.php">Navbars</a>
                            </li>
                            <li>
                                <a href="/pages/signin.php">Sign-in</a>
                            </li>
                            <li>
                                <a href="/pages/starter-template.php">Starter
                                    Template</a>
                            </li>
                            <li>
                                <a href="/pages/sticky-footer.php">Sticky Footer</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add More Parallax Sections Here -->
    </div>
</header>
