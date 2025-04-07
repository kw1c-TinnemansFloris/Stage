// Auteur: Anouk Jorritsma, Floris Timmermans
// Aanmaakdatum: 20-3-2025
//
// Inhoud: JavaScript apple page.

// Automatisch datum verranderen bij watermerk
var jaarTal = new Date().getFullYear();
document.querySelector('.jaarTal').innerHTML = jaarTal;


// Zorgt ervoor dat er alleen bij de open vraag, 1, 2 of 3 kan.
document.addEventListener("DOMContentLoaded", function ()
{
    // Maakt nieuwe variabele aan
    var input = document.getElementById("preferenceText");
    var error = document.getElementById("error-message");

    // Maakt dat je ECHT alleen 1, 2 of 3 kan invullen
    input.addEventListener("input", function ()
    {
        var allowedValues = ["1", "2", "3"];

        if (!allowedValues.includes(input.value))
        {
            error.style.display = "block";
            input.value = "";
        } else
        {
            error.style.display = "none";
        }
    });

    // Voorkom plakken van foute waarde
    input.addEventListener("paste", function (e)
    {
        e.preventDefault();
    });
});









