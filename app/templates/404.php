<?php $title = '404'; $file = '404'; $root = '../../';
require_once(__DIR__.'/'.$root.'/app/api/general/path.php');
require_once(CONFIG_DIR.'/link.php');

include_once(TEMPLATES_DIR.'/header.php');
?>
<main>
    <h1>Error 404 Page not Found.</h1>
    <div id="content">
        <p style="text-align: center;"><a style="color: white;" href="<?=HOME_URL?>">Back to Homepage</a></p>
    </div>
</main>
<?php
include_once(TEMPLATES_DIR.'/footer.php');