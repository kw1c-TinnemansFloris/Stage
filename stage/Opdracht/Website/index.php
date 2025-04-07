<!--/*Naam: Floris Tinnemans*!*/-->
<!--/*!*Datum: 20 februari*!*/-->
<!--/*!*Beschrijving: Dit is de hoofdpagina(home) *!*/-->



<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TANDARTS DEN BOSCH</title>

    <!-- Externe stylesheets gekoppeld -->
    <link rel="stylesheet" href="styles/stylesheet.css">
    <link rel="stylesheet" href="styles/algemeen.css">
</head>
<body>
<header>
    <div class="logo">
        <!-- Logo van de website -->
        <img src="images/logo.png" alt="logo">
    </div>
    <nav>
        <!-- PHP-bestand voor navigatie wordt ingeladen -->
        <?php include 'subpaginas/navigatie.php'; ?>
    </nav>
    <div class="startfoto">
        <!-- Afbeelding onder de header -->
        <img src="images/Startfoto.jpg" alt="Startfoto">
    </div>
</header>
<main class="container">
    <h1>TANDARTS DEN BOSCH</h1>

    <!-- Korte beschrijving van de tandartspraktijk -->
    <p class="description">
        Uw tandarts in Den Bosch e.o. voor reguliere tandheelkunde en implantaten
    </p>

    <p>
        Wil jij weten of je tandenverzorging op de juiste manier gebeurt? Doe de zelftest en ontdek het door op de knop hiernaast te drukken!
        <!-- Link naar de zelftestpagina -->
        <a href="subpaginas/zelftest.php">
            <button>Zelftest</button>
        </a>
    </p>

    <div class="articles">
        <article class="article">
            <h2>De Belang van Regelmatige Tandartsbezoeken</h2>
            <p>
                <!-- Informatieve tekst over tandartsbezoeken -->
                Veel mensen gaan pas naar de tandarts als ze pijn hebben, maar regelmatige controles zijn essentieel voor een gezond gebit. Tijdens een controle kan de tandarts problemen vroegtijdig opsporen, zoals beginnende gaatjes of tandvleesontstekingen. Voorkomen is altijd beter dan genezen, en een periodieke reiniging helpt tandplak en tandsteen te verwijderen. Door minimaal twee keer per jaar een bezoek te brengen, houd je je gebit gezond en voorkom je grotere problemen in de toekomst.
            </p>
        </article>

        <article class="article">
            <h2>Tandheelkundige Implantaten: Wat Je Moet Weten</h2>
            <p>
                <!-- Informatieve tekst over tandimplantaten -->
                Een mooie glimlach begint met goede mondverzorging. Poets je tanden minimaal twee keer per dag met een fluoride tandpasta en vervang je tandenborstel elke drie maanden. Gebruik dagelijks flosdraad of tandenstokers om voedselresten en tandplak tussen je tanden te verwijderen. Vermijd overmatig koffie-, thee- en rode wijngebruik, want deze drankjes kunnen verkleuringen veroorzaken. Als je toch een extra boost wilt, kun je overwegen een professionele gebitsreiniging of whitening-behandeling bij de tandarts te laten doe
            </p>
        </article>

        <article class="article">
            <h2>Hoe je Tandvleesgezondheid te Verbeteren</h2>
            <p>
                <!-- Informatieve tekst over tandvleesgezondheid -->
                Elektrische tandenborstels verwijderen meer tandplak dan een handtandenborstel en helpen beter bij het voorkomen van tandvleesontstekingen. De roterende of vibrerende bewegingen zorgen ervoor dat tandplak effectiever wordt weggepoetst, zelfs op moeilijk bereikbare plekken. Daarnaast helpt een ingebouwde timer ervoor te zorgen dat je lang genoeg poetst. Kies een borstelkop die bij jouw gebit past en combineer het poetsen met een goede mondhygiëne voor een optimaal resultaat.
            </p>
        </article>

        <article class="article">
            <h2>Een Gezonde Glimlach</h2>
            <p>
                <!-- Informatieve tekst over tandvleesgezondheid -->
                Een Gezonde Glimlach: Het Belang van Tandheelkundige Zorg

                Een stralende glimlach is niet alleen een teken van schoonheid, maar ook van een goede gezondheid. Regelmatige tandheelkundige zorg is essentieel om je tanden en tandvlees in topconditie te houden. In dit artikel bespreken we waarom mondgezondheid zo belangrijk is en hoe je zelf bij kunt dragen aan een gezond gebit.
    </div>
</main>
</body>
</html>
