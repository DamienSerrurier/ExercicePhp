<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 7 - Exercice 5</title>
</head>

<body>
    <p>Créer un formulaire sur la page index.php avec :</p>
    <ul>
        <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
        <li>Un champ texte pour le nom</li>
        <li>Un champ texte pour le prénom</li>
    </ul>
    <p>Ce formulaire doit rediriger vers la page index.php.
        Vous avez le choix de la méthode.
    </p>
    <form action="" method="post">
        <label for="gender">Civilité</label>
        <select name="gender" id="gender">
            <optgroup label="Genre">
                <option value="woman">Madame</option>
                <option value="man">Monsieur</option>
            </optgroup>
        </select>
        <label for="firstName">Prénon</label>
        <input type="text" name="firstName" id="firstName" placeholder="Indiquer votre prénom">
        <label for="lastName">Nom</label>
        <input type="text" name="lastName" id="lastName" placeholder="Indiquer votre nom">
        <input type="submit" name="submitButton" value="Envoyer">
    </form>

</body>

</html>