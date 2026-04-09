<?php
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - NAW Systeem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">📋 NAW Systeem</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bekijk.php">klanten Gegevens</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <div class="card shadow text-center">
        <div class="card-header bg-dark text-white">
            <h1 class="h3 mb-0">🏠 Welkom bij het klanten Systeem</h1>
        </div>
        <div class="card-body">
            <p class="lead">Dit systeem beheert klanten-gegevens (Naam, Adres, Woonplaats).</p>
            <p>Je kunt klanten-gegevens bekijken, toevoegen, bewerken en verwijderen.</p>
            <hr>
            <a href="bekijk.php" class="btn btn-success btn-lg">Bekijk alle NAW gegevens</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

