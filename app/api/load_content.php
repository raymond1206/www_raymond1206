<?php require_once(__DIR__.'/general/path.php');
require_once(CONFIG_DIR.'/link.php');
require_once(CONFIG_DIR.'/database_process.php');
require_once(API_DIR.'/directory_handler.php');

function load_news($limit = 0){
    if($limit === 0){
        $query = new DatabaseStatement('SELECT * FROM news ORDER BY id DESC');
        $result = $query->Operation([]);
    }elseif(is_int($limit)){
        $query = new DatabaseStatement('SELECT * FROM news ORDER BY id DESC LIMIT :num');
        $result = $query->Operation([':num' => $limit]);
    }
    return $result;
}
function load_photo(){
    return dir_items(ROOT_DIR.'/photography/images/', 'asc', 'nat', 1);
}