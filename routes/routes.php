<?php

require "../includes/pdo.php";

Flight::route('/', function(){
    Flight::view()->display("index.tpl");
   });



Flight::route('GET /inscription', function(){
    Flight::view()->display("resgister.tpl");
});

Flight::route('POST /inscription', function(){
    Flight::view()->display("resgister.tpl");
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
