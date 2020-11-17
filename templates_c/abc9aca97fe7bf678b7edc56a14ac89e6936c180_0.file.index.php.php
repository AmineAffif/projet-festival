<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-17 12:32:03
  from 'C:\wamp64\www\projet-festival\index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb3c2c34f4116_40810998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abc9aca97fe7bf678b7edc56a14ac89e6936c180' => 
    array (
      0 => 'C:\\wamp64\\www\\projet-festival\\index.php',
      1 => 1605551592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb3c2c34f4116_40810998 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
require 'includes/Flight/flight/Flight.php';

require 'includes/Smarty/libs/Smarty.class.php';

require "routes/routes.php";

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



<?php }
}
