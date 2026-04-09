<?php
?>
<?php
session_start();
include "include/function.php";
StartConnection("eindopdracht");

// Controleer of ID bestaat en een getal is
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
$id = $_GET['id'];

// Eerst ophalen wat er verwijderd gaat worden (voor logging)
$data = ExecuteSelectQuerySafe("SELECT * FROM klanten WHERE id = ?", [$id]);

if(!empty($data)) {
$verwijderde_data = $data[0];

// VEILIG verwijderen met prepared statement
ExecuteQuerySafe("DELETE FROM klanten WHERE id = ?", [$id]);

// AVG: Log de verwijdering (wie, wat, wanneer)
$gebruiker = $_SERVER['REMOTE_ADDR'] ?? 'onbekend';
$tijd = date('Y-m-d H:i:s');
$log = "[$tijd] Verwijderd door: $gebruiker - ID: $id - Naam: " . $verwijderde_data['naam'] . "\n";

}
}

// Ga terug naar hoofdpagina
header("Location: bekijken.php");
exit();
?>

