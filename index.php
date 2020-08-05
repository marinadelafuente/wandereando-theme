<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css">
    <title>Wandereando</title>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ae3f626c7b.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">

<?php wp_head(); ?>

</head>

<body>
    <header class="header">
        <div class="container-fluid">
            <div class="row justify-content-end align-items-start">
                <div class="col-6 col-md-4 text-center pr-2">
                    <img class="w-100" src="<?php bloginfo('template_url'); ?>/img/wandereando-wider.png" alt="wandereando logo">
                </div>
                <div class="col-6 col-md-4">
                    <ul class="social-header list-inline text-right pt-2">
                        <li class="list-inline-item text-right">
                            <a href="#">
                                <span class="fa-stack">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item text-right">
                            <a href="#">
                                <span class="fa-stack">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item text-right">
                            <a href="#">
                                <span class="fa-stack">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu-bar text-sm-center">
            <nav class="container">
                <ul class="menu-list list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">About us</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Popular Destinations</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Location</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Contact us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main">
        <div class="container-fluid main-container">
            <!-- SLIDER -->
            <div id="slider-home" class="carousel slide" data-ride="carousel"">
                <ol class=" carousel-indicators">
                <li data-target="#slider-home" data-slide-to="0" class="active"></li>
                <li data-target="#slider-home" data-slide-to="1"></li>
                <li data-target="#slider-home" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class=" carousel-item active">
                        <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/trip1.jpg" alt="First slide">
                        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                            <h2>Discover New Zealand</h2>
                            <img class="w-75" alt="2x1" src="<?php bloginfo('template_url'); ?>/img/img-2x1.png">
                            <h3>nights in 4* hotels</h3>
                            <p>Click here to learn more</p>
                            <a href="#" role="button" class=" btn btn-primary btn-resp">Book now</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/trip2.jpg" alt="Second slide">
                        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                            <h2>Adventure package</h2>
                            <img alt="price" src="<?php bloginfo('template_url'); ?>/img/img-1200.png">
                            <h3>7 days in the Rocky Mountains</h3>
                            <p>Click here to learn more</p>
                            <a href="#" role="button" class="btn btn-primary btn-resp">Book now</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/trip3.jpg" alt="Third slide">
                        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                            <h2>Romantic scapes</h2>
                            <img alt="price" src="<?php bloginfo('template_url'); ?>/img/img-399.png">
                            <h3>beach view rooms</h3>
                            <p>Click here to learn more</p>
                            <a href="#" role="button" class="btn btn-primary btn-resp">Book now</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slider-home" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slider-home" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- FORM -->
            <div class="row mx-4">
                <div class="col-md-5 col-12 bg-light">
                    <form class="pt-4 form">
                        <h2>Book your next holiday:</h2>
                        <div class="form-inline py-4">
                            <div class="form-check form-check-inline custom-control custom-radio">
                                <input class="custom-control-input form-check-input" type="radio" name="flightType" id="return" value="option1" checked>
                                <label class="form-check-label custom-control-label pt-1" for="return">Return</label>
                            </div>
                            <div class="form-check form-check-inline custom-control custom-radio">
                                <input class="custom-control-input form-check-input" type="radio" name="flightType" id="oneWay" value="option2">
                                <label class="custom-control-label form-check-label pt-1" for="oneWay">One Way</label>
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <label class="lab col-auto pr-3" for="origin">From:</label>
                            <select class="col form-control" id="origin">
                                <option>Australia</option>
                                <option>New Zealand</option>
                                <option>Europe</option>
                                <option>Canada</option>
                                <option>USA</option>
                            </select>
                        </div>
                        <div class="form-group form-inline py-2">
                            <label class="lab col-auto pr-3" for="destiny">To:</label>
                            <select class="col form-control" id="destiny">
                                <option>New Zealand</option>
                                <option>Australia</option>
                                <option>Europe</option>
                                <option>Canada</option>
                                <option>USA</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-12">
                                <div class="form-group form-inline">
                                    <label class="lab col-auto pr-3" for="depart-date"> <i class="fas fa-plane-departure pr-2"></i>  Departing:</label>
                                    <input type="text" class="col form-control" id="depart-date" placeholder="01/06/2020">
                                </div>
                            </div>
                            <div class="col-xl-6 col-12">
                                <div class="form-group form-inline">
                                    <label class="lab col-auto pr-3" for="arrival-date"> <i class="fas fa-plane-arrival pr-2"></i>  Returning:</label>                              
                                    <input type="text" class="col form-control" id="arrival-date" placeholder="01/06/2020">
                                </div>
                            </div>
                        </div>
                        <div class="form-inline py-2">
                            <label for="people" class="col-form-label pr-3">Number of people:</label>
                            <input type="text" class="form-control col" placeholder="2 adults">
                        </div>
                        <div class="form-group form-inline pt-3">
                            <label class="lab col-auto pr-3" for="class">Ticket class:</label>
                            <select class="col form-control" id="class">
                                <option>Economy</option>
                                <option>Business</option>
                                <option>First Class</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-4">Search</button>
                    </form>
                </div>
                <!-- FAVOURITE DESTINATIONS -->
                <div class="col-md-7 col-12 pt-4 pr-0">
                    <h2 class="pb-4"><i class="fas fa-globe-americas"></i> Favourite destinations</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum neque omnis esse ducimus quidem exercitationem facilis labore sapiente impedit? Ut natus eaque incidunt dolorum odit ipsum hic quasi perspiciatis et.</p>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit vitae commodi quia tenetur quibusdam voluptatem error quod veritatis. Odit nobis ipsam deserunt! Sunt commodi numquam porro dolorem repellat laudantium odit.</p>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore aut neque minus ea totam quasi error corrupti tempore, praesentium temporibus recusandae, excepturi voluptates! Totam, dolore illo blanditiis nemo sed minima!</p>
                    <div class="row">
                        <div class="col-lg-4 col-6 py-3">
                            <img src="<?php bloginfo('template_url'); ?>/img/iceland.png" alt="Iceland" class="img-fluid mw-100">
                            <h4 class="text-center pt-2">Iceland</h4>
                        </div>
                        <div class="col-lg-4 col-6 py-3">
                            <img src="<?php bloginfo('template_url'); ?>/img/usa.png" alt="USA" class="img-fluid mw-100">
                            <h4 class="text-center pt-2">USA</h4>
                        </div>
                        <div class="col-lg-4 col-6 py-3">
                            <img src="<?php bloginfo('template_url'); ?>/img/japan.png" alt="Japan" class="img-fluid mw-100">
                            <h4 class="text-center pt-2">Japan</h4>
                        </div>
                        <div class="col-lg-4 col-6 py-3">
                            <img src="<?php bloginfo('template_url'); ?>/img/london.png" alt="London" class="img-fluid mw-100">
                            <h4 class="text-center pt-2">UK</h4>
                        </div>
                        <div class="col-lg-4 col-6 py-3">
                            <img src="<?php bloginfo('template_url'); ?>/img/iceland.png" alt="Imagen 5" class="img-fluid mw-100">
                            <h4 class="text-center pt-2">Iceland</h4>
                        </div>
                        <div class="col-lg-4 col-6 py-3">
                            <img src="<?php bloginfo('template_url'); ?>/img/usa.png" alt="Imagen 6" class="img-fluid mw-100">
                            <h4 class="text-center pt-2">USA</h4>
                        </div>
                    </div>
                </div>

                <!-- BLOG -->
                <div class="mt-5">
                    <h2 class="text-center">Blog</h2>
                    <div class="row justify-content-center mb-5">
                        <article class="col-lg-3 col-8 text-justify border-top border-dark article">
                            <a href="#">
                                <img src="<?php bloginfo('template_url'); ?>/img/hugs.jpg" class="img-fluid image">
                                <div class="imagebox">
                                    <h3>8 Heartwarming Stories From People That Have Made Our Week</h3>
                                    <p>15 April 2020</p>
                                    <p class="d-none d-xl-block">Recent weeks have been tough on so many people and businesses around the world, not knowing what the future is going to bring on or how the world is... <a class="continue" href=#>continue reading</a></p>
                                </div>
                            </a>
                        </article>
                        <article class="col-lg-3 col-8 text-justify border-top border-dark article">
                            <a href="#">
                                <img src="<?php bloginfo('template_url'); ?>/img/amelie.jpg" class="img-fluid image">
                                <div class="imagebox">
                                    <h3>28 Films That Will Transport You From Your Couch Far Far Away</h3>
                                    <p>1 April 2020</p>
                                    <p class="d-none d-xl-block">Need some escapism while stuck at home? Here’s a short list of curated films to take you over the seas and far away. Amelie - to Paris The ultimate... <a class="continue" href=#>continue reading</a></p>
                                </div>
                            </a>
                        </article>
                        <article class="col-lg-3 col-8 text-justify border-top border-dark article">
                            <a href="#">
                                <img src="<?php bloginfo('template_url'); ?>/img/languages.jpg" class="img-fluid image">
                                <div class="imagebox">
                                    <h3>5 Ways To Learn A Language At Home For Your Next Trip</h3>
                                    <p>7 April 2020</p>
                                    <p class="d-none d-xl-block">Have you always wanted to be that traveller who can converse effortlessly in the local language? Order a coffee, ask for the bill, buy a bus ticket... <a class="continue" href=#>continue reading</a></p>
                                </div>
                            </a>
                        </article>
                    </div>
                </div>
            </div>
            <!-- CONTACT -->
            <div class="row aside mt-3 pb-2 justify-content-center">
                    <div class="col-lg-3 col-4 text-justify article">
                        <h3>Call us <i class="fas fa-phone-alt float-md-right hidden-xs-down"></i></h3>
                        <p>Recent weeks have been tough on so many local people and businesses here in Australia, ourselves at Flight Centre included. Our Australian community...<a href=#>continue reading</a>
                        </p>
                    </div>
                    <div class="col-lg-3 col-4 text-justify article">
                        <h3>Visit us <i class="fas fa-globe-americas float-md-right hidden-xs-down"></i></h3>
                        <p>Have you always wanted to be that traveller who can converse effortlessly in the local language? Order a coffee, ask for the bill, buy a bus ticket... <a href=#>continue reading</a>
                        </p>
                    </div>
                    <div class="col-lg-3 col-4 text-justify article">
                        <h3>Ask for a quote <i class="fas fa-phone-alt float-md-right hidden-xs-down"></i></h3>
                        <p>Need some escapism while stuck at home? Here’s a short list of curated films to take you over the seas and far away. Amelie - to Paris The ultimate... <a href=#>continue reading</a>
                        </p>
                    </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="list-inline justify-content-around">
                        <li class="list-inline-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms & Conditions</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Privacy policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 text-center">
                    <p>wandereando &copy; 2020 - All rights reserved</p>
                </div>
            </div>
        </div>

    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/general.js" type="text/javascript"></script>
    <?php wp_footer(); ?>
</body>

</html>