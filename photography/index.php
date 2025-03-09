<?php $title = 'Photography'; $file = 'PHOTOGRAPHY'; $root = '../';
require_once(__DIR__.'/'.$root.'/app/api/general/path.php');
require_once(CONFIG_DIR.'/link.php');
require_once(API_DIR.'/load_content.php');

include_once(TEMPLATES_DIR.'/header.php');
?>
<main>
    <h1><?=$file?></h1>
    <div id="content">
        <div id="imageGrid">
<?php $images = load_photo();
foreach($images as $image){?>
            <div class="image" style="background-image: url(<?=HOME_URL.'/photography/images/'.$image?>);"></div>
<?php }?>
        </div>
    </div>
</main>
<?php
include_once(TEMPLATES_DIR.'/footer.php');