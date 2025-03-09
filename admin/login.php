<?php $title = ''; $file = 'LOGIN'; $root = '../';
require_once(__DIR__.'/'.$root.'/app/api/general/path.php');
require_once(CONFIG_DIR.'/link.php');
session_start();
include_once(TEMPLATES_DIR.'/header.php');
?>
<main>
    <h1><?=$file?></h1>
    <div id="content">
        <form action="<?=FORM_URL?>/adm-login.php" method="POST">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="Login">
        </form>
    </div>
</main>
<?php
include_once(TEMPLATES_DIR.'/footer.php');