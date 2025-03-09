<?php require_once(__DIR__.'/general/path.php');
require_once(CONFIG_DIR.'/header.php');
require_once(CONFIG_DIR.'/database_process.php');

function login_state(){
    if(isset($_SESSION['username'])){
        $query = new DatabaseStatement('SELECT * FROM user WHERE username = :username');
        $result = $query->Operation([':username' => $_SESSION['username']]);
        if(!empty($result)){
            return true;
        }else{
            return_header('/?error=you_cheat');
        }
    }else{
        return_header('/?error=not_logged_in');
    }
}