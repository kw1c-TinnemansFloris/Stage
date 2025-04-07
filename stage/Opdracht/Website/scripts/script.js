/*Naam: Floris Tinnemans*!*/
/*!*Datum: 20 februari*!*/
/*!*Beschrijving: Dit is de javascript pagina voor de zelftest *!*/

// Variabele om de score bij te houden
let score = 0;

function updateScore(points)
{
    // Tel de toegevoegde punten op bij de score
    score += points;
    document.getElementById("score").textContent = "Je score: " + score + " punten";  // Werk de score in de UI bij
    // Variabele om het advies op te slaan
    let advies = "";

    // Controleer de score en geef passend advies
    if (score > 80) {
        advies = "Je verzorgt je gebit uitstekend!";
    } else if (score > 60 && score <= 80) {
        advies = "Je verzorgt je gebit goed, maar er zijn nog wat verbeterpunten.";
    } else if (score > 20 && score <= 60) {
        advies = "Je verzorgt je gebit matig. Het is tijd om advies te vragen bij de tandarts.";
    } else {
        advies = "Je verzorgt je gebit niet goed. Ga naar de tandarts voor advies.";
    }

    // Toon het advies op de pagina
    document.getElementById("advice").innerHTML = "<h2>Advies:</h2><p>" + advies + "</p>";
}
