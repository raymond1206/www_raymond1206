<?php 

$rootDir = "../"; 
$title = "Contact";

include "{$rootDir}backend/header.php";
?>
<?php require_once 'contactform.php'; ?>

<main>
        <div class="content-box"><!--copy the whole class to add content-->
            <div class="table">
                <h3>CONTACT</h3>
                <hr>
            </div>
            <div class="content">
                <div id="contact"><!--change id name depending on content-->
                    <form action="contactform.php" method="post" id="myForm">
                        <div class="form-input">
                            <label for="name">Name *</label><br>
                            <input type="text" id="name" class="input" name="name" autofocus  placeholder="Your Name..."><br><br>
                        </div>
                        <div class="form-input">
                            <label for="email">E-mail Address *</label><br>
                            <input type="email" id="email" class="input" name="email"  placeholder="Your Email Address..."><br><br>
                        </div>
                        <div class="form-input">
                            <label for="message">Message *</label><br>
                            <textarea id="message" class="input" name="message" style="width: 200px; height: 125px;" placeholder="Your Message..."></textarea><br><br>
                        </div>
                        <button type="submit" class="submit" value="submit">Send Message</button>
                        
                    </form>
                    <div id="formMessage">The form does not work as intended at the moment. Please contact via SNS or the provided mail address below.</div>
                </div>
            </div>
        </div>
    </main>
<?php include "{$rootDir}backend/footer.php"; ?>


