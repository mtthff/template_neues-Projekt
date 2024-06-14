<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL); # & ~E_NOTICE & ~E_WARNING);

require_once '../connect.php';

// echo "<pre>";
// print_r($_POST);
// exit;

// POST
//------
// [id] => 22
 

$id = mysqli_real_escape_string($link, $_POST['id']);
$datum = mysqli_real_escape_string($link, $_POST['datum']);
$bemerkung = mysqli_real_escape_string($link, $_POST['bemerkung']);

$query = "UPDATE `table` SET 
            `datum` = '$datum', 
            `bemerkung` = '$bemerkung' 
        WHERE `table`.`id` = $id"; 

// die($query);

$send = mysqli_query($link, $query);
if (!$send) {
    echo 'Fehler beim Ausführen der Abfrage: ' . mysqli_error($link);
} else {
    header('Location: ../liste.php');
}
