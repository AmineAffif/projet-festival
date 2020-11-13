<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="./assets/fav_icon.ico" />
    <title>Projet Festival</title>
    <!--linking css-->
    <link rel="stylesheet" href="css/index.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <header>
        <!--top navigation-->
        <div class="nav_top">
            <div class="empty_class-top"></div>
            <div class="login_signup-wrapper">
                <a href="#"><span>inscription</span></a>
                <a href="#"><span class="right_span-top">connexion</span></a>
            </div>
        </div>
        <!--main content in landing-->
        <div class="main_landing">

        </div>
    </header>

    <main>

    </main>

    <footer>

    </footer>
</body>
</html>

<?php
require './includes/flight/Flight.php';

require './routes/routes.php';

Flight::start();
