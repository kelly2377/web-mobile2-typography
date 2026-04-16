<?php
$currentPage = "Typographical Elements | Fundamentals";
include "assets/inc/head.php";
?>

<body>
    <!-- nav -->
    <?php include "assets/inc/nav.php"; ?>

    <main>
        <h2>Typographical Elements</h2>
        
        <div>
            <section class="large">
                <div>
                    <h3>Fonts & Typefaces</h3>
                    <img class="right" src="assets/images/fonts-typefaces.png" alt="Typeface vs Font">
                    <p>
                        The visual style of characters is central to typography and its power to communicate to users. However, fonts and typefaces are not the same. A font is a single graphical representation of text, while a typeface is a family of related fonts that vary in width, weight, or style. The four common typeface categories are serif, sans-serif, script, and decorative,  with serif and sans-serif often used to distinguish between headers and body text.
                    </p>

                    <p>
                        Your choice of font and typeface shapes how users perceive your brand. Whether you want a casual or sleek look, they should align with and reinforce your brand's personality. 
                    </p>
                </div>
            </section>
        </div>

        <div>
            <section class="large">
                <div>
                    <h3>Kerning, Leading & Tracking</h3>
                    <img class="left" src="assets/images/kerning-leading-tracking.png" alt="Example of kerning, leading, and tracking"/>
                    <p>
                        Kerning is the spacing between individual characters, based on their shapes. Effective kerning creates even spacing, ensuring a consistent amount of white space between letters.
                    </p>

                    <p>
                        Leading (or line height) is the vertical space between lines of text, measured from one baseline to the next. It's what many people know as line spacing. It requires balance: too much space makes text tedious to read, while too little makes it hard to read.
                    </p>

                    <p>
                        Tracking (letter-spacing) is the adjustment of space between all characters. It allows you to uniformly increase or decrease this letter spacing while maintaining consistency across the text. The text remains uniform thanks to kerning.
                    </p>
                </div>
            </section>
        </div>

        <div>
            <section class="large">
                <div>
                    <h3>Color</h3>
                    <img class="right" src="assets/images/color.jpg"
                         srcset="assets/images/color_smaller.png 500w
                                 assets/images/color.jpg 600w"
                         sizes="(max-width: 600px) 100vw, 50vw"
                     alt="Examples of good and bad color in typography"/>

                    <p>
                        Color is one of the most powerful ways to create impact in text. But, it must be used in relation to the background and other design elements. Clashing or excessive colors can be distracting, messy, and confusing. Effective color use creates contrast, improving legibility and emphasis of text.
                    </p>

                    <p>
                        Color has three main components: value, hue, and saturation. Balancing these ensures that readability and guide attention to key areas. Color can also reinforce a brand's personality and values.
                    </p>
                </div>
            </section>
        </div>

        <div>
            <section class="large">
                <div>
                    <h3>White Space</h3>
                    <img class="left" src="assets/images/macro-whitespace.png" alt="Example of macro whitespace"/>
                    <p>
                        White space, or negative space, is the empty space surrounding text or graphics, such as margins, padding, and line spacing. Though subtle, it largely impacts readability and legibility of text and the page's overall look and feel. When used correctly, white space creates a clean, uncluttered, and visually appealing appearance. It can help focus the user's attention and emphasize important content.
                    </p>
                </div>
            </section>
        </div>

        <div>
            <section class="large">
                <div>
                    <h3>Hierarchy</h3>
                    <img class="right" src="assets/images/hierarchy.webp" alt="Example of hierarchy"/>
                    <p>
                        Use of typefaces, styles, and font sizes help create a hierarchy which organizes text and improves navigation. For example, larger or bold typeface often indicate a header or sub header, making content easier to scan and understand. Elements such as headings, subheadings, lists, and accents further supports this.
                    </p>

                    <p>
                        A clear hierarchy allows users to quickly recognize how information is structured and where it belongs. In other words, they can use their intuition to navigate through your content. 
                    </p>
                </div>
            </section>
        </div>

        <button>Take Quiz!</button> 
    </main>

    <!-- footer -->
    <?php include "assets/inc/footer.php"; ?>

    <script src="assets/js/menu.js"></script>
</body>
</html>