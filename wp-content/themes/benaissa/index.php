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

    <div id="page">

        <header class="grid">

            <div class="span">
                <a id="logo" href="#">
                    Benaissa
                </a>
            </div>

            <div class="span2 last">
                <nav class="hideMobile" id="main">
                    <ul>
    <!--                    <li><a href="#">Start</a></li>-->
                        <li><a href="#">Bio</a></li>
                        <li><a href="#">Auftritte</a></li>
                        <li><a href="#">Mediathek</a></li>
                        <li><a href="#">Kontakt</a></li>
                    </ul>
                </nav>
                <a class="showMobile" id="mobileNavigation" href="#">click</a>
            </div>

        </header>

        <section class="grid header">

            <div class="span2 offset1">

                <div id="tourContainer">
                    <h2>Tourdaten</h2>
                    <ul>
                        <li><a href="#"><span class="cityName">Bonn</span><span class="date">3. Oktober</span></a></li>
                        <li><a href="#"><span class="cityName">Oberhausen</span><span class="date">4. Oktober</span></a></li>
                    </ul>

                </div>

            </div>

            <!-- placeholder for chalkboard sketches -->

        </section>

        <section class="grid content">

            <div class="span">

                <div id="videoContainer">

                    <video src="https://www.youtube.com/watch?v=UdTwVQjp_H0"></video>
                    
                </div>

            </div>

            <div class="span2 last">

                <article>
                    <h2 class="blue">This is a headline</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Ded diam nonumy eirmod tempor invidunt ut labore et dolore...</p>
                    <a class="blue" href="#">mehr...</a>
                </article>

            </div>

            <div class="span">

                <div id="shouterContainer">
                    <h2 class="blue">Shouter</h2>
                    <ul>
                        <li>
                            <div class="profilePicture"></div>
                            <date class="timestamp">vor 2 Stunden</date>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                        </li>
                        <li>
                            <div class="profilePicture"></div>
                            <date class="timestamp">Gestern</date>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                        </li>
                    </ul>
                </div>

            </div>
            
            <div class="span2 last">
                
                <div id="galleryContainer">
                    <h2 class="blue">Fotos</h2>
                    <ul>
                        <li><img src="img/dummy.jpg" alt="" /></li>
                        <li><img src="img/dummy.jpg" alt="" /></li>
                    </ul>
                </div>
                
            </div>

        </section>

        <footer>

            <div id="socialBar">
                <a class="icon facebook" href="#"></a>
                <a class="icon twitter" href="#"></a>
                <a class="icon youtube" href="#"></a>
                <a class="icon eventim" href="#"></a>
            </div>

            <nav id="meta">
                <ul>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Impressum</a></li>
                </ul>
            </nav>

        </footer>

    </div>

    </body>
</html>