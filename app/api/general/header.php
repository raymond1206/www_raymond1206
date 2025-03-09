<?php require_once(__DIR__.'/link.php');
function request_protocol(){
    return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
}
function return_header($uri, $fullrefresh = false){
    if($fullrefresh){
        header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
        header("Pragma: no-cache"); // HTTP 1.0
        header("Expires: 0"); // Proxies
    }
    header("Location: ".HOME_URL.$uri);
    exit;
}