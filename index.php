<!DOCTYPE html>
<html lang="fr">
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
        <!--landing screen image-->
        <div class="main_landing"></div>
        <div class="custom-shape-divider-bottom-1605294628">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
    </header>

    <main>
        <div class="section1">

            <div class="part_one">
                <div class="first_left">
                    <h1>Chers festivaliers</h1>
                    <div class="paragraph_wrapper">
                        <div class="vertical_stroke"></div>
                        <p>Nous sommes un festival associatif qui vous propose
                            comme chaque année de retrouver vos artistes favoris
                            pendant 3 belles journées d’été entre amis</p>
                    </div>
                </div>
                <div class="first_right">
                    <img src="assets/images/festivaliers.png" alt="party-illustration">
                </div>

            </div>
            <div class="part_two">

                <div class="first_right">
                    <img src="assets/images/artistes.png" alt="artist-illustration">
                </div>
                <div class="first_left">
                    <h1>Chers artistes</h1>
                    <div class="paragraph_wrapper">
                        <div class="vertical_stroke"></div>
                        <p>	L'association s'engage à mettre tout en œuvre
                            pour garantir à l'ensemble des groupes des conditions
                            d'accueil technique professionnelles (prestations
                            techniques, catering, prise en charge
                            par les équipes de bénévoles).</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section2">
            <div class="custom-shape-divider-top-1605294726">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
                </svg>
            </div>
        </div>

    </main>

    <footer>

    </footer>
</body>
</html>

<?php
require './includes/flight/Flight.php';

require './routes/routes.php';

Flight::start();
