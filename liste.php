<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL); # & ~E_NOTICE & ~E_WARNING);

require_once 'connect.php';


// echo "<pre>";
// print_r(...);
// exit;

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
    <!-- <meta name="theme-color" content="#712cf9"> -->

</head>

<body>

    <!-- Tabelle -->
    <main class="container">
        <div class="bg-body-tertiary pt-1 px-3 pb-5 rounded mt-3 mb-5">
            <div class="my-3 row">
                <span class="h1 col">Liste</span>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>...</td>
                            <td><img class="editEintrag" data-id="" src="assets/img/edit_24dp.svg" alt="edit"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="myModalLabel">Modaltitel</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Speichern</button>
                </div>
            </div>
        </div>
    </div>


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
    <script src="assets/js/liste.js"></script>
</body>

</html>