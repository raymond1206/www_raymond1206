<?php $title = 'Music'; $file = 'MUSIC'; $root = '../';
require_once(__DIR__.'/'.$root.'/app/api/general/path.php');
require_once(CONFIG_DIR.'/link.php');

include_once(TEMPLATES_DIR.'/header.php');
?>
<main>
    <h1><?=$file?></h1>
    <div id="content">
        <iframe scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//soundcloud.com/raymond1206&amp;show_playcount=false&sharing=true"></iframe>
    </div>
</main>
<?php
include_once(TEMPLATES_DIR.'/footer.php');