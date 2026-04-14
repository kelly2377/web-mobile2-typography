<nav id="primary-nav" aria-label="Primary">
    <h1 class="nav-title"><?php echo $currentPage; ?></h1>
    <button id="menu-button" type="button" aria-expanded="false" aria-controls="primary-nav-list">
        Menu
    </button>
    <ul id="primary-nav-list" class="main-menu">
        <li <?php if ($currentPage == "Typography") { echo 'class="is-current"'; } ?>>
            <a href="index.html">Home</a>
        </li>

        <li>
            <button type="button" class="submenu-toggle" aria-expanded="false" aria-controls="submenu-history">
                History
            </button>
            <ul id="submenu-history" class="submenu">
                <li><a href="#">Origins & Evolution</a></li>
                <li <?php if ($currentPage == "Modern Research & Discoveries") { echo 'class="is-current"'; } ?>><a href="modern-research-discoveries.php">Modern Research & Discoveries</a></li>
            </ul>
        </li>

        <li>
            <button type="button" class="submenu-toggle" aria-expanded="false" aria-controls="submenu-fundamentals">
                Fundamentals
            </button>
            <ul id="submenu-fundamentals" class="submenu">
                <li <?php if ($currentPage == "Modern Research & Discoveries") { echo 'class="is-current"'; } ?>>><a href="typographical_elements.php">Typographic Elements</a></li>
                <li <?php if ($currentPage == "Modern Research & Discoveries") { echo 'class="is-current"'; } ?>>><a href="principles.php">Principles of Typography</a></li>
            </ul>
        </li>


        <li>
            <button type="button" class="submenu-toggle" aria-expanded="false" aria-controls="submenu-uses">
                Practical Uses
            </button>
            <ul id="submenu-uses" class="submenu">
                <li><a href="#">Applications</a></li>
                <li><a href="#">Good vs Bad Uses of Typography</a></li>
            </ul>
        </li>

        <li>
            <a href="#">Typographers</a>
        </li>
    </ul>
</nav>