<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 7 - Exercice 3</title>
</head>

<body>
    <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>
    <form action="user.php" method="get">
        <label for="firstName">Prénon</label>
        <input type="text" name="firstName" id="firstName" placeholder="Indiquer votre prénom">
        <label for="lastName">Nom</label>
        <input type="text" name="lastName" id="lastName" placeholder="Indiquer votre nom">
        <input type="submit" name="submitButton" value="Envoyer">
    </form>

</body>

</html>