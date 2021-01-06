<?php
// Définit les informations de localisation. 
setlocale(LC_TIME, ['fr_FR.utf8', 'fra']);

// Initialisation des variables.
$startDate = 2000;
$endDate = 2038;
$daysInMonth = 0;
$firstDayInMonth = 0;
$extraCases = 0;

// Tableau qui contient tous les mois de l'année.
$months = [
    'Janvier',
    'Février',
    'Mars',
    'Avril',
    'Mai',
    'Juin',
    'Juillet',
    'Août',
    'Septembre',
    'Octobre',
    'Novembre',
    'Décembre'
];

$days = [
    'Lundi',
    'Mardi',
    'Mercredi',
    'Jeudi',
    'Vendredi',
    'Samedi',
    'Dimanche'
];

var_dump($_POST);

// Variable qui va récupérer les années à partir de l'"input" de sélection.
if (isset($_POST['year'], $_POST['month'])) {
    $nbYear = $_POST['year'];
    // Recherche dans un tableau la clé associée à la première valeur.
    $month = array_search($_POST['month'], $months) + 1;

    // Retourne le nombre de jours dans un mois, pour une année et un calendrier donné.
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $nbYear);
    // Formate une date/heure locale avec la configuration locale.
    $firstDayInMonth =  strftime("%u", strtotime($month . "/01/" . $nbYear));
    var_dump($daysInMonth);
    var_dump($firstDayInMonth);

    if ((($daysInMonth + $firstDayInMonth - 1) % 7) != 0) {
        $extraCases = 7 - (($daysInMonth + $firstDayInMonth - 1) % 7);
    } else {
        $extraCases = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <title>TP Calendrier</title>
</head>

<body>
    <p>Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.<br>
        En fonction des choix, afficher un calendrier comme celui ci :</p>
    <img src="https://icalendrier.fr/media/imprimer/2017/mensuel/calendrier-2017-mensuel-bigthumb.png" alt="Image pointant vers un calendrier">

    <form action="" method="post">
        <label for="month">Mois</label>
        <select name="month" id="month">
            <?php foreach ($months as $month) : ?>
                <option><?= $month ?></option>
            <?php endforeach ?>
        </select>

        <label for="year">Année</label>
        <select name="year" id="year">
            <?php for ($nbYear = $startDate; $nbYear <= $endDate; $nbYear++) : ?>
                <option><?= $nbYear ?></option>
            <?php endfor  ?>
        </select>

        <input type="submit" name="submitButton" value="Envoyer">
    </form>

    <p class="h1 text-left text-danger fw-bold">Le mois et l'année sont : <?= isset($_POST['month']) ? $_POST['month'] : '' ?> - <?= isset($_POST['year']) ? $_POST['year'] : '' ?></p>

    <table class="table table-bordered border-dark">
        <thead>
            <tr class="text-center bg-primary">
                <?php foreach ($days as $day) : ?>
                    <th><?= $day ?></th>
                <?php endforeach ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                for ($case = 1; $case <= ($daysInMonth + ($firstDayInMonth - 1) + $extraCases); $case++) : ?>
                    <td class="align-middle <?= $case >= $firstDayInMonth && $case - $firstDayInMonth + 1 <= $daysInMonth ? "" : "bg-secondary" ?>" style="width: 100px; height: 80px"><?= $case >= $firstDayInMonth && $case - $firstDayInMonth + 1 <= $daysInMonth ? $case - $firstDayInMonth + 1 : "" ?></td>

                    <?php if ($case % 7 == 0) : ?>
            </tr>
            <tr>
            <?php endif ?>

        <?php endfor ?>
            </tr>

        </tbody>
    </table>


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