<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - Exercice 7</title>
</head>

<body>
    <p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :</p>
    <ul>
        <li>Homme</li>
        <li>Femme</li>
    </ul>
    <p> La fonction doit renvoyer en fonction des paramètres :</p>
    <ul>
        <li>Vous êtes un homme et vous êtes majeur</li>
        <li>Vous êtes un homme et vous êtes mineur</li>
        <li> Vous êtes une femme et vous êtes majeur</li>
        <li>Vous êtes une femme et vous êtes mineur</li>
    </ul>
    <p>Gérer tous les cas.</p>
    
    <?php
    function sentense($gender, $age)
    {
        if ($gender == 'Homme' && $age >= 18) {
            return 'Vous êtes un homme et vous êtes majeur';
        } else if ($gender == 'Homme' && $age < 18) {
            return 'Vous êtes un homme et vous êtes mineur';
        } else if ($gender == 'Femme' && $age >= 18) {
            return 'Vous êtes une femme et vous êtes majeur';
        } else {
            return 'Vous êtes une femme et vous êtes mineur';
        }
    }
    
    echo sentense('Femme', 30);
    var_dump(sentense('Femme', 30));
    ?>

</body>

</html>