<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nyolczas - Kapcsolat</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
</head>

<body class="contactBg">
    <div class="sticky">
        <nav class="widthwrapper">
            <div id="box1" class="nemani">
                <span class="menu__mask" id="menuMask"></span>
                <div class="menusor">
                    <ul>
                        <li>
                            <a id="link" class="link" href="index.html">Nyolczas István<span></span><span></span></a>
                        </li>
                        <li>
                            <a class="link" href="webdevskills.html">Webfejlesztő<span></span><span></span></a>
                        </li>
                        <li>
                            <a class="link" href="graphic.html">Grafikus<span></span><span></span></a>
                        </li>
                        <li>
                            <a class="link" href="portfolio.html">Portfólió<span></span><span></span></a>
                        </li>
                        <li>
                            <a class="link" href="bio.html">Önéletrajz<span></span><span></span></a>
                        </li>
                        <li>
                            <a class="link" href="contact.html">Kapcsolat<span></span><span></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hambi" onclick="change(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <div id="taki" class="taki"></div>
        </nav>
        <header class="header header-contact">
            <div class="head-container widthwrapper">
                <div class="logo-container">
                    <a href="index.html"><img src="img/logo8_green.png" alt="logo8_green" id="logo8"></a>
                </div>
                <div class="nev-container">
                    <h1>Nyolczas István</h1>
                    <p><i>Kapcsolat</i> </p>
                </div>
                <div class="menuspacer"></div>
            </div>
        </header>
    </div>


    <!-- content -->

    <main class="widthwrapper site-content">
        <section class="contentwrapper">
            <h1 class="bighead center"> Lépjünk kapcsolatba! </h1>
            <div class="form-container">

            <?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ; 
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail( "nyolczas@gmail.com", "Subject: $subject",
  $message);
  echo "Thank you for using our mail form";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<form method='post' action='contact.php'>
  Email: <input name='email' type='text' /><br />
  Subject: <input name='subject' type='text' /><br />
  Message:<br />
  <textarea name='message' rows='15' cols='40'>
  </textarea><br />
  <input type='submit' />
  </form>";
  }
?>
            </div>
            <div class="icons-container">

                <a href="tel:+36703258987" class="kapcsolat-container">
                    <div class="icongrp center">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h2 class="center">Telefon</h2>
                    <p class="center">+36 70 325 8987</p>
                </a>
                <a href="mailto:nyolczas@gmail.com" class="kapcsolat-container">
                    <div class="icongrp center">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h2 class="center">E-mail</h2>
                    <p class="center">nyolczas@gmail.com</p>
                </a>
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


    <script src="js/menu.js"></script>

</body>

</html>