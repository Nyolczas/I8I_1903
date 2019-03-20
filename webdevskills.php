<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nyolczas - Webfejlesztő</title>
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

        <header class="header header-webdev">

            <!-- ===================== headerHead.php ===================== -->   
            <?php include "./includes/headerHead.php"; ?>

                    <p><i>Webfejlesztő</i> </p>
                </div>
                <div class="menuspacer"></div>
            </div>
        </header>
    </div>

    <!-- content -->
    <main class="widthwrapper site-content">
        <section class="contentwrapper duplaoszlop">
            <div class="chart-container">
                <div class="spacer"></div>
                <div style="position: relative;">
                    <canvas id="myChart" width="400" height="500"></canvas>
                </div>
            </div>

            <div class="text-container">
                <h1 class="greenhead">Programozás, webfejlesztés</h1>
                <p>2012-ben kezdtem ismerkedni a programozással,
                    2017-től pedig aktívan webfejlesztést tanulok.
                </p>
                <p>Mára stabil Frontend fejlesztői ismeretekkel rendelkezem
                    és a szerver oldali programozástól sem riadok vissza.</p>
                <p>Profi grafikusként örömömet lelem a webdesign készítésben.</p>
                <p>
                    Ismereteimet folyamatosan bővítem, napi rendszerességgel tanulok.
                    A célom, hogy tudásom a legújabb webes technológiákból, mindig naprakész legyen.
                </p>
            </div>
            <div class="buttons-wrapper" id="webbuttons">
                <div class="buttons-container">
                    <a href="https://github.com/Nyolczas" class="button btn-dark">
                        <span class="button__mask"></span>
                        <span class="button__text">
                            <h3><i class="fab fa-github"></i> Referenciák</h3>
                        </span>
                        <span class="button__text button__text--bis">
                            <h3><i class="fab fa-github"></i> Referenciák</h3>
                        </span>
                    </a>

                    <a href="graphic.php" class="button btn-dark">
                        <span class="button__mask"></span>
                        <span class="button__text">
                            <h3><i class="fas fa-paint-brush"></i> Grafika</h3>
                        </span>
                        <span class="button__text button__text--bis">
                            <h3><i class="fas fa-paint-brush"></i> Grafika</h3>
                        </span>
                    </a>

                    <a href="gallery-web.php" class="button btn-dark">
                        <span class="button__mask"></span>
                        <span class="button__text">
                            <h3><i class="fas fa-briefcase"></i> Webes portfólió</h3>
                        </span>
                        <span class="button__text button__text--bis">
                            <h3><i class="fas fa-briefcase"></i> Webes portfólió</h3>
                        </span>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <!-- content - end -->

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="js/menu.js"></script>
    <script>
        //--- refresh page on resize browser
        window.onresize = function () {
            location.reload();
        }

        //--- chart js 
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: {
                labels: ["HTML", "CSS", "JavaScript", "jQuery", "Bootstrap", "WordPress", "PHP", "React",
                    "Angular", "ES6", "SASS",
                    "Node.js", "Express.js", "MySQL", "Git", "Excel VBA", "C#",
                    ".NET", "Java", "Python", "Django"
                ],
                datasets: [{
                    label: 'nyelvtudás: ',
                    data: [99, 97, 94, 57, 75, 53, 78, 10, 7, 80, 29, 54, 48, 35, 76, 85, 57, 28, 21,
                        44, 33
                    ],
                    backgroundColor: 'rgb(0, 118, 135)',
                    borderColor: 'rgb(0, 190, 143)',
                    borderWidth: 1
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                responsive: true,
                maintainAspectRatio: false,
            }
        });
    </script>
</body>

</html>