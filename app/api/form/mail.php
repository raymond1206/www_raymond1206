<?php require_once(__DIR__.'/../general/path.php');
require_once(CONFIG_DIR.'/link.php');
require_once(CONFIG_DIR.'/header.php');
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])){
        return_header('/contact/?code=1');
    }else{
        $name = htmlspecialchars($_POST['name']);
        $from = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        $language = $_POST['language'];
        $timezone = $_POST['timezone'];
        $to = 'raymond_portfolio@raymond1206.com';
        $subject = 'Contact Requested';
        $headers = array(
            'From' => $from,
            'Reply-To' => $from,
            'X-Mailer' => 'PHP/' . phpversion()
        );
        ob_start();?>
From:   <?=$name.PHP_EOL?>
Email:  <?=$from.PHP_EOL?>
Of:     <?=$language.' '.$timezone.PHP_EOL?>
Message:<?=PHP_EOL.$message?>
<?php $content = ob_get_clean();
        if(mail($to, $subject, $content, $headers)){
            return_header('/contact/?code=2');
        }else{
            return_header('/contact/?code=3');
        }
    }
}