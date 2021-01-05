<?php
// Définit les informations de localisation. 
setlocale(LC_TIME, ['fr_FR.utf8', 'fra']);

// Initialisation de la date de départ et de fin.
$startDate = 2000;
$endDate = 2038;

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
    $firtsDayInMonth =  strftime("%u", strtotime($month . "/01/" . $nbYear));
    var_dump($daysInMonth);
    var_dump($firtsDayInMonth);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
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

<p>Le mois et l'année sont : <?= isset($_POST['month']) ? $_POST['month'] : '' ?> - <?= isset($_POST['year']) ? $_POST['year'] : '' ?></p>

<table>
    <thead>
        <tr>
            <?php foreach ($days as $day) : ?>
                <th><?= $day ?></th>
            <?php endforeach ?>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php for ($case = 1; $case < ($daysInMonth + ($firtsDayInMonth - 1)); $case++) : ?>
                <td><?= $case ?></td>

                <?php if ($case % 7 == 0) : ?>
        </tr>
        <tr>
        <?php endif ?>
    <?php endfor ?>
        </tr>
    </tbody>
</table>



</body>

</html>