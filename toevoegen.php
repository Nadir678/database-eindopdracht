<?php
/*
 *
 *
 *
 */
?>
<?php

session_start();
include "include/function.php";
StartConnection("eindopdracht");

// Controleer of formulier is verzonden
if (isset($_POST['submit'])) {
    // Input valideren en opschonen
    $naam = htmlspecialchars(trim($_POST['naam']));
    $adres = htmlspecialchars(trim($_POST['adres']));
    $postcode = htmlspecialchars(trim($_POST['postcode']));
    $woonplaats = htmlspecialchars(trim($_POST['woonplaats']));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $telefoon = htmlspecialchars(trim($_POST['telefoon']));

    // Controleer of alle velden geldig zijn
    if ($naam && $adres && $postcode && $woonplaats && $email && $telefoon) {
        // VEILIGE INSERT met prepared statement
        ExecuteQuerySafe(
            "INSERT INTO klanten (naam, adres, postcode, woonplaats, email, telefoon) 
             VALUES (?, ?, ?, ?, ?, ?)",
            [$naam, $adres, $postcode, $woonplaats, $email, $telefoon]
        );

        // AVG: Log de toevoeging
        $tijd = date('Y-m-d H:i:s');
        $log = "[$tijd] Toegevoegd: $naam, $woonplaats\n";


        header("Location: bekijk.php");
        exit();
    } else {
        $error = "Ongeldige invoer. Controleer alle velden.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>klant Toevoegen</title>
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav>
    <a href="index.php">Home</a>
    <a href="bekijk.php">Bekijken</a>
</nav>
<main>
    <h1>➕ klant Toevoegen</h1>
    <?php if(isset($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST">
        <label>Naam:</label>
        <input type="text" name="naam" required>
        <label>Adres:</label>
        <input type="text" name="adres" required>
        <label>Postcode:</label>
        <input type="text" name="postcode" required>
        <label>Woonplaats:</label>
        <input type="text" name="woonplaats" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Telefoon:</label>
        <input type="text" name="telefoon" required>
        <br>
        <input type="submit" name="submit" value="Opslaan">
        <a href="bekijk.php">Annuleer</a>
    </form>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
