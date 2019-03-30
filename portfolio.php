<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nyolczas - Portfólió</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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

        <header class="header header-portfolio">

            <!-- ===================== headerHead.php ===================== -->
            <?php include "./includes/headerHead.php"; ?>

            <p><i>Portfólió</i> </p>
    </div>
    <div class="menuspacer"></div>
    </div>
    </div>
    </header>
    </div>

    <!-- ================================================= content ================================================= -->

    <main class="widthwrapper site-content">
        <section class="contentwrapper">
            <div class="flexwrapcenter">

                <a href="gallery-web.php" class="imagebutton">
                    <img class="hover-shadow cursor" src="img/web.jpg" alt="web portfolio elem">
                </a>
                <a href="gallery-anim.php" class="imagebutton">
                    <img class="hover-shadow cursor" src="img/anim.jpg" alt="anim portfolio elem">
                </a>
                <a href="gallery-illu.php" class="imagebutton">
                    <img class="hover-shadow cursor" src="img/illu.jpg" alt="illu portfolio elem">
                </a>
                <a href="gallery-vfx.php" class="imagebutton">
                    <img class="hover-shadow cursor" src="img/vfx.jpg" alt="vfx portfolio elem">
                </a>
                <a href="gallery-concept.php" class="imagebutton">
                    <img class="hover-shadow cursor" src="img/concept.jpg" alt="concept portfolio elem">
                </a>
                <a href="gallery-storyb.php" class="imagebutton">
                    <img class="hover-shadow cursor" src="img/storyb.jpg" alt="storyb portfolio elem">
                </a>

                <div class="buttons-wrapper centerflex" id="webbuttons">
                    <div>
                        <a href="contact.php" class="button btn-dark">
                            <span class="button__mask"></span>
                            <span class="button__text">
                                <h3><i class="fas fa-link"></i> Kapcsolat</h3>
                            </span>
                            <span class="button__text button__text--bis">
                                <h3><i class="fas fa-link"></i> Kapcsolat</h3>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include "./includes/footer.php"; ?>

    <!-- ================================================= content - end ================================================= -->

    <script src="js/menu.js"></script>

</body>

</html>