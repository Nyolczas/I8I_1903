<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nyolczas - Grafikus</title>
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

        <header class="header header-graphic">

            <!-- ===================== headerHead.php ===================== -->   
            <?php include "./includes/headerHead.php"; ?>

                    <p><i>Grafikus</i> </p>
                </div>
                <div class="menuspacer"></div>
            </div>
        </header>
    </div>

    <!-- content -->
    <main class="widthwrapper site-content">
        <section class="contentwrapper szimplaoszlop">


            <div class="szimplabox">
                <h1 class="greenhead">Design, 3d Grafika, Animáció</h1>
                <p>Több, mint <b>40 000 órás szakmai tapasztalattal</b> redelkezem a digitális képalkotás
                    teljes területén. Az elmúlt évtizedekben számos hazai és nemzetközi gyártású produkcióban, reklám - ,
                    játék - és animációsfilm készítésében vettem részt.
                </p>
                <p>Grafikusként, az arculat és logó tervezéstől kezdve, a webdizájnon, a videomappingen,
                    a 2D/3D illusztrációk és animációk készítésén keresztül a filmes utómunkáig,
                    <b>átfogó és magas szintű gyakorlati rutinnal</b> rendelkezem.</p>
            </div>

            <div class="chart-container">
                <div class="chart" style="position: relative;">
                    <canvas id="myChart" width="400" height="500"></canvas>
                </div>
            </div>

            <div class="szimplabox">
                    <h1 class="greenhead">Művészeti tevékenység</h1>
                    <p>2005-ben a drezdai „Perspectives for Animated Film” nemzetközi animációs
                        csereprogram tagja voltam.</p>
                    <p>Önálló alkotóként és társrendezőként 2003-ban megszereztem a 4. ARC
                        Videóverseny fődíját a Fájdalom és Humorérzék. c. filmemmel.</p>
                    <p>2001-ben egy FKSE ösztöndíj keretében részt vettem az Oreste3 Nemzetközi
                        Képzőművészeti Workshop-on Olaszországban.</p>
                    <p>1998-ban megnyertem az Egri Országos Akvarell Biennálé különdíját.</p>
                    <p>A Buharov testvérekkel közösen folytatott függetlenfilmes tevékenységünkkel a
                        kilencvenes évek végén, számos hazai és nemzetközi fesztivál díjait nyertük meg.</p>
                    <p>Sok évig Fiatal Képzőművészek Stúdiója tag voltam, rendszeres önálló és
                        csoportos kiállításokon és alkotótáborokon vettem részt.</p>
                    <p>
                        Óvodás korom óta gyakran festek és rajzolok a szabadidőmben.
                    </p>
                </div>

            <div class="buttons-wrapper" id="webbuttons">
                <div class="buttons-container">
                    <a href="portfolio.php" class="button btn-dark">
                        <span class="button__mask"></span>
                        <span class="button__text">
                            <h3><i class="fas fa-paint-brush"></i> Portfólió</h3>
                        </span>
                        <span class="button__text button__text--bis">
                            <h3><i class="fas fa-paint-brush"></i> Portfólió</h3>
                        </span>
                    </a>

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
        </section>
    </main>
    
    <?php include "./includes/footer.php"; ?>

    <!-- content - end -->


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
                labels: ["Photoshop", "Illustrator", "Krita", "InDesign", "Figma", "Adobe XD",
                    "AfterEffects", "Moho", "Adobe Animate", "Toon Boom", "TV Paint", "Maya",
                    "Zbrush", "Keyshot", "Houdini", "Fusion", "Nuke", "Premier", "Szabadkézi rajz",
                    "Festészet"
                ],
                datasets: [{
                    label: 'tudásszint',
                    data: [99, 99, 99, 80, 82, 30, 94, 91, 60, 30, 15, 90, 70, 48, 6, 50, 20, 40, 88,
                        96

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