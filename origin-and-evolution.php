<?php
$currentPage = "Origin & Evolution | History";
include "assets/inc/head.php";
?>
<body>
    <!-- nav -->
    <?php
    $currentPage = "Origin & Evolution";
    include "assets/inc/nav.php";
    ?>
    <!-- page info -->
    <main>
        <!-- image carousel section -->
        <div>
            <section class="medium" style="background-color: var(--meteor)">
                <div class="carousel">
                    <div class="carousel_item">
                        <img src="assets/images/typographyevolution.png" alt="evolution_of_typography">
                    </div>
                    <div class="carousel_item">
                    <img src="assets/images/claybullaetypography.png" alt="clay_hieroglyphics">
                    </div>
                    <div class="carousel_item">
                        <img src="assets/images/timesnewroman.png" alt="times_new_roman_font">
                    </div>
                </div>
            </section>

            <section class="small" style="background-color: transparent">
                <h2>Origins</h2>
                    <p>During the 20,000 B.C., the first written communication was found in an ancient cave. During the ancient civilization they used  hieroglyphs and 
                        pictograms symbols were used to communicate with others than speaking. A well known example was the cuneiform in Mesopotamia. But the pictograms 
                        symbols then evolved from drawings to abstract characters. During the medieval period, scribes would carefully create books and manuscripts by hand.
                    </p>
            </section> 
        </div>
        <div>
            <section class="medium" style="background-color: transparent">
                <h2>Evolution of Typography</h2>
                <p>Typography has evolved a lot from using symbols to handwritten and illustrated manuscripts. In 3100 B.C., Egyptians were symbols and ideograms in their 
                    art, writing and architecture. In 1600 B.C. Phoenicians created phonograms/symbols that were used to represent words. Currently in the present we also 
                    use phonograms that they created such as % to represent percentage and # to represent number and many more. Phoenicians were the first to create an 
                    alphabet and in 1000 B.C. Greeks used the same alphabet. The word alphabet is a combination of the first Greek letters, alpha and beta. Romans used the 
                    Greek alphabet but they created the uppercase alphabet which is currently used. They also modified the style of letters and introduced two types of scripts,
                    formal and informal. During the middle age, handwritten and illustrated manuscripts were really popular and there was a wide range of writing styles. Art of
                    calligraphy was becoming popular and many calligraphy masters travelled across the world to share their knowledge.
                </p>
            </section>
            <section class="small" style="background-color: transparent">
                <img src="assets/images/hieroglyphics.png" alt="hieroglyphics image" style="width: 100%">
            </section>
        </div> 
        <a href="quiz.php?quiz_id=2" class="btn"><button>Take Quiz!</button></a>
    </main>

    <!-- footer -->
    <?php include "assets/inc/footer.php"; ?>

    <script src="assets/js/menu.js"></script>
    <script src="assets/js/image_carousel.js"></script>

</body>
</html>
