<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

$postjson = file_get_contents('php://input');
$dataArray = json_decode($postjson, true);

// echo $dataArray['id'];
// exit;

require_once '../connect.php';

$sql = "SELECT *
        FROM table 
        WHERE id = ".$dataArray['id'];
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

echo json_encode($row);