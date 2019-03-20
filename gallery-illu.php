<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nyolczas - Portfólió Illusztráció</title>
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

        <header class="header header-illu">

            <!-- ===================== headerHead.php ===================== -->   
            <?php include "./includes/headerHead.php"; ?>

                        <p><i>Illusztrátor portfólió</i> </p>
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

                <!-- ================================ Storyboard ================================================================ -->
                <!-- 10 3d  -->
                <div class="boardhead">
                    <h3 class="green portfolohead">Time For English </h3>
                    <p>Könyvillusztráció részletek</p>
                </div>

                <div class="imagebutton">
                    <img src="img/illusztration/konyv/smalls/b_01.jpg" alt="Time For English könyvillusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_book');currentSlide(9,1)">
                </div>
                <div class="imagebutton">
                    <img src="img/illusztration/konyv/smalls/b_02.jpg" alt="Time For English könyvillusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_book');currentSlide(9,2)">
                </div>
                <div class="imagebutton">
                    <img src="img/illusztration/konyv/smalls/b_03.jpg" alt="Time For English könyvillusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_book');currentSlide(9,3)">
                </div>
                <div class="imagebutton">
                    <img src="img/illusztration/konyv/smalls/b_04.jpg" alt="Time For English könyvillusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_book');currentSlide(9,4)">
                </div>
                <div class="imagebutton">
                    <img src="img/illusztration/konyv/smalls/b_05.jpg" alt="Time For English könyvillusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_book');currentSlide(9,5)">
                </div>
                <div class="imagebutton">
                    <img src="img/illusztration/konyv/smalls/b_06.jpg" alt="Time For English könyvillusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_book');currentSlide(9,6)">
                </div>
                <div class="imagebutton">
                    <img src="img/illusztration/konyv/smalls/b_07.jpg" alt="Time For English könyvillusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_book');currentSlide(9,7)">
                </div>
                <div class="imagebutton">
                    <img src="img/illusztration/konyv/smalls/b_08.jpg" alt="Time For English könyvillusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_book');currentSlide(9,8)">
                </div>
                <div class="imagebutton">
                    <img src="img/illusztration/konyv/smalls/b_09.jpg" alt="Time For English könyvillusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_book');currentSlide(9,9)">
                </div>
                <div class="imagebutton">
                    <img src="img/illusztration/konyv/smalls/b_10.jpg" alt="Time For English könyvillusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_book');currentSlide(9,10)">
                </div>
                <div class="imagebutton">
                    <img src="img/illusztration/konyv/smalls/b_11.jpg" alt="Time For English könyvillusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_book');currentSlide(9,11)">
                </div>
                <div class="imagebutton">
                    <img src="img/illusztration/konyv/smalls/b_12.jpg" alt="Time For English könyvillusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_book');currentSlide(9,12)">
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

<!-- ================================ Illusztráció MODALS ================================================================ -->

    <!--9 Book modal-->
    <div id="Modal_book" class="modal">
            <span class="close cursor" onclick="closeModal('Modal_book')">&times;</span>
            <div class="modal-content">
                <div class="prewiev-container">
                    <div class="mySlides mySlides-9">
                        <div class="numbertext">1 / 12</div>
                        <img src="img/illusztration/konyv/b_01.jpg" alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="mySlides mySlides-9">
                        <div class="numbertext">2 / 12</div>
                        <img src="img/illusztration/konyv/b_02.jpg" alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="mySlides mySlides-9">
                        <div class="numbertext">3 / 12</div>
                        <img src="img/illusztration/konyv/b_03.jpg" alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="mySlides mySlides-9">
                        <div class="numbertext">4 / 12</div>
                        <img src="img/illusztration/konyv/b_04.jpg" alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="mySlides mySlides-9">
                        <div class="numbertext">5 / 12</div>
                        <img src="img/illusztration/konyv/b_05.jpg" alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="mySlides mySlides-9">
                        <div class="numbertext">6 / 12</div>
                        <img src="img/illusztration/konyv/b_06.jpg" alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="mySlides mySlides-9">
                        <div class="numbertext">7 / 12</div>
                        <img src="img/illusztration/konyv/b_07.jpg" alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="mySlides mySlides-9">
                        <div class="numbertext">8 / 12</div>
                        <img src="img/illusztration/konyv/b_08.jpg" alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="mySlides mySlides-9">
                        <div class="numbertext">9 / 12</div>
                        <img src="img/illusztration/konyv/b_09.jpg" alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="mySlides mySlides-9">
                        <div class="numbertext">10 / 12</div>
                        <img src="img/illusztration/konyv/b_10.jpg" alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="mySlides mySlides-9">
                        <div class="numbertext">11 / 12</div>
                        <img src="img/illusztration/konyv/b_11.jpg" alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="mySlides mySlides-9">
                        <div class="numbertext">12 / 12</div>
                        <img src="img/illusztration/konyv/b_12.jpg" alt="Time For English - könyvillusztráció">
                    </div>
    
    
    
                    <a class="prev" onclick="plusSlides(9,-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(9,1)">&#10095;</a>
                </div>
    
    
                <div class="caption-container">
                    <p id="caption9"></p>
                </div>
    
                <div class="bottom">
                    <div class="bottom--img-container">
                        <img class="demo9 demo cursor" src="img/illusztration/konyv/smalls/b_01.jpg" onclick="currentSlide(9,1)"
                            alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="bottom--img-container">
                        <img class="demo9 demo cursor" src="img/illusztration/konyv/smalls/b_02.jpg" onclick="currentSlide(9,2)"
                            alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="bottom--img-container">
                        <img class="demo9 demo cursor" src="img/illusztration/konyv/smalls/b_03.jpg" onclick="currentSlide(9,3)"
                            alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="bottom--img-container">
                        <img class="demo9 demo cursor" src="img/illusztration/konyv/smalls/b_04.jpg" onclick="currentSlide(9,4)"
                            alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="bottom--img-container">
                        <img class="demo9 demo cursor" src="img/illusztration/konyv/smalls/b_05.jpg" onclick="currentSlide(9,5)"
                            alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="bottom--img-container">
                        <img class="demo9 demo cursor" src="img/illusztration/konyv/smalls/b_06.jpg" onclick="currentSlide(9,6)"
                            alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="bottom--img-container">
                        <img class="demo9 demo cursor" src="img/illusztration/konyv/smalls/b_07.jpg" onclick="currentSlide(9,7)"
                            alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="bottom--img-container">
                        <img class="demo9 demo cursor" src="img/illusztration/konyv/smalls/b_08.jpg" onclick="currentSlide(9,8)"
                            alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="bottom--img-container">
                        <img class="demo9 demo cursor" src="img/illusztration/konyv/smalls/b_09.jpg" onclick="currentSlide(9,9)"
                            alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="bottom--img-container">
                        <img class="demo9 demo cursor" src="img/illusztration/konyv/smalls/b_10.jpg" onclick="currentSlide(9,10)"
                            alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="bottom--img-container">
                        <img class="demo9 demo cursor" src="img/illusztration/konyv/smalls/b_11.jpg" onclick="currentSlide(9,11)"
                            alt="Time For English - könyvillusztráció">
                    </div>
                    <div class="bottom--img-container">
                        <img class="demo9 demo cursor" src="img/illusztration/konyv/smalls/b_12.jpg" onclick="currentSlide(9,12)"
                            alt="Time For English - könyvillusztráció">
                    </div>
                </div>
            </div>
        </div>
        
    <!-- [x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x] --- MODALS END --- [x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x] -->

    <script src="js/menu.js"></script>
    <script src="js/lightbox-modal.js"></script>
    <script src="js/slideToggle.js"></script>

</body>

</html>