<?php
session_start(); // Start de sessie

// Controleer of de sessie-variabelen voor de antwoorden bestaan. Als ze niet bestaan, redirect dan naar de vragenlijst.
if (!isset($_POST['vraag1'])) {
    header("Location: vragenlijst.php"); // Dit stuurt de gebruiker naar de vragenlijst.php
    exit(); // Zorg ervoor dat de script stopt na de redirect
}

// Verkrijg de huidige datum en tijd
$datumTijd = date("d-m-Y H:i:s");

// Verkrijg de naam uit de sessie
$naam = $_SESSION['naam'];

// krijg de antwoorden uit de sessie
$vraag1 = $_POST['vraag1'];
$vraag2 = $_POST['vraag2'];
$vraag3 = $_POST['vraag3'];
$vraag4 = $_POST['vraag4'];
$vraag5 = $_POST['vraag5'];
$vraag6 = $_POST['vraag6'];
$vraag7 = $_POST['vraag7'];
$vraag8 = $_POST['vraag8'];
$vraag9 = $_POST['vraag9'];
$vraag10 = $_POST['vraag10'];
$vraag11 = $_POST['vraag11'];
$vraag12 = $_POST['vraag12'];
$vraag13 = $_POST['vraag13'];
$vraag14 = $_POST['vraag14'];
$vraag15 = $_POST['vraag15'];
$vraag16 = $_POST['vraag16'];
$vraag17 = $_POST['vraag17'];

// Bereken de totaalscore
$totaalscore = $vraag1 + $vraag2 + $vraag3 + $vraag4 + $vraag5 + $vraag6 + $vraag7 + $vraag8 + $vraag9 + $vraag10 + $vraag11 + $vraag12 + $vraag13 + $vraag14 + $vraag15;

// Bepaal het advies op basis van de totaalscore
if ($totaalscore >= 195) {
    $advies = 'Airpods Max';
    $image = '../Images/Airpods/Airpods_Max.png';
    $link = 'https://www.apple.com/nl/airpods-max/';
} elseif ($totaalscore >= 150) {
    $advies = 'Airpods pro 2';
    $image = '../Images/Airpods/Airpods_Pro_2.png';
    $link = 'https://www.apple.com/nl/airpods-pro/';
} elseif ($totaalscore >= 100) {
    $advies = 'Airpods 4';
    $image = '../Images/Airpods/Airpods4.png';
    $link = 'https://www.apple.com/nl/airpods/';
} else {
    $advies = 'Airpods 4 No Noise Canceling';
    $image = '../Images/Airpods/Airpods4_No_Noise.png';
    $link = 'https://www.apple.com/nl/airpods/';
}
$_SESSION['image'] = $image;
$_SESSION['link'] = $link;

// Definieer de maximale score
$maximaleScore = 195;

// Bereken het verschil
$verschil = $maximaleScore - $totaalscore;

// Sla de naam, totaalscore en advies op in de sessie
$_SESSION['naam'] = $naam;
$_SESSION['totaalscore'] = $totaalscore;
$_SESSION['advies'] = $advies;
?>

<!doctype html>
<!--
Auteur: Anouk Jorritsma, Floris Tinnemans
Aanmaakdatum: 20-3-2025

Inhoud: HTML Project, startpagina
Versie: 1.0
-->
<html>
    <head>
        <title>Apple</title>
        <link rel="icon" type="image/x-icon" href="../Images/Homepage_pictures/favicon-32x32.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/stylesheet.css">
        <link rel="stylesheet" href="../styles/stylesheet2.css">
        <script src="../scripts/scripts.js" defer></script>
    </head>
    <body>
        <header>
            <?php include('../includes/submaps-header.php'); ?>
        </header>
        <main>
            <div class="resultaten">
            <h2>Hello, <?php echo $_SESSION['naam']; ?>!</h2>
            <p>Your total score is: <?php echo $_SESSION['totaalscore']; ?></p>
            <h1>We advise you the : <?php echo $_SESSION['advies']; ?> </h1>
            <h3>For more information on this product, Go to: <a href="<?php echo $_SESSION['link']; ?>" target="_blank"><?php echo $_SESSION['link']; ?></a></h3>
            <p>The current time is: <?php echo $datumTijd; ?></p>
            <p>Difference between the  maximum score: <?php echo $verschil; ?> points.</p>
            <img src="<?php echo $_SESSION['image']; ?>" alt="img" />
            </div>
        </main>
        <?php include('../includes/submaps-footer.php'); ?>
    </body>
</html>
