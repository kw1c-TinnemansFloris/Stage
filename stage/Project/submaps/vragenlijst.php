<!--
Auteur: Anouk Jorritsma, Floris Tinnemans
Aanmaakdatum: 20-3-2025

Inhoud: HTML Project, startpagina.
Versie: 1.0
-->


<?php
session_start(); // Start de sessie

// Verkrijg het huidige uur
$uur = date("H");

// Bepaal de begroeting op basis van het uur
if ($uur < 12) {
    $begroeting = "Good morning!";
} elseif ($uur < 18) {
    $begroeting = "Good afternoon!";
} else {
    $begroeting = "Good evening!";
}

if (isset($_POST['naam'])) {
    $_SESSION['naam'] = $_POST['naam'];
}

?>

<!doctype html>
<html>
    <head>
        <title>
            Apple
        </title>
        <link rel="icon" type="image/x-icon" href="../Images/Homepage_pictures/favicon-32x32.png">
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
    <header>
        <!-- Include de navigatiebalk en hamburger menu -->
        <?php include('../includes/submaps-header.php'); ?>
    </header>
    <h1 id="vragenlijst">
        Survey
    </h1>
        <main>
            <div  class="main-div2">
                <h2 id="Good"><?php echo $begroeting; ?></h2>
                <h2 class="Text-vragenlijst">
                    Airpods
                </h2>
                <p class="Text-vragenlijst">
                    Choosing the right AirPods can make a big difference in your listening experience. Whether you need them for work, workouts, or everyday use, each model offers unique features like Noise Cancelling, Spatial Audio, and a customizable fit.
                    <br><br>
                    Take our short survey to find out which AirPods best suit your needs. Answer a few simple questions, and we’ll help you discover the perfect match.
                    <br><br>
                    Here below we like you to enter your name before starting with the questions.
                </p>
                <form  class="name-input" method="POST" action="vragenlijst.php">
                    Name: <input type="text" name="naam" required>
                    <input type="submit" value="Send">
                </form>
            </div>
        <!--  Form over de airpods  -->
            <form method="POST" action="resultaat.php">
                <!--  Vraag blok  -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 1:</p>
                    <p>How do you primarily use your headphones?</p>
                    <input type="radio" name="vraag1" value="15" required checked="checked"> For music and high-quality sound <br>
                    <input type="radio" name="vraag1" value="10">For work calls and podcasts <br>
                    <input type="radio" name="vraag1" value="5">For casual listening and everyday use <br>
                    <input type="radio" name="vraag1" value="5"> For commuting or travel with noise cancellation<br>
                </div>

                <!--  Vraag blok  -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 2:</p>
                    <p>How important is noise cancellation to you?</p>
                    <input type="radio" name="vraag2" value="15" required checked="checked"> Absolutely necessary<br>
                    <input type="radio" name="vraag2" value="10"> Nice to have, but not a must  <br>
                    <input type="radio" name="vraag2" value="5"> Not important <br>
                </div>

                <!--  Vraag blok  -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 3:</p>
                    <p>Do you prefer over-ear or in-ear headphones?</p>
                    <input type="radio" name="vraag3" value="15" required checked="checked"> Over-ear<br>
                    <input type="radio" name="vraag3" value="10"> In-ear <br>
                </div>

                <!--  Vraag blok  -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 4:</p>
                    <p>How much do you value sound quality?</p>
                    <input type="radio" name="vraag4" value="15" required checked="checked"> It’s the most important factor <br>
                    <input type="radio" name="vraag4" value="10"> I want good sound but also convenience <br>
                    <input type="radio" name="vraag4" value="5"> Decent sound is fine for me <br>
                </div>

                <!--  Vraag blok  -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 5:</p>
                    <p>How much do you care about battery life?</p>
                    <input type="radio" name="vraag5" value="15" required checked="checked"> I want the longest possible battery life <br>
                    <input type="radio" name="vraag5" value="10"> Long enough for daily use, but not my biggest concern <br>
                    <input type="radio" name="vraag5" value="5"> As long as it lasts a few hours, I’m good <br>
                </div>

                <!--  Vraag blok  -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 6:</p>
                    <p>Will you use them for working out or sports?</p>
                    <input type="radio" name="vraag6" value="10" required checked="checked">Yes, I need sweat resistance<br>
                    <input type="radio" name="vraag6" value="5"> No, I just use them normally <br>
                </div>

                <!--  Vraag blok  -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 7:</p>
                    <p>Do you make a lot of calls or use them for meetings?</p>
                    <input type="radio" name="vraag7" value="15" required checked="checked"> Yes, I need great microphone quality <br>
                    <input type="radio" name="vraag7" value="10"> Sometimes, but it’s not my priority <br>
                    <input type="radio" name="vraag7" value="5"> Rarely, I mainly use them for music or videos <br>
                </div>

                <!--  Vraag blok  -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 8:</p>
                    <p>How important is a comfortable fit for long hours?</p>
                    <input type="radio" name="vraag8" value="15" required checked="checked"> Extremely important <br>
                    <input type="radio" name="vraag8" value="5"> Somewhat important <br>
                </div>

                <!--  Vraag blok  -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 9:</p>
                    <p>What is your budget like?</p>
                    <input type="radio" name="vraag9" value="15" required checked="checked"> I want the best, no matter the price <br>
                    <input type="radio" name="vraag9" value="10"> I want great features but not the most expensive option <br>
                    <input type="radio" name="vraag9" value="5"> I need a more budget-friendly option <br>
                </div>

                <!--  Vraag blok  -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 10:</p>
                    <p>Do you travel frequently and need headphones for flights or commutes?</p>
                    <input type="radio" name="vraag10" value="15" required checked="checked"> Yes, I need strong noise cancellation <br>
                    <input type="radio" name="vraag10" value="10"> Sometimes, but it’s not a must <br>
                    <input type="radio" name="vraag10" value="5"> No, I just use them at home or nearby <br>
                </div>

                <!--  Vraag blok  -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 11:</p>
                    <p>How much do you value a sleek, compact design?</p>
                    <input type="radio" name="vraag11" value="10" required checked="checked"> I prefer a large, premium look <br>
                    <input type="radio" name="vraag11" value="5"> I want something small and pocket-friendly <br>
                </div>

                <!--  Vraag blok  -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 12:</p>
                    <p>How important is spatial audio and immersive sound?</p>
                    <input type="radio" name="vraag12" value="10" required checked="checked"> Very important! I love immersive sound <br>
                    <input type="radio" name="vraag12" value="5"> Nice to have but not a must <br>
                    <input type="radio" name="vraag12" value="5"> I don’t care about it  <br>
                </div>

                <!--  Vraag blok  -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 13:</p>
                    <p>Do you listen to music at high volume often?</p>
                    <input type="radio" name="vraag13" value="10" required checked="checked"> Yes, I want powerful sound <br>
                    <input type="radio" name="vraag13" value="5"> Sometimes, but I need a balance <br>
                    <input type="radio" name="vraag13" value="5"> No, I listen at normal levels <br>
                </div>

                <!--  Vraag blok  -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 14:</p>
                    <p>Do you prefer automatic ear detection and touch controls?</p>
                    <input type="radio" name="vraag14" value="10" required checked="checked"> Yes, I love smart features <br>
                    <input type="radio" name="vraag14" value="5"> It’s not a must, but nice to have <br>
                    <input type="radio" name="vraag14" value="5"> I don’t really care <br>
                </div>

                <!--  Vraag blok  -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 15:</p>
                    <p>Do you need strong wind resistance for outdoor use?</p>
                    <input type="radio" name="vraag15" value="10" required checked="checked"> Yes, I use them outside a lot <br>
                    <input type="radio" name="vraag15" value="5"> Not really, I use them indoors mostly <br>
                </div>

                <!--  Meerkeuze Vraag  -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 16:</p>
                    <p>What features are most important to you in headphones?</p>
                    <input type="checkbox" name="vraag16[]" value="sound" required checked="checked"> High-quality sound <br>
                    <input type="checkbox" name="vraag16[]" value="noise_cancellation"> Noise cancellation <br>
                    <input type="checkbox" name="vraag16[]" value="comfort"> Comfort for long hours <br>
                    <input type="checkbox" name="vraag16[]" value="wireless"> Wireless connectivity <br>
                </div>

                <!-- Vraag 17 invoer vraag -->
                <div class="main-div">
                    <p class="vragen_kleur">Question 17:</p>
                    <p>Which feature would you give up last if you had to choose?</p>
                    <p>1: Price to performance </p>
                    <p>2: Long battery life</p>
                    <p>3: In ear </p>
                    <!--   De input wat in de vak kan   -->
                    type="number"
                            id="preferenceText"
                            name="vraag17"
                            min="1"
                            max="3"
                            required
                    <input>
                    <button type="submit" id="Versturen">Submit</button> <!-- Dit is de submit-knop -->
                </div>
            </form>
        </main>
    <!--Footer-->
    <?php include('../includes/submaps-footer.php'); ?>
    </body>
</html>