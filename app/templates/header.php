<?php header('Content-Type: text/html; charset=utf-8; Content-Security-Policy: script-src "self" frame-src "self";');
require_once(DATA_DIR.'/sns.php');
$title = $title.' Raymond1206';
$brand = '';
$SNS = loadsns();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Raymond1206, music, 作曲, loop bgm, photo, camera" />
    <meta name="description" content="Hi! I produce soundtracks and take pictures for my own sake. My works are available in several platforms, please have a check!" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?=$title?>" />
    <meta name="twitter:title" content="<?=$title?>" />
    <meta property="og:image" content="<?=IMAGES_URL?>/brand/Raymond1206_logo_2_icon.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:image" content="<?=IMAGES_URL?>/brand/Raymond1206_logo_2_icon.png" />
    <meta property="og:url" content="<?=HOME_URL.$_SERVER['REQUEST_URI']?>" />

    <link rel="stylesheet" href="<?=STYLE_URL?>/style.css" />
    <link rel="stylesheet" href="<?=STYLE_URL.'/lib/'.$file.'.css'?>" />
    <link rel="icon" href="<?=IMAGES_URL?>/brand/Raymond1206_logo_2_icon.png" type="image/png" />
    <title><?=$title?></title>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SWNZTB41E9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SWNZTB41E9');
</script>
<?php ob_end_flush();?>
<body>
<header>
    <div id="desk">
        <a href="<?=HOME_URL?>/"><div class="logo"></div></a>
        <div class="navigation" id="desk-nav">
            <ul>
                <li><a href="<?=HOME_URL?>/">HOME</a></li>
                <li><a href="<?=HOME_URL?>/music/">MUSIC</a></li>
                <li><a href="<?=HOME_URL?>/photography/">PHOTOGRAPHY</a></li>
                <li><a href="<?=HOME_URL?>/contact/">CONTACT</a></li>
            </ul>
        </div>
        <div class="sns">
<?php ob_start();foreach($SNS as $account => $details){?>
            <a href="<?=$details['Link']?>" target="_blank" title="<?=$account?>"><div class="snslogo" style="background-image: url(<?=IMAGES_URL.'/share/'.$details['Icon']?>);"></div></a>
<?php }ob_end_flush();?>
        </div>
    </div>
    <div id="mobile">
        <a href="<?=HOME_URL?>/"><div class="logo"></div></a>
        <div id="nav-button">
            <hr>
            <hr>
            <hr>
        </div>
        <div id="display">
            <div class="navigation" id="mobile-nav">
                <ul>
                    <li><a href="<?=HOME_URL?>">HOME</a></li>
                    <li><a href="<?=HOME_URL?>/music/">MUSIC</a></li>
                    <li><a href="<?=HOME_URL?>/photography/">PHOTOGRAPHY</a></li>
                    <li><a href="<?=HOME_URL?>/contact/">CONTACT</a></li>
                </ul>
            </div>
            <div class="sns">
<?php ob_start();foreach($SNS as $account => $details){?>
                <a href="<?=$details['Link']?>" target="_blank" title="<?=$account?>"><div class="snslogo" style="background-image: url(<?=IMAGES_URL.'/share/'.$details['Icon']?>);"></div></a>
<?php }ob_end_flush();?>
            </div>
        </div>
    </div>
</header>