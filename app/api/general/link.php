<?php require_once(__DIR__.'/header.php');
define('HOME_PATH', '');//add '/' if !empty
define('HOME_URL', request_protocol().$_SERVER['SERVER_NAME'].HOME_PATH);

define('ASSETS_URL', HOME_URL.'/app/assets');
define('IMAGES_URL', ASSETS_URL.'/images');
define('STYLE_URL', ASSETS_URL.'/style');
define('SCRIPT_URL', ASSETS_URL.'/script');

define('FORM_URL', HOME_URL.'/app/api/form');