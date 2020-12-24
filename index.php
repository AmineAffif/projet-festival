<?php
require 'includes/Flight/flight/Flight.php';

require 'includes/Smarty/libs/Smarty.class.php';

require "routes/routes.php";

require "../includes/pdo.php";

require "includes/import_dep.php";


Flight::register('view', 'Smarty', array(), function($smarty){
    $smarty->template_dir = './templates/';
    $smarty->compile_dir = './templates_c/';
    $smarty->config_dir = './config/';
    $smarty->cache_dir = './cache/';
   });
   Flight::map('render', function($template, $data){
    Flight::view()->assign($data);
    Flight::view()->display($template);
   });
Flight::start();



