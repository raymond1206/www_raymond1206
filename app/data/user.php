<?php require_once(__DIR__.'../../api/general/path.php');
require_once(CONFIG_DIR.'/database_process.php');

$usrnm = str_rot13('raymond1206');
$pswrd = password_hash('$daisuki0311', PASSWORD_DEFAULT);
$query = new DatabaseStatement("INSERT INTO user (username, password) VALUES (:username, :password)");
$result = $query->Operation([':username' => $usrnm, ':password' => $pswrd]);
echo $result;