<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-18 18:41:53
  from 'C:\wamp64\www\projet-festival\templates\resgister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb56af1b4c477_20061939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '652894fdf1b4d752f61e8e72acf54b35f736b0ee' => 
    array (
      0 => 'C:\\wamp64\\www\\projet-festival\\templates\\resgister.tpl',
      1 => 1605724911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb56af1b4c477_20061939 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="css/register.css">
    <!--linking Jquery-->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"><?php echo '</script'; ?>
>




</head>
<body>


<header>
    <!--top navigation-->
    <div class="nav_top">
        <div class="empty_class-top"></div>
        <div class="login_signup-wrapper">
            <a href="#"><span></span></a>
            <a href="#"><span class="right_span-top">Connexion</span></a>
        </div>
    </div>
</header>

<main>

    <div class="main_wrap">
        <!-- Material form register -->
        <div class="card">

            <h5 class="card-header info-color white-text text-center py-4 form_top">
                <strong>S'inscrire</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="#!">

                    <!-- Group name -->
                    <input type="text" id="group_name" class="form-control" placeholder="Nom du groupe">

                    <!-- E-mail -->
                    <input type="email" id="email" class="form-control mb-4" placeholder="E-mail">

                    <!-- Password -->
                    <input type="password" id="password" class="form-control" placeholder="Mot de passe" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        Au moins 8 caractères
                    </small>

                    <div class="scene_wrapper">
                        <h5>Scene</h5>
                        <div class="radio_wrapper">
                            <!-- Group of default radios - option 1 -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                <label class="custom-control-label" for="defaultGroupExample1">Tribute</label>
                            </div>

                            <!-- Group of default radios - option 2 -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios">
                                <label class="custom-control-label" for="defaultGroupExample2">Acoustique/Folk</label>
                            </div>

                            <!-- Group of default radios - option 3 -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadios">
                                <label class="custom-control-label" for="defaultGroupExample3">Amplifié/Rock</label>
                            </div>
                        </div>
                    </div>

                    <!-- Département -->
                    <label for="locality-dropdown"></label>
                    <select id="locality-dropdown" name="student" class="form-control">
                        <option value="">Département</option>
                    </select>

                    <!-- Music style -->
                    <input type="text" id="music_style" class="form-control" placeholder="Style de musique">

                    <!-- year of creation -->
                    <input type="number" id="creation_year" class="form-control" placeholder="Année de création du groupe">

                    <!-- Presentation -->
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Présentation du groupe</label>
                        <textarea class="form-control rounded-0" id="group_presentation" rows="3" placeholder="500 caractères max"></textarea>
                    </div>

                    <!-- Experiences -->
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Experiences scéniques</label>
                        <textarea class="form-control rounded-0" id="group_experiences" rows="3" placeholder="500 caractères max"></textarea>
                    </div>

                    <!-- website_link -->
                    <input type="text" id="website_link" class="form-control" placeholder="Site web ou page Facebook (url)">

                    <!-- soundcloud_link -->
                    <input type="text" id="soundcloud_link" class="form-control" placeholder="Chaîne Youtube (url)">

                    <!-- youtube_link -->
                    <input type="text" id="youtube_link" class="form-control" placeholder="Profil Soundcloud (url)">

                    <!-- Members_group -->
                    <!-- number -->



                    <label for="number_members">Membres du groupe</label>
                    <select id="number_members" name="student" class="form-control" onchange="generateMemberForm(this)">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>

                    <div id="memberWrapper">
                    </div>







                    <h5 id="title_main_contact">Représentant du groupe</h5>

                    <!-- Firstname Lastname -->
                    <div class="form-row">
                        <div class="col lft_col">
                            <!-- First name -->
                            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Prénom">
                        </div>
                        <div class="col rgt_col">
                            <!-- Last name -->
                            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Nom">
                        </div>
                    </div>
                    <!-- Adresse -->
                    <input type="text" id="adresse" class="form-control" placeholder="Adresse">
                    <!-- City -->
                    <input type="text" id="city" class="form-control" placeholder="Ville">

                    <!-- postal code -->
                    <input type="text" id="postal_code" class="form-control" placeholder="Code postal">

                    <!-- phone number -->
                    <input type="tel" id="city" class="form-control" placeholder="Numéro de téléphone">




                    <!-- Sign up button -->
                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Valider</button>


                </form>
                <!-- Form -->

            </div>

        </div>
        <!-- Material form register -->
    </div>

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


<?php echo '<script'; ?>
 src="./javascript/departementListing"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./javascript/groupMemberFormLoop"><?php echo '</script'; ?>
>

</html>


<?php }
}
