<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package teckes
 * @subpackage benaissa
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

    </head>
    <body>

    <header class="grid">
        <div class="pageContainer">

            <div class="span">

                <a id="logo" href="#">
                    <img src="/wp-content/themes/benaissa/img/logo-benaissa.png" alt="Benaissa" />
                </a>

            </div>

            <div class="span2 last">
                <nav class="hideMobile" id="main">
                    <ul>
                        <li><a href="#">Start</a></li>
                        <li><a href="#">Bio</a></li>
                        <li><a href="#">Auftritte</a></li>
                        <li><a href="#">Mediathek</a></li>
                        <li><a href="#">Kontakt</a></li>
                    </ul>
                </nav>
                <a class="showMobile" id="mobileNavigation" href="#">click</a>
            </div>

        </div>
    </header>


    <div id="page">

        <section class="grid header">

                <div class="span2 offset1">

                <div id="tourContainer">
                    <h2 class="intended headline">Tourdaten</h2>
                    <ul class="intended vspan quarter">
                        <li><a href="#"><span class="cityName fontRock font14">Bonn</span><span class="date font12">3. Oktober</span></a></li>
                        <li><a href="#"><span class="cityName fontRock font14">Oberhausen</span><span class="date font12">4. Oktober</span></a></li>
                        <li><a href="#"><span class="cityName fontRock font14">Köln</span><span class="date font12">6. Oktober</span></a></li>
                        <li><a href="#"><span class="cityName fontRock font14">Neuss</span><span class="date font12">7. Oktober</span></a></li>
                        <li><a href="#"><span class="cityName fontRock font14">Münster</span><span class="date font12">8. Oktober</span></a></li>
                        <li><a href="#"><span class="cityName fontRock font14">Wuppertal</span><span class="date font12">10. Oktober</span></a></li>
                    </ul>

                </div>

            </div>

            <!-- placeholder for chalkboard sketches -->

        </section>

        <section class="content vspan">

            <div class="grid">

                <div class="span">
                    <div id="videoContainer">
                        <div class="videoWrapper">
                            <video  poster="/wp-content/themes/benaissa/img/dummy.jpg" src="https://www.youtube.com/watch?v=UdTwVQjp_H0"></video>
                        </div>
                    </div>
                </div>

                <div class="span2 last">
                    <article id="articleContainer">
                        <h2 class="intended fontBlue">This is the article headline</h2>
                        <p class="intended vspan quarter">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.<br><a class="fontBlue fontRock" href="#">mehr...</a></p>
                    </article>
                </div>

            </div>

            <div class="grid">

                <div class="span vspan half">
                    <div id="shouterContainer">
                        <h2 class="intended headline fontBlue">Shouter</h2>
                        <ul class="intended">
                            <li>
                                <div class="profilePicture"></div>
                                <date class="timestamp fontGrey font12">vor 2 Stunden</date>
                                <p>Lorem ipsum dolor sit amet et ea, consetetur sadipscing elitr.</p>
                            </li>
                            <li>
                                <div class="profilePicture"></div>
                                <date class="timestamp fontGrey font12">Gestern</date>
                                <p>Lorem ipsum si lore dolor sit amet, consetetur sadipscing elitr.</p>
                            </li>
                            <li>
                                <div class="profilePicture"></div>
                                <date class="timestamp fontGrey font12">5. Mai</date>
                                <p>Lorem ipsum sadicpis dolor sit amet, consetetur sadipscing elitr.</p>
                            </li>
                            <li>
                                <div class="profilePicture"></div>
                                <date class="timestamp fontGrey font12">5. Mai</date>
                                <p>Lorem ipsum sadicpis dolor sit amet, consetetur sadipscing elitr.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="span2 last vspan half">
                    <div id="galleryContainer">
                        <h2 class="intended headline fontBlue">Fotos</h2>
                        <ul>
                            <li><img src="/wp-content/themes/benaissa/img/dummy.jpg" alt="" /></li>
                            <li><img src="/wp-content/themes/benaissa/img/dummy.jpg" alt="" /></li>
                            <li><img src="/wp-content/themes/benaissa/img/dummy.jpg" alt="" /></li>
                            <li><img src="/wp-content/themes/benaissa/img/dummy.jpg" alt="" /></li>
                            <li><img src="/wp-content/themes/benaissa/img/dummy.jpg" alt="" /></li>
                            <li><img src="/wp-content/themes/benaissa/img/dummy.jpg" alt="" /></li>
                            <li><img src="/wp-content/themes/benaissa/img/dummy.jpg" alt="" /></li>
                            <li><img src="/wp-content/themes/benaissa/img/dummy.jpg" alt="" /></li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

    </div>

    <footer class="vspan">
        <div class="pageContainer">

            <div id="socialBar">
                <a class="icon facebook" href="#"></a>
                <a class="icon twitter" href="#"></a>
                <a class="icon youtube" href="#"></a>
                <a class="icon eventim" href="#"></a>
            </div>

            <nav id="meta" class="font12">
                <ul>
                    <li><a href="#">News</a></li>
                    <li>|</li>
                    <li><a href="#">Impressum</a></li>
                </ul>
            </nav>

        </div>
    </footer>

    </body>
</html>