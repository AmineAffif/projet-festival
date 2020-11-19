<!DOCTYPE html>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>




</head>
<body onload="">


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
    <div class="stars_wrapper">
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
    </div>
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



                    <!-- Département -->
                    <label for="locality-dropdown"></label>
                    <select id="locality-dropdown" name="student" class="form-control">
                        <option value="">Département</option>
                    </select>

                    <!-- Music style -->
                    <input type="text" id="music_style" class="form-control" placeholder="Style de musique">


                    <!-- Choose scene -->
                    <div class="radio_wrapper_global scene_wrap">
                        <h5>Scene</h5>
                        <div class="radio_wrapper_scene">
                            <!-- Group of default radios - option 1 -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="Tribute" name="scene" checked>
                                <label class="custom-control-label" for="Tribute">Tribute</label>
                            </div>

                            <!-- Group of default radios - option 2 -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="Acoustique" name="scene">
                                <label class="custom-control-label" for="Acoustique">Acoustique/Folk</label>
                            </div>

                            <!-- Group of default radios - option 3 -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="Amplifié" name="scene">
                                <label class="custom-control-label" for="Amplifié">Amplifié/Rock</label>
                            </div>
                        </div>
                    </div>

                    <!-- year of creation -->
                    <input type="number" id="creation_year" class="form-control" placeholder="Année de création du groupe">

                    <!-- Presentation -->
                    <div class="form-group">
                        <label for="group_presentation">Présentation du groupe</label>
                        <textarea class="form-control rounded-0" id="group_presentation" rows="3" placeholder="500 caractères max"></textarea>
                    </div>

                    <!-- Experiences -->
                    <div class="form-group">
                        <label for="group_experiences">Experiences scéniques</label>
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
                    <select id="number_members" name="student" class="form-control" onfocus="generateMemberForm(this)" onchange="generateMemberForm(this)">
                        <option class="ae" value="1">1</option>
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


                    <!-- Choose_associatif -->
                    <div class="radio_wrapper_global">
                        <h5>Status associatif</h5>
                        <div class="radio_wrapper_status">
                            <!-- Group of default radios - option 1 -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="status_oui" name="status" >
                                <label class="custom-control-label" for="status_oui">Oui</label>
                            </div>

                            <!-- Group of default radios - option 2 -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="status_non" name="status" checked>
                                <label class="custom-control-label" for="status_non">Non</label>
                            </div>
                            </div>
                        </div>

                    <!-- Choose_sacem -->
                    <div class="radio_wrapper_global">
                        <h5>Sacem</h5>
                        <div class="radio_wrapper_sacem">
                            <!-- Group of default radios - option 1 -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="sacem_oui" name="sacem" checked>
                                <label class="custom-control-label" for="sacem_oui">Oui</label>
                            </div>

                            <!-- Group of default radios - option 2 -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="sacem_non" name="sacem">
                                <label class="custom-control-label" for="sacem_non">Non</label>
                            </div>
                        </div>
                    </div>
                    <!-- Choose_producteur -->
                    <div class="radio_wrapper_global">
                        <h5>Producteur</h5>
                        <div class="radio_wrapper radio_wrapper_producteur">
                            <!-- Group of default radios - option 1 -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="producteur_oui" name="producteur" checked>
                                <label class="custom-control-label" for="producteur_oui">Oui</label>
                            </div>

                            <!-- Group of default radios - option 2 -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="producteur_non" name="producteur">
                                <label class="custom-control-label" for="producteur_non">Non</label>
                            </div>
                        </div>
                    </div>


                    <!-- 3 mp3 Files -->
                    <div class="imput_mp3">
                        <h5 id="title_main">Chansons du groupe</h5>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="song1"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="song1">Chanson format mp3</label>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="song2"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="song2">Chanson format mp3</label>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="song3"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="song3">Chanson format mp3</label>
                            </div>
                        </div>
                    </div>

                    <!-- 1 pdf File Dossier de presse -->
                    <div class="imput_pdf">
                        <h5 id="title_main">Dossier de presse</h5>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pdf_dossier_de_presse_ToUpload1"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="pdf_dossier_de_presse_ToUpload1">format pdf</label>
                            </div>
                        </div>
                    </div>

                    <!-- 2 images Files -->
                    <div class="imput_image">
                        <h5 id="title_main">Photos</h5>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="photoToUpload1"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="photoToUpload1">Résolution > 300 dpi</label>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="photoToUpload2"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="photoToUpload2">Résolution > 300 dpi</label>
                            </div>
                        </div>
                    </div>


                    <!-- 1 pdf File fiche technique -->
                    <div class="imput_fiche_technique">
                        <h5 id="title_main">Fiche technique</h5>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pdf_fiche_techniqueToUpload1"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="pdf_fiche_techniqueToUpload1">format pdf</label>
                            </div>
                        </div>
                    </div>





                    <h5 id="title_main">Représentant du groupe</h5>

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


<script src="./javascript/departementListing"></script>
<script src="./javascript/groupMemberFormLoop"></script>

</html>


