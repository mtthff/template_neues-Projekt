<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL); # & ~E_NOTICE & ~E_WARNING);

require_once 'connect.php';

?>
<!doctype html>
<html lang="de" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Matthias Hoffmann">
    <title>Projekttitel</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

    <main class="container">
        <div class="bg-body-tertiary px-3 rounded mt-3">
            <div class="my-3 row">
                ...
            </div>
        </div>
    </main>


    <!-- Navigation -->
    <nav class="navbar fixed-bottom navbar-expand navbar-dark bg-secondary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="#">
                            <img src="assets/img/looks_one.svg" alt="Eingabe">
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="liste.php">
                            <img src="assets/img/looks_two.svg" alt="Liste">
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="admin.php">
                            <img src="assets/img/looks_3_48dp.svg" alt="Suche">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="assets/js/frameworks/bootstrap.min.js"></script>
    <script type="module" src="assets/js/main.js"></script>
</body>

</html>