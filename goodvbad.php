<?php
$currentPage = "Good vs Bad Typography";
include "assets/inc/head.php";
?>
<body>
    <!-- nav -->
    <?php
    $currentPage = "Good vs Bad Typography";
    include "assets/inc/nav.php";
    ?>
    
    <!-- page info  -->

   <main class="tp-main-container">

    <section class="tp-intro-text">
        <h2>Importance</h2>
        Typography is crucial to design. You have to choose a typeface that conveys mood, while maintaining readability and legibility, without taking away from your design. This process takes time to learn, here are some examples of good vs bad typography.
    </section>

    <div class="tp-flex-wrapper">
        <article class="tp-card">
            <img src="assets/images/dragone.png" alt="good example of typography use, dragone" class="tp-card-img">
            <div class="tp-card-content">
                <h2 class="tp-card-title tp-good">Good Example</h2>
                <p class="tp-card-description">This is an example of good typography, because the designer chose consistent typefaces, that convey the mood of the site, while maintaining readability. </p>
            </div>
        </article>

        <article class="tp-card">
            <img src="assets/images/marieguillaumet.png" alt="good example of typography use, marie guillaumet" class="tp-card-img">
            <div class="tp-card-content">
                <h2 class="tp-card-title tp-good">Good Example</h2>
                <p class="tp-card-description">This is an example of good typography, because the designer chose consistent typefaces, that convey the mood of the site, while maintaining readability. </p>
            </div>
        </article>
    </div>

    <section class="tp-intro-text">
        <h2>Your Brand</h2>
        Different brands and content have different typographical needs. For example a perfume brand would want to use different typefaces than a sports company. You want to make sure you are choosing a typefaces that invokes an appropriate emotional response, conscious or subconscious. The personality of the brand should shine through the typeface. This should also be consistent and recognizable, leaving a lasting impression on the audience. Your type should also be used effectively. A beautiful typefaces is no good if you have inconsistent spacing, off-putting line heights, rivers, orphans or widows. You want clean, uniform text.
    </section>

    <div class="tp-flex-wrapper">
        <article class="tp-card">
            <img src="assets/images/newventurescouting.png" alt="bad example of typography use, too many typefaces" class="tp-card-img">
            <div class="tp-card-content">
                <h2 class="tp-card-title tp-bad">Bad Example</h2>
                <p class="tp-card-description">This is an example of bad typography, because the designer chose too many typefaces, that have no clear hierarchy. This makes the mood chaotic and the content appear less clean.</p>
            </div>
        </article>

        <article class="tp-card">
            <img src="assets/images/unitedstrands.png" alt="bad example of typography use, unclear hierachy" class="tp-card-img">
            <div class="tp-card-content">
                <h2 class="tp-card-title tp-bad">Bad Example</h2>
                <p class="tp-card-description">This is an example of bad typography, because the designer chose too many typefaces, that have no clear hierarchy. This makes the mood chaotic and the content appear less clean.</p>
            </div>
        </article>
    </div>

    <section class="tp-intro-text">
        <h2> Type Personality</h2>
        To choose the best typeface for your project you first must analyze your audience, your product, and your goals. Are you looking to sell something to children? Sports fans? Professionals? How do you want your brand to make them feel? A bold sans serif may be perfect for your athletic wear company, but a thin elegant serif is better for a French bakery. Choosing type is an art that can make or break your product. It is up to to research and choose an effective typeface.
    </section>
    <a href="quiz.php?quiz_id=7" class="btn"><button>Take Quiz!</button></a>

</main>



    
    <!-- footer -->
    <?php include "assets/inc/footer.php"; ?>

    <script src="assets/js/menu.js"></script>
    
</body>
</html>