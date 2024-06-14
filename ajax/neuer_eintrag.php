<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL); # & ~E_NOTICE & ~E_WARNING);

require_once '../connect.php';


// DATENBANK
//----------
// id INT AUTO_INCREMENT PRIMARY KEY,
// datum DATE,
// kmStand FLOAT,
// liter NUMERIC(5,2),
// preis NUMERIC(6,2),
// bemerkung VARCHAR(255)
//
// INT: Geeignet für die Speicherung von ganzen Zahlen wie Zählungen oder IDs.
// FLOAT: Ideal für Zahlen, die Dezimalstellen wie Messungen oder Berechnungen erfordern.
// NUMERIC: Nützlich für Finanzdaten, bei denen Präzision entscheidend ist.

// echo "<pre>";
// print_r($_POST);
// exit;

// POST
//------
// [id] => 1
// [datum] => 2024-06-14
// [bemerkung] => 

$id = mysqli_real_escape_string($link, $_POST['id']);
$datum = mysqli_real_escape_string($link, $_POST['datum']);
$bemerkung = mysqli_real_escape_string($link, $_POST['bemerkung']);

$query = "INSERT INTO `table` (`id`, `datum`, `bemerkung`) 
              VALUES ('', '$id', '$datum', '$bemerkung');";

// die($query);

$send = mysqli_query($link, $query);
if (!$send) {
    echo 'Fehler beim Ausführen der Abfrage: ' . mysqli_error($link);
} else {
    header('Location: ../liste.php');
}


