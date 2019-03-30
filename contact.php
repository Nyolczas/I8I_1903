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
        <!-- ===================== myNav.php ===================== -->
        <?php include "./includes/myNav.php"; ?>

        <header class="header header-contact">

        <!-- ===================== headerHead.php ===================== -->   
            <?php include "./includes/headerHead.php"; ?>

                    <p><i>Kapcsolat</i> </p>
                </div>
                <div class="menuspacer"></div>
            </div>
        </header>
    </div>


    <!-- content -->

    <main class="widthwrapper site-content">
        <section class="contentwrapper">
            

            <?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ; 
  $name = $_REQUEST['name'];
  $subject = $name.' üzenetet küldött' ;
  $message = $name .' az alábbi üzenetet küldte a '.
                $email.' email címről:'."\n \n".
                $_REQUEST['subject'] ;

  mail( "nyolczas@gmail.com", "Subject: $subject",
  $message);
  echo '<p class="bighead center"> Sikeres üzenetküldés! </p>
  <h3 class="whitehead center"> Kedves '.$name .'! Köszönöm az üzeneted, hamarosan válszolni fogok. </h3>';
  }
else
//if "email" is not filled out, display the form
  {
  echo "
  <h1 class=\"bighead center\"> Küldj egy üzenetet! </h1>
  <div class=\"form-container\">
    <form method='post' action='contact.php' name=\"form\">
    <div class=\"felado-container\">
        <div class=\"felado\">
            <label for=\"name\">Név:</label> <br>
            <input type=\"text\" id=\"name\" name=\"name\">
        </div>
        <div class=\"space\"></div>
        <div class=\"felado\">
            <label for=\"email\">Email cím:</label> <br>
            <input type=\"email\" id=\"email\" name=\"email\">
        </div>
        </div>
        <label for=\"subject\">Üzenet:</label> <br>
                    <textarea id=\"subject\" name=\"subject\" style=\"height:200px\"></textarea>
        <input type='submit' value=\"Küldés\"/>
    </form>
  </div>";
  }
?>
            

        </section>
    </main>
    <!-- content - end -->

    <?php include "./includes/footer.php"; ?>


    <script src="js/menu.js"></script>

</body>

</html>