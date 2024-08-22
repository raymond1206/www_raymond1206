<?php
include 'lib/snslinks.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="raymond,raymond1206,Raymond1206,music producer,作曲,bgm,loop bgm">
    <link rel="stylesheet" href="<?php echo $rootDir; ?>assets/style.css">
    <link rel="icon" href="<?php echo $rootDir; ?>assets/images/main_logo/Raymond1206_logo_2_icon.png" type="image/jpg">
    <title>Raymond1206 <?php echo $title; ?></title>
</head>
<body>
    <header>
        <div id="dsk-header">
            <div id="dsk-logo" class="hd-logo">
                <a href="<?php echo $rootDir; ?>" title="Home"><img src="<?php echo $rootDir; ?>assets/images/main_logo/Raymond1206_logo_2.png" alt="Raymond1206 Logo"></a>
            </div>
            <div id="dsk-link" class="hd-link">
                <h1><a href="<?php echo $rootDir; ?>">HOME</a></h1>
                <h1><a href="<?php echo $rootDir; ?>work/">WORK</a></h1>
                <h1><a href="<?php echo $rootDir; ?>discography/">DISCOGRAPHY</a></h1>
                <h1><a href="<?php echo $rootDir; ?>contact/">CONTACT</a></h1>
            </div>
            <div id="dsk-sns" class="hd-sns">
                <a href="<?php echo $BCL; ?>" target="_blank" title="BandCamp"><img src="<?php echo $rootDir; ?>/assets/images//link_logo/BandCamp.png" alt="bandcamp" ></a>
                <a href="<?php echo $SCL; ?>" target="_blank" title="SoundCloud"><img src="<?php echo $rootDir; ?>assets/images/link_logo/SoundCloud.png" alt="soundcloud"></a>
                <a href="<?php echo $XL; ?>" target="_blank" title="X (Twitter)"><img src="<?php echo $rootDir; ?>assets/images/link_logo/X.png" alt="X"></a>
            </div>
        </div>
        <div id="mbl-header">
            <div id="mbl-header-bar">
                <div id="mbl-logo" class="hd-logo">
                    <a href="<?php echo $rootDir; ?>" title="Home"><img src="<?php echo $rootDir; ?>assets/images/main_logo/Raymond1206_logo_2.png" alt="Raymond1206 Logo"></a>
                </div>
                <div id="menubutton" onclick="toggleMobileMenu()">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </div>
            <div id="mbl-header-menu">
                <div id="mbl-link" class="hd-link">
                    <h1><a href="<?php echo $rootDir; ?>">HOME</a></h1>
                    <h1><a href="<?php echo $rootDir; ?>work/">WORK</a></h1>
                    <h1><a href="<?php echo $rootDir; ?>discography/">DISCOGRAPHY</a></h1>
                    <h1><a href="<?php echo $rootDir; ?>contact/">CONTACT</a></h1>
                </div>
                <div id="mbl-sns" class="hd-sns">
                    <a href="<?php echo $BCL; ?>" target="_blank" title="BandCamp"><img src="<?php echo $rootDir; ?>/assets/images//link_logo/BandCamp.png" alt="bandcamp" ></a>
                    <a href="<?php echo $SCL; ?>" target="_blank" title="SoundCloud"><img src="<?php echo $rootDir; ?>assets/images/link_logo/SoundCloud.png" alt="soundcloud"></a>
                    <a href="<?php echo $XL; ?>" target="_blank" title="X (Twitter)"><img src="<?php echo $rootDir; ?>assets/images/link_logo/X.png" alt="X"></a>
                </div>
            </div>
        </div>
    </header>