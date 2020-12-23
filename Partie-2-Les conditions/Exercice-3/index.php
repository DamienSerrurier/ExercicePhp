<?php
$age = 30;
$gender = 'Femme';
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 - Exercice 3</title>
</head>

<body>
    <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :
    </p>
    <ul>
        <li>Homme</li>
        <li>Femme</li>
    </ul>
    <p>En fonction de l'âge et du genre afficher la phrase correspondante :</p>
    <ul>
        <li>Vous êtes un homme et vous êtes majeur</li>
        <li>Vous êtes un homme et vous êtes mineur</li>
        <li>Vous êtes une femme et vous êtes majeur</li>
        <li>Vous êtes une femme et vous êtes mineur</li>
    </ul>
    <p>Gérer tous les cas.</p>

    <?php
    if ($gender == 'Homme' && $age > 18) {
        echo 'Vous êtes un homme et vous êtes majeur';
    } else if ($gender == 'Homme' && $age < 18) {
        echo 'Vous êtes un homme et vous êtes mineur';
    } else if ($gender == 'Femme' && $age > 18) {
        echo 'Vous êtes une femme et vous êtes majeur';
    } else {
        echo 'Vous êtes une femme et vous êtes mineur';
    }
    ?>

</body>

</html>