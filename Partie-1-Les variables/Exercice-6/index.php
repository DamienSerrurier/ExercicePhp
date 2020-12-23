<?php
$name = 'Anita';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 1 - Exercice 6</title>
</head>

<body>
    <p>Créer une variable name et l'initialiser avec la valeur de votre choix.
        Afficher : "Bonjour" + name + ", comment vas tu ?".</p>

    <?php
    echo 'Bonjour ' . $name . ' comment vas tu ?<br>';
    echo "Bonjour $name comment vas tu ?";
    ?>
    <p><?php echo "Bonjour  $name  comment vas tu ?" ?></p>
    <p><?= "Bonjour  $name  comment vas tu ?" ?></p>
    <p>Bonjour <?= $name?> comment va tu ?</p>
</body>

</html>