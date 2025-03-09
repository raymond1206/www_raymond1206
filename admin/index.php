<?php $title = 'Admin'; $file = 'ADMIN'; $root = '../';
require_once(__DIR__.'/'.$root.'/app/api/general/path.php');
require_once(CONFIG_DIR.'/link.php');
require_once(API_DIR.'/validate_admin.php');
require_once(API_DIR.'/load_content.php');
session_start();
login_state();
include_once(TEMPLATES_DIR.'/header.php');
?>
<main>
    <h1><?=$file?></h1>
    <div id="content">
        <div id="newnews">
            <form action="<?=FORM_URL?>/adm-news.php" method="POST">
                <h2>ADD NEWS</h2>
                <label for="title">TITLE</label><br>
                <input type="text" name="title" id="title"><br>
                <label for="date">DATE</label><br>
                <input type="date" name="date" id="date" value="<?=date('Y-m-d')?>"><br>
                <label for="message">CONTENT</label><br>
                <input type="text" name="content" id="message"><br>
                <input type="submit" name="new" value="POST">
            </form>
        </div>
        <hr>
        <div id="deletenews">
            <h2>DELETE NEWS</h2>
            <hr>
<?php $NEWS = load_news();
foreach($NEWS as $news){?>
            <form action="<?=FORM_URL?>/adm-news.php" method="POST">
                <h3><?=$news['title']?></h3>
                <p><i><?=$news['date']?></i></p>
                <p><?=$news['content']?></p>
                <input type="hidden" name="id" value="<?=$news['id']?>">
                <input type="submit" name="delete" value="DELETE">
            </form>
            <hr>
<?php }?>
        </div>
    </div>
</main>
<?php
include_once(TEMPLATES_DIR.'/footer.php');