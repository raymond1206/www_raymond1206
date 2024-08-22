<?php 

$rootDir = "./"; 
$title = "";

include "{$rootDir}backend/header.php";
?>

<main>
        <div class="content-box"><!--copy the whole class to add content-->
            <div class="table">
                <h3>PROFILE</h3>
                <hr>
            </div>
            <div class="content">
                <div id="profile"><!--change id name depending on content-->
                    <div id="profile-img">
                        <img src="<?php echo $rootDir; ?>assets/images/main_logo/Raymond1206_logo.jpg" alt="profile_picture" title="Raymond1206 Logo">
                    </div>
                    <div id="profile-txt">
                        <h3>Music Producer</h3>
                        <h2>Raymond1206</h2>
            
                        <p>Hi! I produce soundtracks for my own sake.</p><!--bio goes inside here-->
                    </div>
                </div>
            </div>
        </div>
        <div class="content-box"><!--copy the whole class to add content-->
            <div class="table">
                <h3>NEWS</h3>
                <hr>
            </div>
            <div class="content">
                <div id="news"><!--change id name depending on content-->
                    <!-- copy the whole section and paste the newes on top-->
                    
                    <section class="news-item">
                        <time datetime="2024-01-01"><a>2024.01.01</a></time>
                        <h2>Website Renewed!</h2>
                        <p>A Happy New Year and welcome to my website! Check out other news coming soon.</p>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <?php include "{$rootDir}backend/footer.php"; ?>