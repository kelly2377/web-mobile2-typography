<?php
$currentPage = "Contact Form";
include "assets/inc/head.php";
?>
<body class="contact-page">
    <?php
    $currentPage = "Contact Form";
    include "assets/inc/nav.php";
    include "form_process.php";
    ?>

    <main>  
        <div>
            <section class="large">
                <section>
                    <?php if ($success){ ?>
                        <h2>Thanks For Reaching Out!</h2>

                        <p>Your message was successfully submitted. We'll reply shortly.</p>  
                    <?php }?>
                    <h2>Contact Us!</h2>

                    <p>Have questions about typography or ideas to improve this site? Fill out the form below. We'll get back to you shortly.</p>
                    <p><span>*</span> indicates a required field</p>
                </section> 

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <fieldset>  
                        <div class="name">
                            <label for="firstName">First Name <span>* <?php echo $firstNameErr;?></span></label>
                            <input required type="text" name="firstName" id="firstName" value="<?php echo $firstName;?>">
                        
                            <label for="lastName">Last Name <span>* <?php echo $lastNameErr;?></span></label>
                            <input required type="text" name="lastName" id="lastName" value="<?php echo $lastName;?>">
                        </div>

                        <div>
                            <label for="email">Email <span>* <?php echo $emailErr;?></span></label>
                            <input type="email" name="email" id="email" required placeholder="somebody@somewhere.com" value="<?php echo $email;?>">
                        </div>

                        <div>
                            <label for="phoneNumber">Phone Number <span><?php echo $phoneNumberErr;?></span></label>
                            <input type="tel" name="phoneNumber" id="phoneNumber" placeholder="xxx-xxx-xxxx" minlength=10 maxlength=15 pattern="[0-9]{3}[- ]?[0-9]{3}[- ]?[0-9]{4}" value="<?php echo $phoneNumber;?>" title="Only numbers, (, -, or space allowed">
                        </div>
                        
                    </fieldset>
                    
                    <div class="contact-reason">
                        <p>Reason for contacting: <span>*</span></p>

                        <div>
                            <input type="radio" name="contactReason" id="new" value="New Topic" checked>
                            <label for="new">I have a topic I would like to see on this site.</label>
                        </div>

                        <div>
                            <input type="radio" name="contactReason" id="question" value="Question">
                            <label for="question">I have a question.</label>
                        </div>

                        <div>
                            <input type="radio" name="contactReason" id="feedback" value="Content Feedback">
                            <label for="feedback">I have feedback on the content of this site.</label>
                        </div>

                        <div>
                            <input type="radio" name="contactReason" id="reason-other" value="Other">
                            <label for="reason-other">I have another reason</label>
                        </div>
                    </div>

                    <div class="long-text">
                        <label for="message">Question/Message: <span>* <?php echo $messageErr;?></span></label><br>
                        <textarea name="message" id="message" required placeholder="Type here..."><?php echo $message;?></textarea>
                    </div>

                    <div>
                        <input name="submit" type="submit" value="Send Information">
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