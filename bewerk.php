<?php
?>
<?php
include "include/function.php";
StartConnection("eindopdracht");
$id = $_GET['id'];

if(isset($_POST['submit'])) {
    ExecuteQuery("UPDATE klanten SET 
                  naam='{$_POST['naam']}', 
                  adres='{$_POST['adres']}', 
                  postcode='{$_POST['postcode']}', 
                  woonplaats='{$_POST['woonplaats']}', 
                  email='{$_POST['email']}', 
                  telefoon='{$_POST['telefoon']}' 
                  WHERE id=$id");
    header("Location: bekijk.php");
    exit();
}

$row = ExecuteSelectQuery("SELECT * FROM nawdb WHERE id=$id")[0];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAW Bewerken</title>
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
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="Naw.php">NAW Gegevens</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h1 class="h3 mb-0">✏️ NAW Bewerken</h1>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Naam:</label>
                    <input type="text" name="naam" class="form-control" value="<?php echo $row['naam']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Adres:</label>
                    <input type="text" name="adres" class="form-control" value="<?php echo $row['adres']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Postcode:</label>
                    <input type="text" name="postcode" class="form-control" value="<?php echo $row['postcode']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Woonplaats:</label>
                    <input type="text" name="woonplaats" class="form-control" value="<?php echo $row['woonplaats']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Telefoon:</label>
                    <input type="text" name="telefoon" class="form-control" value="<?php echo $row['telefoon']; ?>" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">💾 Bijwerken</button>
                <a href="Naw.php" class="btn btn-secondary">❌ Annuleer</a>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

