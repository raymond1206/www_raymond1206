<?php $title = 'Contact'; $file = 'CONTACT'; $root = '../';
require_once(__DIR__.'/'.$root.'/app/api/general/path.php');
require_once(CONFIG_DIR.'/link.php');

include_once(TEMPLATES_DIR.'/header.php');
?>
<main>
    <h1><?=$file?></h1>
    <div id="content">
<?php if(!empty($_GET['code'])){
    $code = $_GET['code'];
    if($code == '1'){?>
        <p>*Please Fill All Areas</p>
    <?php }elseif($code == '2'){?>
        <p>Thank you For Contating Me! <a href="<?=HOME_URL?>/">Return to Home Page</a></p>
    <?php }elseif($code == '3'){?>
        <p>*Sorry, Something Went Wrong. Try Again Later, Or Contact From Social Accounts</p>
    <?php }
}?>
        <form action="<?=FORM_URL?>/mail.php" method="POST">
            <input type="hidden" id="lang" name="language">
            <input type="hidden" id="time" name="timezone">
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name" autofocus><br>
            <label for="mail">Email Address</label><br>
            <input type="email" id="mail" name="email"><br>
            <label for="message">Message</label><br>
            <textarea id="message" name="message"></textarea><br>
            <input type="submit" value="Send">
        </form>
    </div>
</main>
<?php
include_once(TEMPLATES_DIR.'/footer.php');