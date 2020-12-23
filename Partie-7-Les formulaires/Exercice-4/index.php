<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 7 - Exercice 4</title>
</head>

<body>
    <p>Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.</p>
    <form action="user.php" method="post">
        <label for="firstName">Prénon</label>
        <input type="text" name="firstName" id="firstName" placeholder="Indiquer votre prénom">
        <label for="lastName">Nom</label>
        <input type="text" name="lastName" id="lastName" placeholder="Indiquer votre nom">
        <input type="submit" name="submitButton" value="Envoyer">
    </form>

</body>

</html>