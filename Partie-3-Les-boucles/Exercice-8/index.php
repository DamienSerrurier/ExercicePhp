<!-- Boucle FOR -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 3 - Exercice 8</title>
</head>

<body>
    <p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>
    
    <?php
    for ($i = 200; $i >= 0; $i -= 12) { 
        echo "$i - Enfin !!!!<br>";
    }
    ?>

</body>

</html>