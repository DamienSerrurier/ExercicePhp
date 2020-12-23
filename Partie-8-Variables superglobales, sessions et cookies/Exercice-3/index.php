<?php
// On vérifie dans la super global $_POST et on écrit nos cookie avant le code html.
if (isset($_POST['login'], $_POST['password'])) {
    $loginName = $_POST['login'];
    $passwordPass = $_POST['password'];
    setcookie('pseudo', $loginName, time() + 365 * 24 * 3600);
    setcookie('passwordPass', $passwordPass, time() + 365 * 24 * 3600);
}

var_dump($_COOKIE)
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 8 - Exercice 4</title>
</head>

<body>
    <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</p>

    <form action="index.php" method="post">
        <label for="pseudo">Pseudonyme</label>
        <input type="text" name="login" id="pseudo" placeholder="Pseudonyme">
        <label for="pass">Mot de passe</label>
        <input type="password" name="password" id="passwordPass" placeholder="Mot de passe">
        <input type="submit" name="submitButton" value="Envoyer">
    </form>

   
</body>

</html>