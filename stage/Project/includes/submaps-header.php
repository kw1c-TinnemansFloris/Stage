<!doctype html>

<!--
Auteur: Anouk Jorritsma
Aanmaakdatum: 17-3-2025

Inhoud: Include navigatie.
Versie: 1.0
-->

<html>
<head>
    <title>
        Apple
    </title>
    <link rel="icon" type="image/x-icon" href="Images/Homepage_pictures/favicon-32x32.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Linkt Css en Html samen -->
    <link rel="stylesheet" href="../styles/stylesheet.css">
    <link rel="stylesheet" href="../styles/stylesheet2.css">
    <!-- Lost een foutmelding op -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Linkt Javascript en Html samen -->
    <script src="../scripts/scripts.js" defer></script>
</head>
<body>
<!-- nav.php en hamburger menu -->
<nav id="topnav">
    <a href="../index.php">
        <img src="../Images/Homepage_pictures/applelogo.png" alt="logo" class="applelogo">
    </a>
    <ul id="buttons">
        <li><a href="https://www.apple.com/iphone/">Iphone</a></li>
        <li><a href="https://www.apple.com/mac/">Mac</a></li>
        <li><a href="https://www.apple.com/airpods/">Airpods</a></li>
        <li><a href="https://www.apple.com/watch/">Watch</a></li>
        <li><a href="https://support.apple.com/?cid=gn-ols-home-hp-tab">Support</a></li>
        <li><a href="vragenlijst.php">Survey</a></li>
    </ul>
    <div id="HamburgerMenu">
        <div id="menuToggle">
            <!--
            A fake / hidden checkbox is used as click reciever,
            so you can use the :checked selector on it.
            -->
            <input type="checkbox" id="menuCheckbox" />

            <!--
            Some spans to act as a hamburger.

            They are acting like a real hamburger,
            not that McDonalds stuff.
            -->
            <span></span>
            <span></span>
            <span></span>

            <!--
            Too bad the menu has to be inside of the button
            but hey, it's pure CSS magic.
            -->
            <ul id="menu">
                <!--
                We can use a label here to close upon click (when doing same page navigation), this
                does require a slight bit of JS.
                -->
                <li>
                    <a href="https://www.apple.com/iphone/">
                        <label for="menuCheckbox" onclick="this.parentNode.click();">Iphone</label>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/mac/">
                        <label for="menuCheckbox" onclick="this.parentNode.click();">Mac</label>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/airpods/">
                        <label for="menuCheckbox" onclick="this.parentNode.click();">Airpods</label>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/watch/">
                        <label for="menuCheckbox" onclick="this.parentNode.click();">Watch</label>
                    </a>
                </li>
                <li>
                    <a href="https://support.apple.com/?cid=gn-ols-home-hp-tab">
                        <label for="menuCheckbox" onclick="this.parentNode.click();">Support</label>
                    </a>
                </li>
                <li>
                    <a href="../submaps/vragenlijst.php">
                        <label for="menuCheckbox" onclick="this.parentNode.click();">Survey</label>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
