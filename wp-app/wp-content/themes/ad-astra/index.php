<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Labb 1</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 col-sm-6">
                        <a class="logo" href="index.html">Labb 1</a>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <form id="searchform" class="searchform">
                            <div>
                                <label class="screen-reader-text">Sök efter:</label>
                                <input type="text" />
                                <input type="submit" value="Sök" />
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-4 text-right visible-xs">
                        <div class="mobile-menu-wrap">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-bars menu-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="mobile-search">
            <form id="searchform" class="searchform">
                <div>
                    <label class="screen-reader-text">Sök efter:</label>
                    <input type="text" />
                    <input type="submit" value="Sök" />
                </div>
            </form>
        </div>

        <nav id="nav">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="menu">
                            <li class="current-menu-item">
                                <a href="index.html">Hem</a>
                            </li>
                            <li>
                                <a href="blogg.html">Blogg</a>
                            </li>
                            <li>
                                <a href="undersida.html">Undersida</a>
                            </li>
                            <li>
                                <a href="undersida2.html">Undersida 2</a>
                            </li>
                            <li>
                                <a href="undersida3.html">Undersida 3</a>
                            </li>
                            <li>
                                <a href="undersida4.html">Undersida 4</a>
                            </li>
                            <li>
                                <a href="kontakt.html">Kontakt</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero">
                                <img src="../img/city.jpg" />
                                <div class="text">
                                    <h1>Hej och välkommen!</h1>
                                    <p>
                                        Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Sed sed
                                        sodales mauris. Aliquam felis est,
                                        efficitur vel fringilla quis,
                                        vehicula quis ex.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer id="footer">
            <div class="container">
                <div class="row top">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <h4>Kort om oss</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed sed sodales mauris. Aliquam
                            felis est, efficitur vel fringilla quis,
                            vehicula quis ex.
                        </p>
                        <p>
                            Phasellus tristique nunc in leo faucibus, a
                            consequat nulla sagittis.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                        <h4>Kontaktuppgifter</h4>
                        <p>
                            The Company<br />
                            Gatgatan 1<br />
                            123 45 Någonstans
                        </p>
                        <p>
                            Tel: 0123456789<br />
                            E-post: <a href="">info@thecompany.com</a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                        <h4>Social media</h4>
                        <ul class="social">
                            <li>
                                <i class="fa fa-facebook"></i>
                                <a href="">Facebook</a>
                            </li>
                            <li>
                                <i class="fa fa-twitter"></i>
                                <a href="">Twitter</a>
                            </li>
                            <li>
                                <i class="fa fa-instagram"></i>
                                <a href="">Instagram</a>
                            </li>
                            <li>
                                <i class="fa fa-linkedin"></i>
                                <a href="">LinkedIn</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row bottom">
                    <div class="col-xs-12">
                        <p>Copyright &copy; Grupp X, 2016</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="js/adastra.js"></script>
</body>

</html>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ad-astra</title>
</head>

<body>
    <nav>
        <div class="navbar-wrapper">
            <div>
                <a class="logo" href="index.php">
                    ad-astra
            </div>
            </a>

            <div class="link-container">
                <a class="link-item" href="news.html">
                    news
                </a>
                <a class="link-item" href="about.html">
                    about
                </a>
                <a class="link-item" href="contact.html">
                    contact
                </a>
            </div>
        </div>
    </nav>
    <div class="hero">
        <div class="hero-image">
            <h1 class=hero-title>ad-astra</h1>
            <h3 class="hero-text">Because you have a big fat ad</h3>
        </div>
    </div>
    <footer>
        <div>
            <h1 class="footer-title">Get in touch</h1>

            <div class="footer-misc-container">
                <div>
                    <ul class="footer-link-container">
                        <li>
                            <a class="read-more" href="#">> Youtube</a>
                        </li>
                        <li>
                            <a class="read-more" href="#">> Twitch</a>
                        </li>
                        <li>
                            <a class="read-more" href="#">> Instagram</a>
                        </li>
                        <li>
                            <a class="read-more" href="#">> Only Fans</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="footer-info-container">
                        <li>
                            <p>Do you want to know more?</p>
                            <a class="read-more" href="contact.html">> Contact us</a>
                        </li>
                        <li>
                            <p>Want to add something?</p>
                            <a class="read-more" href="#">> Add your ad</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html> -->
