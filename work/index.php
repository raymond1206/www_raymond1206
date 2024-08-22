<?php 

$rootDir = "../"; 
$title = "Work";

include "{$rootDir}backend/header.php";
?>

<main>
    <div class="content-box"><!--copy the whole class to add content-->
        <div class="table">
            <h3>WORK</h3>
            <hr>
        </div>
        <div class="content">
            <div id="soundcloud"><!--change id name depending on content-->
                <a href="https://soundcloud.com/raymond1206/" target="_blank"><p>SoundCloud</p></a>
                <iframe width="80%" height="500" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//soundcloud.com/raymond1206&amp;show_playcount=false&sharing=true"></iframe>
            </div>
        </div>
    </div>
</main>
<?php include "{$rootDir}backend/footer.php"; ?>