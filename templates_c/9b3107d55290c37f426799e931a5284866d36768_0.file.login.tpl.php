<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 20:27:44
  from 'C:\laragon\www\projet-festival\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbd6cc0e28fb7_92780229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b3107d55290c37f426799e931a5284866d36768' => 
    array (
      0 => 'C:\\laragon\\www\\projet-festival\\templates\\login.tpl',
      1 => 1606249209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd6cc0e28fb7_92780229 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/fav_icon.ico" />
    <title>Projet Festival</title>
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!--linking css-->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/responsive/indexResponsive">
    <link rel="stylesheet" href="css/login.css">

</head>
<body>


<header>
    <!--top navigation-->
    <div class="nav_top">
        <div class="empty_class-top"></div>
        <div class="login_signup-wrapper">
            <a href="#"><span></span></a>
            <a href="#"><span>Inscription</span></a>
        </div>
    </div>
</header>

<main>
    <div class="stars_wrapper">
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
    </div>

    <div class="container">

        <div class="row">

            <aside class="">
                <div class="card">
                    <article class="card-body">
                        <h4 class="card-title text-center mb-4 mt-1">Connexion</h4>
                        <hr>
                        <p class="text-success text-center">Bon retour parmis nous &#128540</p>
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input name="" class="form-control" placeholder="Email" type="email">
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input class="form-control" placeholder="******" type="password">
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Login </button>
                            </div> <!-- form-group// -->
                            <p class="text-center"><a href="#" class="btn">mot de passe oublié ?</a></p>
                        </form>
                    </article>
                </div> <!-- card.// -->

            </aside> <!-- col.// -->
        </div> <!-- row.// -->

    </div>
    <!--container end.//-->

</main>


<footer class="page-footer font-small pt-4 footer_container">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3 left_foot" >
                <div class="footer_sign">
                    <img src="assets/images/fav_icon_gold.png" alt="paradise-festival-logo">
                    <h5 class="text-uppercase">Paradise Festival</h5>
                </div>

                <p class="citation">"La musique est la langue des émotions." S. Kant</p>

            </div>


            <hr class="clearfix w-100 d-md-none pb-3">


            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Contact</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="https://www.instagram.com/creamine_/" class="fa fa-instagram"></a>
                        <a href="https://www.instagram.com/creamine_/">Amine Affif</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/paradiise.beats/" class="fa fa-instagram"></a>
                        <a href="https://www.instagram.com/paradiise.beats/">Theo Boudard</a>
                    </li>
                </ul>

            </div>


        </div>

    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> paradise-festival.fr</a>
    </div>

</footer>

</body>


</html>


<?php }
}
