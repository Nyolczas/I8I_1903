<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nyolczas - Portfólió Web</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/gallery-style.css">
</head>

<body>
    <div class="sticky">
        <!-- ===================== myNav.php ===================== -->
        <?php include "./includes/myNav.php"; ?>

        <header class="header header-web">

            <!-- ===================== headerHead.php ===================== -->   
            <?php include "./includes/headerHead.php"; ?>

                        <p><i>Webes portfólió</i> </p>
                    </div>
                    <div class="menuspacer"></div>
                </div>
            </div>
        </header>
    </div>

    <!-- ================================================= content ================================================= -->

    <main class="widthwrapper site-content">
        <section class="contentwrapper">

            <div class="flexwrapcenter multicontent">

                <div class="imagebutton webbutton">
                    <a href="#" >
                        <img src="img/webdesign/smalls/w_01.jpg" alt="Webdesign" class="hover-shadow cursor">
                        <div class="commentbox">
                            <h4>nyolczas.hu</h4>
                            <p>Ez az oldal. :) <br> <br>
                                <em>WebDesign, Html, Php, CSS, JavaScript, jQuery</em> </p>
                        </div>
                    </a>

                </div>
                <div class="imagebutton webbutton">
                        <a href="http://utasellatokavehaz.hu/" target="_blank" rel="noopener noreferrer">
                            <img src="img/webdesign/smalls/w_02.jpg" alt="Webdesign" class="hover-shadow cursor">
                            <div class="commentbox">
                                    <h4>utasellatokavehaz.hu</h4>
                                    <p>Az Utasellátó Kávéház weboldala. <br> (statikus weoldal)<br> <br>
                                        <em>Logó tervezés, WebDesign, Html, CSS, Bootstrap, JavaScript, jQuery</em> </p>
                            </div>
                        </a>
                </div>
                <div class="imagebutton webbutton">
                    <a href="premium-dance-shows.html" target="_blank" rel="noopener noreferrer">
                        <img src="img/webdesign/smalls/w_03.jpg" alt="Webdesign" class="hover-shadow cursor">
                        <div class="commentbox">
                                <h4>Pricelist</h4>
                                <p>Egy oldal a Freelusion árlistájából. Az eredeti PHP-ben volt kódolva, lapszintű védelemmel. Az oldal jelenleg nem üzemel.<br> <br>
                                    <em>WebDesign, PHP, CSS, Bootstrap, JavaScript, jQuery</em> </p>
                        </div>
                    </a>
                </div>
                <div class="imagebutton webbutton">
                    <a href="budget.html" target="_blank" rel="noopener noreferrer">
                        <img src="img/webdesign/smalls/w_04.jpg" alt="Webdesign" class="hover-shadow cursor">
                        <div class="commentbox">
                                <h4>Költségvetés számoló</h4>
                                <p>JavaScript-ben megírt költségvetés számoló web-app.<br> <br>
                                    <em>Html, CSS, JavaScript</em> </p>
                        </div>
                    </a>
                </div>
                <div class="imagebutton webbutton">
                        <a href="pigGame.html" target="_blank" rel="noopener noreferrer">
                                <img src="img/webdesign/smalls/w_05.jpg" alt="Webdesign" class="hover-shadow cursor">
                                <div class="commentbox">
                                        <h4>Kockajáték</h4>
                                        <p>JavaScript-ben írt kétszemélyes kockajáték.<br> <br>
                                            <em>Html, CSS, JavaScript</em> </p>
                                </div>
                            </a>
                </div>
                <div class="imagebutton webbutton">
                        <a href="price-calculator.html" target="_blank" rel="noopener noreferrer">
                            <img src="img/webdesign/smalls/w_06.jpg" alt="Webdesign" class="hover-shadow cursor">
                            <div class="commentbox">
                                    <h4>Price Calculator</h4>
                                    <p>SOS-gyors kódolás javascriptben<br> <br>
                                        <em>Bootstrap, JavaScript</em> </p>
                            </div>
                            </a>
                </div>
                
                

            </div>

            <div class="buttons-wrapper">
                <div class="buttons-container">
                    <a href="portfolio.php" class="button btn-dark">
                        <span class="button__mask"></span>
                        <span class="button__text">
                            <h3> <i class="fas fa-briefcase"></i> Vissza a Portfólió oldalra</h3>
                        </span>
                        <span class="button__text button__text--bis">
                            <h3> <i class="fas fa-briefcase"></i> Vissza a Portfólió oldalra</h3>
                        </span>
                    </a>
                </div>
            </div>
        </section>
    </main>



    <!-- ================================================= content - end ================================================= -->

    <footer>
        <div class="footerline widthwrapper">
            <div class="contentwrapper">
                <div class="footercontent">
                    <p>&copy
                        <i>Nyolczas István
                            <span id="year"></span></i>
                    </p>

                    <a href="tel:+36703258987"><i class="fas fa-phone-square"></i> +36 70 325 8987</a>

                    <a href="mailto:nyolczas@gmail.com"> <i class="fas fa-envelope"></i> nyolczas@gmail.com</a>

                    <a href="https://github.com/Nyolczas" target="_blank"><i class="fab fa-github"></i></a>

                </div>
            </div>
        </div>
    </footer>
    <!-- [x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x] --- MODALS --- [x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x] -->


    <!-- [x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x] --- MODALS END --- [x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x] -->

    <script src="js/menu.js"></script>
    <script src="js/lightbox-modal.js"></script>
    <script src="js/slideToggle.js"></script>

</body>

</html>