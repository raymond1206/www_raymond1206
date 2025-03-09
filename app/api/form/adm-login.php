<?php require_once(__DIR__.'/../general/path.php');
require_once(CONFIG_DIR.'/link.php');
require_once(CONFIG_DIR.'/database_process.php');
require_once(CONFIG_DIR.'/header.php');
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(empty($_POST['username']) || empty($_POST['password'])){
        return_header('/admin/login.php?error=FIll_All');
    }else{
        $query = new DatabaseStatement('SELECT * FROM user WHERE username = :username');
        $result = $query->Operation([':username' => str_rot13($_POST['username'])]);
        if(!empty($result)){
            if(password_verify($_POST['password'], $result[0]['password'])){
                $_SESSION['username'] = str_rot13($_POST['username']);
                return_header('/admin/');
            }else{
                return_header('/admin/login.php?error=Wrong_Password');
            }
        }else{
            return_header('/admin/login.php?error=Wrong_Username');
        }
    }
}