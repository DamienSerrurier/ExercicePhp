<?php
$string = 'Je suis en forme';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - Exercice 2</title>
</head>

<body>
    <p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>

    <?php
    function str($string)
    {

        return $string;
    }
    var_dump(str($string));
    ?>

</body>

</html>