 README – Wat mijn database doet
Wat mijn database doet
Mijn project gebruikt een MySQL‑database om klantgegevens op te slaan en te beheren. De database bevat één tabel waarin alle informatie over klanten wordt bewaard, zoals naam, adres, postcode, woonplaats, e‑mail en telefoonnummer.

De database wordt gebruikt door verschillende PHP‑pagina’s die samen een volledig CRUD‑systeem vormen. CRUD betekent: gegevens kunnen toevoegen, bekijken, aanpassen en verwijderen.

Create – Nieuwe klant toevoegen
In het bestand toevoegen.php kan een gebruiker een formulier invullen om een nieuwe klant aan te maken.
De ingevoerde gegevens worden gecontroleerd en daarna veilig opgeslagen in de database met een INSERT‑query.

Read – Klanten bekijken
In bekijk.php worden alle klanten uit de database opgehaald en weergegeven in een overzicht.
Hier kan de gebruiker:

alle klanten zien

naar de bewerkpagina gaan

een klant verwijderen

De gegevens worden opgehaald met een SELECT‑query.

Update – Klant bewerken
In bewerk.php kan een bestaande klant worden aangepast.
De pagina haalt eerst de huidige gegevens op uit de database.
Na het opslaan worden de nieuwe gegevens bijgewerkt met een UPDATE‑query.

Delete – Klant verwijderen
In verwijder.php kan een klant worden verwijderd op basis van het ID.
De klant wordt uit de database verwijderd met een DELETE‑query.
Daarnaast wordt de verwijdering opgeslagen in een logbestand voor administratie.

Veiligheid
Alle database‑acties worden uitgevoerd met prepared statements.
Dit voorkomt SQL‑injectie en zorgt ervoor dat invoer veilig wordt verwerkt.
Daarnaast worden gegevens ontsmet voordat ze op de website worden getoond.