<!doctype html>

<!--
Auteur: Anouk Jorritsma, Floris Timmermans
Aanmaakdatum: 20-3-2025

Inhoud: HTML Project, startpagina.
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
        <link rel="stylesheet" href="styles/stylesheet.css">
        <link rel="stylesheet" href="styles/stylesheet2.css">
        <!-- Lost een foutmelding op -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Linkt Javascript en Html samen -->
        <script src="scripts/scripts.js" defer></script>
    </head>
    <body>
        <header>
            <!-- Include de navigatiebalk en hamburger menu-->
            <?php include('includes/home-header.php'); ?>
        </header>
        <main>
            <!-- iPhone 16 Pro -->
            <div class="background-container">
                <div class="Iphone16PRO">
                    <h1 class="Text-Iphone">iPhone 16 Pro</h1>
                    <h2>Hello, Apple Intelligence.</h2>
                    <button class="ButtonHome" onclick="window.location.href='https://www.apple.com/iphone-16-pro/'">Learn more</button>
                    <button class="ButtonHome" onclick="window.location.href='https://www.apple.com/shop/buy-iphone/iphone-16-pro'">Buy</button>
                </div>
            </div>
            <!-- iPhone 16 -->
            <div class="background-container2">
                <div>
                    <h1 class="Text-Iphone">iPhone 16</h1>
                    <h2>Hello, Apple Intelligence.</h2>
                    <button class="ButtonHome" onclick="window.location.href='https://www.apple.com/iphone-16/'">Learn more</button>
                    <button class="ButtonHome" onclick="window.location.href='https://www.apple.com/shop/buy-iphone/iphone-16'">Buy</button>
                </div>
            </div>
            <!-- Apple Watch -->
            <div class="background-container3">
                <div>
                    <img src="Images/AppleWatch/promo_logo_apple_watch_series_10__qk5vaa89vnm2_large.png" alt="Apple Watch">
                    <h2>Thinstant classic.</h2>
                    <button class="ButtonHome" onclick="window.location.href='https://www.apple.com/apple-watch-series-10/'">Learn more</button>
                    <button class="ButtonHome" onclick="window.location.href='https://www.apple.com/shop/buy-watch/apple-watch'">Buy</button>
                </div>
            </div>
            <!-- Macbook Air -->
            <div class="background-wrapper">
                <div class="background-container4">
                    <div>
                        <h1>Macbook Air</h1>
                        <p>Sky high performance with M4.</p>
                        <button class="ButtonHome2" onclick="window.location.href='https://www.apple.com/macbook-air/'">Learn more</button>
                        <button class="ButtonHome2" onclick="window.location.href='https://www.apple.com/shop/buy-mac/macbook-air'">Buy</button>
                    </div>
                </div>
                <!-- iPad -->
                <div class="background-container5">
                    <div>
                        <img id="ipadpng" src="Images/Ipad/hero_logo_ipad_air__ejixj9pic0uq_small.png" alt="iPad">
                        <p>Now supercharged by the M3 chip.</p>
                        <button class="ButtonHome2" onclick="window.location.href='https://www.apple.com/ipad-air//'">Learn more</button>
                        <button class="ButtonHome2" onclick="window.location.href='https://www.apple.com/shop/buy-ipad/ipad-air'">Buy</button>
                    </div>
                </div>
            </div>
            <!-- Trade-In -->
            <div class="background-wrapper2">
                <div class="background-container6">
                    <div>
                        <img id="ipadpng" src="Images/Trade_In/promo_logo_iphone_tradein__7y3gtai5az66_small.png" alt="Trade-In">
                        <p>Get $170-$630 in credit when you trade in iPhone 12 or higher.</p>
                        <button class="ButtonHome2" onclick="window.location.href='https://www.apple.com/shop/trade-in/'">Get your estimate</button>
                    </div>
                </div>
                <!-- Apple Card -->
                <div class="background-container7">
                    <div>
                        <img id="ipadpng" src="Images/AppleCard/logo__dcojfwkzna2q_medium.png" alt="Apple Card">
                        <p>Get up to 3% Daily Cashback with every purchase.</p>
                        <button class="ButtonHome2" onclick="window.location.href='https://www.apple.com/apple-card//'">Learn more</button>
                        <button class="ButtonHome2" onclick="window.location.href='https://card.apple.com/apply/application?referrer=cid%3Dapy-200-10000036&start=false'">Apply now</button>
                    </div>
                </div>
            </div>
            <!-- iPhone 16 Pro -->
            <div class="background-container8">
                <div class="Iphone16PRO2">
                    <h1 class="Text-Iphone2">Survey</h1>
                    <h2 class="Text-Airpods">Make our survey, and find out what Airpods are the best for you!</h2>
                    <button class="ButtonHome" onclick="window.location.href='submaps/vragenlijst.php'">Go!</button>
                </div>
            </div>
        </main>
    <!--Footer-->
        <?php include('includes/home-footer.php'); ?>
    </body>
</html>
