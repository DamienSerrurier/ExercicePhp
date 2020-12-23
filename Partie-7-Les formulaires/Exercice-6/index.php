<?php
if (empty($_POST)) {
    $showForm = true;
} else {
    $showForm = false;
}

// Utilisation d'une regex pour sécuriser des données comme le prénom et Nom.
$regexName = '/^[a-zA-Z]+$/';

if (isset($_POST['gender'], $_POST['firstName'], $_POST['lastName'])) {

    // Utilisation de la fonction preg_match pour vérifier que la chaîne de caractère contient les élèments attendu.
    if (preg_match($regexName, $_POST['firstName'])) {
        // Utilisation de la fonction htmlspecialchars pour convertir des balises html en entités spéciaux non dommageable pour le fichier php.
        $securedFirstname = htmlspecialchars($_POST['firstName']);
    } else {
        $securedFirstname = '<i>Mauvais format</i>';
    }

    if (preg_match($regexName, $_POST['lastName'])) {
        $securedLastname = htmlspecialchars($_POST['lastName']);
    } else {
        $securedLastname = '<i>Mauvais format</i>';
    }

    if ($_POST['gender'] == 'Monsieur') {
        $gender = ($_POST['gender']);
    } else {
        $gender = ($_POST['gender']);
    }
}

var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 7 - Exercice 6</title>
</head>

<body>
    <p>Créer un formulaire sur la page index.php avec :</p>
    <ul>
        <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
        <li>Un champ texte pour le nom</li>
        <li>Un champ texte pour le prénom</li>
    </ul>
    <p>Ce formulaire doit rediriger vers la page index.php.
        Vous avez le choix de la méthode.
    </p>
    <p>Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
        Utiliser qu'une seule page.
    </p>

    <?php if ($showForm) { ?>
        <form <?php $display ?> action="" method="post">
            <label for="gender">Civilité</label>
            <select name="gender" id="gender">
                <optgroup label="Genre">
                    <option value="Madame">Madame</option>
                    <option value="Monsieur">Monsieur</option>
                </optgroup>
            </select>
            <label for="firstName">Prénon</label>
            <input type="text" name="firstName" id="firstName" placeholder="Indiquer votre prénom">
            <label for="lastName">Nom</label>
            <input type="text" name="lastName" id="lastName" placeholder="Indiquer votre nom">
            <input type="submit" name="submitButton" value="Envoyer">
        </form>
    <?php } else { ?>
        <p>Genre : <?= $gender ?></p>
        <p>Prénom : <?= $securedFirstname ?></p>
        <p>Nom : <?= $securedLastname ?></p>
    <?php } ?>


</body>

</html>