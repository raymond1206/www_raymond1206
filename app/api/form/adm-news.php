<?php require_once(__DIR__.'/../general/path.php');
require_once(CONFIG_DIR.'/link.php');
require_once(CONFIG_DIR.'/database_process.php');
require_once(CONFIG_DIR.'/header.php');
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new'])){
    if(empty($_POST['title']) || empty($_POST['date']) || empty($_POST['content'])){
        return_header('/admin/?error=FIll_All');
    }else{
        $title = htmlspecialchars($_POST['title']);
        $date = str_replace('-', '.', $_POST['date']);
        $content = htmlspecialchars($_POST['content']);
        $query = new DatabaseStatement('INSERT INTO news (title, date, content) VALUES (:title, :date, :content)');
        $result = $query->Operation([
            ':title' => $title,
            ':date' => $date,
            ':content' => $content]);
        if($result > 0){
            return_header('/admin/?message=Successfully_Inserted');
        }
    }
}elseif($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])){
    $query = new DatabaseStatement("DELETE FROM news WHERE id = :id");
    $result = $query->Operation([':id' => $_POST['id']]);
    if($result > 0){
        return_header('/admin/?message=Successfully_Deleted');
    }
}