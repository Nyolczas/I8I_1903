<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nyolczas - Portfólió 3D - VFX</title>
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

        <header class="header header-vfx">
            
        <!-- ===================== headerHead.php ===================== -->   
        <?php include "./includes/headerHead.php"; ?>

                        <p><i>3D - VFX portfólió</i> </p>
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

                    <div class="boardhead">
                            <h3 class="green portfolohead">3D - VFX Showreel</h3>
                            <p></p>
                        </div>
                

                <div class="imagebutton reel">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/3HcETldc8ZE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>

                <!-- ================================ Storyboard ================================================================ -->
                <!-- 10 3d  -->
                <div class="boardhead">
                    <h3 class="green portfolohead">3D - Motion Design</h3>
                    <p></p>
                </div>

                <div class="imagebutton mattebutton">
                    <img src="img/illusztration/edvin/smalls/d_1.jpg" alt="3D illusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_3D');currentSlide(10,1)">
                </div>
                <div class="imagebutton mattebutton">
                    <img src="img/illusztration/edvin/smalls/d_2.jpg" alt="3D illusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_3D');currentSlide(10,2)">
                </div>
                <div class="imagebutton mattebutton">
                    <img src="img/illusztration/edvin/smalls/d_3.jpg" alt="3D illusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_3D');currentSlide(10,3)">
                </div>
                <div class="imagebutton mattebutton">
                    <img src="img/illusztration/edvin/smalls/d_4.jpg" alt="3D illusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_3D');currentSlide(10,4)">
                </div>
                <div class="imagebutton mattebutton">
                    <img src="img/illusztration/edvin/smalls/d_5.jpg" alt="3D illusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_3D');currentSlide(10,5)">
                </div>
                <div class="imagebutton mattebutton">
                    <img src="img/illusztration/edvin/smalls/d_6.jpg" alt="3D illusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_3D');currentSlide(10,6)">
                </div>





                <!-- 13 mattepaint -->
                <div class="boardhead">
                    <h3 class="green portfolohead">Mattepaint</h3>
                    <p></p>
                </div>

                <div class="imagebutton mattebutton">
                    <img src="img/illusztration/edvin/smalls/d_7.jpg" alt="3D illusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_Matte');currentSlide(13,1)">
                </div>
                <div class="imagebutton mattebutton">
                    <img src="img/illusztration/edvin/smalls/d_8.jpg" alt="3D illusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_Matte');currentSlide(13,1)">
                </div>
                <div class="imagebutton mattebutton">
                    <img src="img/illusztration/edvin/smalls/d_9.jpg" alt="3D illusztráció" class="hover-shadow cursor"
                        onclick="openModal('Modal_Matte');currentSlide(13,1)">
                </div>

            </div>

            <?php include "./includes/gallery-navbuttons.php"; ?>
        </section>
    </main>
    
    
    <?php include "./includes/footer.php"; ?>
    
    <!-- ================================================= content - end ================================================= -->

    <!-- [x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x] --- MODALS --- [x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x][x] -->
    <!--10 3D modal-->
    <div id="Modal_3D" class="modal">
        <span class="close cursor" onclick="closeModal('Modal_3D')">&times;</span>
        <div class="modal-content">
            <div class="prewiev-container">
                <div class="mySlides mySlides-10">
                    <div class="numbertext">1 / 6</div>
                    <img src="img/illusztration/edvin/d_1.jpg" alt="3D illusztráció">
                </div>
                <div class="mySlides mySlides-10">
                    <div class="numbertext">2 / 6</div>
                    <img src="img/illusztration/edvin/d_2.jpg" alt="3D illusztráció">
                </div>
                <div class="mySlides mySlides-10">
                    <div class="numbertext">3 / 6</div>
                    <img src="img/illusztration/edvin/d_3.jpg" alt="3D illusztráció">
                </div>
                <div class="mySlides mySlides-10">
                    <div class="numbertext">4 / 6</div>
                    <img src="img/illusztration/edvin/d_4.jpg" alt="3D illusztráció">
                </div>
                <div class="mySlides mySlides-10">
                    <div class="numbertext">5 / 6</div>
                    <img src="img/illusztration/edvin/d_5.jpg" alt="3D illusztráció">
                </div>
                <div class="mySlides mySlides-10">
                    <div class="numbertext">6 / 6</div>
                    <img src="img/illusztration/edvin/d_6.jpg" alt="3D illusztráció">
                </div>





                <a class="prev" onclick="plusSlides(10,-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(10,1)">&#10095;</a>
            </div>


            <div class="caption-container">
                <p id="caption10"></p>
            </div>

            <div class="bottom">
                <div class="bottom--img-container">
                    <img class="demo10 demo cursor" src="img/illusztration/edvin/smalls/d_1.jpg" onclick="currentSlide(10,1)"
                        alt="3D illusztráció">
                </div>
                <div class="bottom--img-container">
                    <img class="demo10 demo cursor" src="img/illusztration/edvin/smalls/d_2.jpg" onclick="currentSlide(10,2)"
                        alt="3D illusztráció">
                </div>
                <div class="bottom--img-container">
                    <img class="demo10 demo cursor" src="img/illusztration/edvin/smalls/d_3.jpg" onclick="currentSlide(10,3)"
                        alt="3D illusztráció">
                </div>
                <div class="bottom--img-container">
                    <img class="demo10 demo cursor" src="img/illusztration/edvin/smalls/d_4.jpg" onclick="currentSlide(10,4)"
                        alt="3D motiongraphics">
                </div>
                <div class="bottom--img-container">
                    <img class="demo10 demo cursor" src="img/illusztration/edvin/smalls/d_5.jpg" onclick="currentSlide(10,5)"
                        alt="3D motiongraphics">
                </div>
                <div class="bottom--img-container">
                    <img class="demo10 demo cursor" src="img/illusztration/edvin/smalls/d_6.jpg" onclick="currentSlide(10,6)"
                        alt="3D illusztráció">
                </div>
            </div>
        </div>
    </div>

    <!--13 Matte modal-->
    <div id="Modal_Matte" class="modal">
        <span class="close cursor" onclick="closeModal('Modal_Matte')">&times;</span>
        <div class="modal-content">
            <div class="prewiev-container">
                <div class="mySlides mySlides-13">
                    <div class="numbertext">1 / 3</div>
                    <img src="img/illusztration/edvin/d_7.jpg" alt="Matte paint">
                </div>
                <div class="mySlides mySlides-13">
                    <div class="numbertext">2 / 6</div>
                    <img src="img/illusztration/edvin/d_8.jpg" alt="Matte paint">
                </div>
                <div class="mySlides mySlides-13">
                    <div class="numbertext">3 / 6</div>
                    <img src="img/illusztration/edvin/d_9.jpg" alt="Matte paint">
                </div>





                <a class="prev" onclick="plusSlides(13,-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(13,1)">&#10095;</a>
            </div>


            <div class="caption-container">
                <p id="caption13"></p>
            </div>

            <div class="bottom">
                <div class="bottom--img-container">
                    <img class="demo13 demo cursor" src="img/illusztration/edvin/smalls/d_7.jpg" onclick="currentSlide(13,1)"
                        alt="Matte paint">
                </div>
                <div class="bottom--img-container">
                    <img class="demo13 demo cursor" src="img/illusztration/edvin/smalls/d_8.jpg" onclick="currentSlide(13,2)"
                        alt="Matte paint">
                </div>
                <div class="bottom--img-container">
                    <img class="demo13 demo cursor" src="img/illusztration/edvin/smalls/d_9.jpg" onclick="currentSlide(13,3)"
                        alt="Matte paint">
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