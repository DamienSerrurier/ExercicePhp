<?php
$age = 30;
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 - Exercice 6</title>
</head>

<body>
    <p>Traduire ce code avec des if et des else :</p>
    <?php
    //   echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    ?>

    <?php
    if ($age >= 18) {
        echo 'Tu es majeur';
    } else {
        echo 'Tu n\'es pas majeur';
    }
    ?>

</body>

</html>