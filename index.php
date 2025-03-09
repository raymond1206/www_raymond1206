<?php $title = ''; $file = 'HOME'; $root = './';
require_once(__DIR__.'/'.$root.'/app/api/general/path.php');
require_once(CONFIG_DIR.'/link.php');
require_once(API_DIR.'/load_content.php');

include_once(TEMPLATES_DIR.'/header.php');
?>
<main>
    <h1><?=$file?></h1>
    <div id="content">
        <h3>PROFILE</h3>
        <hr>
        <div id="profile">
            <div id="profile-img" style="background-image: url(<?=IMAGES_URL?>/brand/Raymond1206_logo.jpg);"></div>
            <div id="profile-txt">
                <h2>Raymond1206</h2>
                <p>Hi! I produce soundtracks and take pictures for my own sake. My works are available in several platforms, please have a check!</p><!--bio goes inside here-->
            </div>
        </div>
        <h3>NEWS</h3>
        <hr>
        <div id="news">
<?php $NEWS = load_news(10);
foreach($NEWS as $news){?>
            <section class="news-item">
                <time datetime="<?=$news['date']?>"><i><?=$news['date']?></i></time>
                <h2><?=$news['title']?></h2>
                <p><?=$news['content']?></p>
            </section>
            <hr>
<?php }?>
        </div>
    </div>
</main>
<?php
include_once(TEMPLATES_DIR.'/footer.php');