<footer>
    <hr>
    <div id="footer-content">
        <div id="ftcred">
            <p>Author: Raymond1206<br><?=date("Y")?> &copy; All rights reserved<br>
            </p>
        </div>
        <div id="ftsns">
<?php ob_start();foreach($SNS as $account => $details){?>
            <a href="<?=$details['Link']?>" target="_blank" title="<?=$account?>"><div class="snslogo" style="background-image: url(<?=IMAGES_URL.'/share/'.$details['Icon']?>);"></div></a>
<?php }ob_end_flush();?>
        </div>
    </div>
</footer>
<script type="module" src="<?=SCRIPT_URL?>/script.js"></script>
<script type="module" src="<?=SCRIPT_URL.'/lib/'.$file.'.js'?>"></script>
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "name": "Raymond1206",
    "url": "<?=HOME_URL.$_SERVER['REQUEST_URI']?>",
}
</script>
</body>
</html>