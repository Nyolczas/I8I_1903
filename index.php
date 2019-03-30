<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nyolczas István</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
</head>

<body>
    <div class="sticky">
        <!-- ===================== myNav.php ===================== -->
        <?php include "./includes/myNav.php"; ?>

        <header class="header header-fooldal">

           <!-- ===================== headerHead.php ===================== -->   
            <?php include "./includes/headerHead.php"; ?>

                    <p><i></i> </p>
                </div>
                <div class="menuspacer"></div>
            </div>
        </header>
    </div>


    <!-- content -->
    <main class="widthwrapper site-content">
        <section class="contentwrapper">
            <div class="portre-container">
                <div id="portre-wrap">
                    <img src="img/portrem.jpg" alt="portrem" id="portrem">
                </div>
            </div>
            <div class="text-container-main">
                <h1>Szeretek képeket alkotni, animálni, és kódolni</h1>
                <p>
                    Sok éve dolgozom grafikusként és 2D - 3D animátorként.
                    Munkáimmal elsősorban reklámokban, illetve a mozivásznon találkozhattál.
                </p>
                <p>
                    Gyakorlott programozó vagyok, a frontend webfejlesztésre specializálódtam.
                </p>
                <p>
                    Küldetésem, hogy programozói tudásomat és művészi látásmódomat felhasználva, 
                    a munkáim által szebbé és jobbá tegyem a világot.
                </p>
            </div>

            <div class="buttons-wrapper">
                <div class="buttons-container">
                        <a href="webdevskills.php" class="button btn-dark">
                                <span class="button__mask"></span>
                                <span class="button__text">
                                    <h3> <i class="fas fa-cogs"></i> Webfejlesztés</h3>
                                </span>
                                <span class="button__text button__text--bis">
                                    <h3> <i class="fas fa-cogs"></i> Webfejlesztés</h3>
                                </span>
                            </a>
                    <a href="graphic.php" class="button btn-dark">
                        <span class="button__mask"></span>
                        <span class="button__text">
                            <h3> <i class="fas fa-paint-brush"></i> Grafika</h3>
                        </span>
                        <span class="button__text button__text--bis">
                            <h3> <i class="fas fa-paint-brush"></i> Grafika</h3>
                        </span>
                    </a>
                    
                    <a href="portfolio.php" class="button btn-dark">
                        <span class="button__mask"></span>
                        <span class="button__text">
                            <h3> <i class="fas fa-briefcase"></i> Portfólió</h3>
                        </span>
                        <span class="button__text button__text--bis">
                            <h3> <i class="fas fa-briefcase"></i> Portfólió</h3>
                        </span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php include "./includes/footer.php"; ?>

    <!-- content - end -->

    <script src="js/menu.js"></script>

</body>

</html>