<?php
$startDate = '';
$endDate = '';

if ((isset($_GET['startDate'])) && (isset($_GET['endDate']))){
    $startDate = $_GET['startDate'];
    $endDate = $_GET['endDate'];
}
?>

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Partie 6 - Exercice 3</title>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <a name="submitParam" id="submitParam" class="btn btn-primary m-1" href="index.php?startDate=01/09/2019&endDate=17/03/2020" role="button">Envoi des paramètres</a>
            <a name="submitParam" id="submitParam" class="btn btn-secondary m-1" href="index.php" role="button">Retour INDEX</a>
        </div>
        <div>
            <p class="text-center"><?= $startDate ?></p>
        <p class="text-center"><?= $endDate ?></p>
    </div>
    </div>





        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>