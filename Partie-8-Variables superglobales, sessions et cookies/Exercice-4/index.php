<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 8 - Exercice 4</title>
</head>

<body>
    <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p>

    <form action="user.php" method="post">
        <label for="pseudo">Pseudonyme</label>
        <input type="text" name="login" id="pseudo" placeholder="Pseudonyme">
        <label for="pass">Mot de passe</label>
        <input type="password" name="password" id="passwordPass" placeholder="Mot de passe">
        <input type="submit" name="submitButton" value="Envoyer">
    </form>

</body>

</html>