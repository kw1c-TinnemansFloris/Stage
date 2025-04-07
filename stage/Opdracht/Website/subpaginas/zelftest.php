<!--/*Naam: Floris Tinnemans*!*/-->
<!--/*!*Datum: 20 februari*!*/-->
<!--/*!*Beschrijving: Dit is de zelftest pagina *!*/-->

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zelftest Mondgezondheid</title>

    <!-- Externe CSS en JavaScript gekoppeld -->
    <link rel="stylesheet" href="../styles/algemeen.css">
    <link rel="stylesheet" href="../styles/zelftest.css">
    <script src="../scripts/script.js"></script>
</head>

<body>
<header>
    <!-- Logo van de website -->
    <img class="logo" src="../images/logo.png" alt="Logo">
    <nav>
        <!-- PHP-bestand voor navigatie wordt geladen -->
        <?php include 'navigatie2.php'; ?>
    </nav>
</header>

<h1>Zelftest Mondzorg</h1>

<div id="questionnaire">
    <!-- Vraag 1: Hoeveelheid tandenpoetsen -->
    <div>
        <p>1. Hoe vaak poets je per dag?</p>
        <button onclick="updateScore(10)">2 keer per dag</button>
        <button onclick="updateScore(5)">1 keer per dag</button>
        <button onclick="updateScore(-10)">Minder dan 1 keer per dag</button>
    </div>

    <!-- Vraag 2: gebitsreiniging -->
    <div>
        <p>2. Gebruik je na iedere maaltijd of minimaal 1 keer per dag iets om je gebit extra te reinigen?</p>
        <button onclick="updateScore(10)">Rager</button>
        <button onclick="updateScore(5)">Tandenstoker</button>
        <button onclick="updateScore(-5)">Niks</button>
    </div>

    <!-- Vraag 3: Bezoek aan mondhygiëniste -->
    <div>
        <p>3. Ga je ieder halfjaar naar een mondhygiëniste om je tandplak te laten verwijderen?</p>
        <button onclick="updateScore(10)">Ja</button>
        <button onclick="updateScore(5)">Minder dan 1x per jaar</button>
        <button onclick="updateScore(0)">Nee</button>
    </div>

    <!-- Vraag 4: Elektrische tandenborstel -->
    <div>
        <p>4. Gebruik je een elektrische tandenborstel?</p>
        <button onclick="updateScore(10)">Ja</button>
        <button onclick="updateScore(5)">Nee</button>
    </div>

    <!-- Vraag 5: Tandpasta met fluoride -->
    <div>
        <p>5. Gebruik je een tandpasta met fluoride?</p>
        <button onclick="updateScore(10)">Ja</button>
        <button onclick="updateScore(5)">Nee</button>
    </div>

    <!-- Vraag 6: Slechte adem -->
    <div>
        <p>6. Heb je wel eens last van een stinkende adem?</p>
        <button onclick="updateScore(10)">Nee</button>
        <button onclick="updateScore(0)">Ja</button>
    </div>

    <!-- Vraag 7: Gebruik van een tongschraper -->
    <div>
        <p>7. Gebruik je wel eens een tongschraper?</p>
        <button onclick="updateScore(10)">Ja</button>
        <button onclick="updateScore(5)">Nee</button>
    </div>

    <!-- Vraag 8: Bloedend tandvlees -->
    <div>
        <p>8. Heb je weleens last van bloedend tandvlees?</p>
        <button onclick="updateScore(10)">Nee</button>
        <button onclick="updateScore(-10)">Ja</button>
    </div>

    <!-- Vraag 9: Grondig en lang genoeg poetsen -->
    <div>
        <p>9. Poets je minimaal 2 minuten en werk je alles grondig af?</p>
        <button onclick="updateScore(10)">Ja</button>
        <button onclick="updateScore(5)">Nee</button>
    </div>

    <!-- Score en advies -->
    <div>
        <p id="score"></p>
        <div id="advice" class="advice"></div>
    </div>
</div>
</body>
</html>
