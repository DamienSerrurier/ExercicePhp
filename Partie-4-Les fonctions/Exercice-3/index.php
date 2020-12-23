<?php
$string1 = 'Je suis en forme';
$string2 = ' et j\'ai bien dormi';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - Exercice 3</title>
</head>

<body>
    <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines.</p>

    <?php
    function str($string1, $string2)
    {
        return $string1 . $string2;
    }
    var_dump(str($string1, $string2));
    ?>

</body>

</html>