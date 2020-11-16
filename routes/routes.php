<?php
Flight::route('/', function(){
    Flight::view()->display("index.tpl");
   });
Flight::route('/inscription', function(){
    Flight::view()->display("resgister.tpl");
});
?>
