<?php
$bouleen = true;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - Exercice 1</title>
</head>

<body>
    <p>Faire une fonction qui retourne true.</p>

    <?php
    function boul($bouleen)
    {
        return $bouleen;
    }
    var_dump(boul($bouleen));
    ?>

</body>

</html>