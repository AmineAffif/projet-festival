<?php

require "includes/pdo.php";

Flight::route('/', function(){
    Flight::view()->display("index.tpl");
   });



Flight::route('GET /inscription', function(){
    Flight::view()->display("resgister.tpl");
});

Flight::route('POST /inscription', function(){
     
//nom du groupe
    if(empty($_POST['nomgroupe'])){
        $messages['nomgroupe']="le nom d'utilisateur est obligatoire";
    }

//email
    if(empty($_POST['email'])){
        $messages['email']="l'email est obligatoire";
    }
    elseif(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)===FALSE) {
        
         //Tester validité email//
         $messages['email']="l'email est incorrecte";
    
    } 
    else{
        //existence dans la base
        // requete PDO et verifier le nombre de résulats
        $db = Flight::get('db');
        $st = $db->prepare("SELECT * FROM utilisateur WHERE email = ?");
        $st->execute(array($_POST['email']));
        if($st->rowCount!=0)
            $messages['email']="L'adresse email est dejà utilisé";
    }

//mdp
    if(empty($_POST['Motdepasse'])){
        $messages['Motdepasse']="le mot de passe est obligatoire";

    }
    elseif(srtlen($_POST['Motdepasse']) < 8){
        $messages['Motdepasse']="Le mot de passe doit contenir au moins 8 caractères"; //TEST LONGUEUR
    };
    $n_psswd=$_POST['Motdepasse'];


     //hash
     $hash=password_hash($n_psswd , PASSWORD_DEFAULT);

//Style de musique
    if(empty($_POST['style'])){
        $messages['style']="le champs est obligatoire";
    }
    
//scene
    if(isset($_POST['scene'])){
        $messages['scene']="Cocher une scene";
    }

//annee_creation
    if(empty($_POST['annee'])){
        $messages['annee']="le champ est obligatoire";
    }

//presentation 
    if(empty($_POST['presentation'])){
    $messages['annee']="le champ est obligatoire";
    }
    elseif(strlen($_POST['presentation']) >= 500){
    $messages['annee']="500 caractère max";
    }   

//experience
    if(empty($_POST['experience'])){
        $messages['experience']="le champ est obligatoire";
    }
    elseif(strlen($_POST['presentation']) >= 500){
        $messages['experience']="500 caractère max";
    }

//URL FB
    if(empty($_POST['urlfb'])){
        $messages['urlfb']="le champ est obligatoire";
    }
    elseif(filter_var($_POST['urlfb'],FILTER_VALIDATE_URL)===FALSE){
        $messages['urlfb']="l(url) est incorrecte";
    }
//URL SOUNDCLOUD
    if(filter_var($_POST['urlsoundcloud'],FILTER_VALIDATE_URL)===FALSE){
        $messages['urlsoundcloud']="l'url est incorrecte";
    }
//URLD YT
    if(filter_var($_POST['urlyt'],FILTER_VALIDATE_URL)===FALSE){
        $messages['urlyt']="l'url est incorrecte";
    }
//Membre du groupe
//Statut associatif
//SACEM
//Producteur
//chanson mp3

    //1
    if(isset($_FILES['chanson'])){

        $infosfichiersmp31= pathinfo($_FILES['chanson']['name']);
        $extension=$infosfichiersmp31['extensionfiles'];
        $extensionsautorise = array ('.mp3');
        if(in_array ($extension, $extensionsautorise)){
           move_uploaded_file($_FILES['chanson']['tmp_name'],'uploads/'.basename($_FILES["chanson"]['name']));
        }
        else{
            $messages['chanson']="le format est incorrect";
        }

    }
    //2
    if(isset($_FILES['chanson2'])){

        $infosfichiersmp32= pathinfo($_FILES['chanson2']['name']);
        $extension=$infosfichiersmp32['extensionfiles'];
        $extensionsautorise = array ('.mp3');
        if(in_array ($extension, $extensionsautorise)){
           move_uploaded_file($_FILES['chanson2']['tmp_name'],'uploads/'.basename($_FILES["chanson2"]['name']));
        }
        else{
            $messages['chanson2']="le format est incorrect";
        }

    }
     //3
     if(isset($_FILES['chanson3'])){

        $infosfichiermp33s= pathinfo($_FILES['chanson3']['name']);
        $extension=$infosfichiersmp33['extensionfiles'];
        $extensionsautorise = array ('.mp3');
        if(in_array ($extension, $extensionsautorise)){
           move_uploaded_file($_FILES['chanson3']['tmp_name'],'uploads/'.basename($_FILES["chanson3"]['name']));
        }
        else{
            $messages['chanson3']="le format est incorrect";
        }

    }
//Dossier presse + fiche technique + sacem doc

    //Document presse
    if(isset($_FILES['presse'])){

    $infosfichierspdf1= pathinfo($_FILES['presse']['name']);
    $extension=$infosfichierspdf1['extensionfiles'];
    $extensionsautorise2 = array ('.pdf');
    if(in_array ($extension, $extensionsautorise)){
       move_uploaded_file($_FILES['presse']['tmp_name'],'uploads/'.basename($_FILES["presse"]['name']));
    }
    else{
        $messages['presse']="le format est incorrect";
    }
    }

    // FIche technique 
    if(isset($_FILES['technique'])){

        $infosfichierspdf2= pathinfo($_FILES['technique']['name']);
        $extension=$infosfichierspdf2['extensionfiles'];
        if(in_array ($extension, $extensionsautorise)){
           move_uploaded_file($_FILES['technique']['tmp_name'],'uploads/'.basename($_FILES["technique"]['name']));
        }
        else{
            $messages['technique']="le format est incorrect";
        }
        }

    // Documents SACEM
    if(isset($_FILES['dsacem'])){

        $infosfichierspdf3= pathinfo($_FILES['dsacem']['name']);
        $extension=$infosfichierspdf3['extensionfiles'];
        if(in_array ($extension, $extensionsautorise)){
           move_uploaded_file($_FILES['dsacem']['tmp_name'],'uploads/'.basename($_FILES["dsacem"]['name']));
        }
        else{
            $messages['technique']="le format est incorrect";
        }
        }
//photos
    //1
    if(isset($_FILES['photo1'])){

        $infosfichiersp1= pathinfo($_FILES['photo1']['name']);
        $extension=$infosfichiersp1['extensionfiles'];
        $extensionsautorise = array('.png', '.gif', '.jpg', '.jpeg');
        $taille=imageresolution($_FILES['photo1']);
        if($taille < 300){
            $messages['photo1']="le format est incorrect";
        }
        elseif(in_array ($extension, $extensionsautorise)){
           move_uploaded_file($_FILES['photo1']['tmp_name'],'uploads/'.basename($_FILES["photo1"]['name']));
        }
        else{
            $messages['photo1']="le format est incorrect";
        }
        }

        //2
    if(isset($_FILES['photo1'])){

        $infosfichiersp2= pathinfo($_FILES['photo1']['name']);
        $extension=$infosfichiersp2['extensionfiles'];
        $taille=imageresolution($_FILES['photo2']);
        if($taille < 300){
            $messages['photo2']="la resolution est incorrect";
        }
        elseif(in_array ($extension, $extensionsautorise)){
           move_uploaded_file($_FILES['photo2']['tmp_name'],'uploads/'.basename($_FILES["photo1"]['name']));
        }
        else{
            $messages['photo2']="le format est incorrect";
        }
        }

                 


});




Flight::route('/connexion', function(){
    Flight::view()->display("login.tpl");
});
Flight::route('/dashboardArtist', function(){
    Flight::view()->display("dashboardArtist.tpl");
});
Flight::route('/dashboardAdmin', function(){
    Flight::view()->display("dashboardAdmin.tpl");
});
?>
