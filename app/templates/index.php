<?php $title = ''; $file = 'HOME'; $root = './';
require_once(__DIR__.'/'.$root.'/app/api/general/path.php');
require_once(CONFIG_DIR.'/link.php');
require_once(API_DIR.'/load_content.php');

include_once(TEMPLATES_DIR.'/header.php');
?>
<main>
    <h1><?=$file?></h1>
    <div id="content">
        
    </div>
</main>
<?php
include_once(TEMPLATES_DIR.'/footer.php');