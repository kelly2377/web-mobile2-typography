<?php
$currentPage = "Contact Form";
include "assets/inc/head.php";
?>
<body class="contact-page">
    <?php
    $currentPage = "Contact Form";
    include "assets/inc/nav.php";
    ?>

    <main>  
        <div>
            <section class="large">
                <section>
                    <h2>Contact Us!</h2>

                    <p>Have questions about typography or ideas to improve this site? Fill out the form below. We'll get back to you shortly.</p>
                    <p><span>*</span> indicates a required field</p>
                </section> 

                <form method="post" action="form_process.php">
                    <fieldset>  
                        <div class="name">
                            <label for="name">First Name <span>*</span></label>
                            <input type="text" name="fname" id="fname" required>
                        
                            <label for="name">Last Name <span>*</span></label>
                            <input type="text" name="lname" id="lname" required>
                        </div>

                        <div>
                            <label for="email">Email <span>*</span></label>
                            <input type="email" name="email" id="email" required placeholder="somebody@somewhere.com">
                        </div>

                        <div>
                            <label for="phone">Phone Number</label>
                            <input type="tel" name="phone" id="phone" placeholder="xxx-xxx-xxxx">
                        </div>
                    </fieldset>
                    
                    <div class="contact-reason">
                        <p>Reason for contacting: <span>*</span></p>

                        <div>
                            <input type="radio" name="reason" id="info" value="New Topic" checked>
                            <label for="info">I have a topic I would like to see on this site.</label>
                        </div>

                        <div>
                            <input type="radio" name="reason" id="rec" value="Question">
                            <label for="rec">I have a question.</label>
                        </div>

                        <div>
                            <input type="radio" name="reason" id="join" value="Content Feedback">
                            <label for="rec">I have feedback on the content of this site.</label>
                        </div>

                        <div>
                            <input type="radio" name="reason" id="reason-other" value="Other">
                            <label for="reason-other">I have another reason</label>
                        </div>
                    </div>

                    <div class="long-text">
                        <label for="additional">Question/Message: <span>*</span></label><br>
                        <textarea name="additional" id="additional" required placeholder="Type here..."></textarea>
                    </div>

                    <div class="align-right">
                        <input type="Submit" value="Send Information">
                    </div>
                </form>
            </section>
        </div>        
    </main>

    <?php
    include "assets/inc/footer.php";
    ?>
    <script src="assets/js/menu.js"></script>
</body>
</html>