<?php
// Verbindung zur Datenbank

$hostname = '';
$username = '';
$password = '';
$database = '';

$link = mysqli_connect($hostname, $username, $password);
mysqli_select_db($link, $database);
