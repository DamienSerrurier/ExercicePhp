<?php
if (empty($_POST)) {
    $showForm = true;
} else {
    $showForm = false;
}



// Utilisation des regex pour sécuriser des données.
$regexText = '/^[a-zA-Zç]+$/';
$regexNumber = '/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/';



var_dump($_POST);

if (isset($_POST['name'], $_POST['firstName'])) {

    if (preg_match($regexText, $_POST['name'])) {
        $secureName =  htmlspecialchars($_POST['name']);
        $textName = 'Information enregistré';
    } else {
        $secureName = 'Mauvais format';
        $textName = '';
    }

    if (preg_match($regexText, $_POST['firstName'])) {
        $secureFirstName =  htmlspecialchars($_POST['firstName']);
        $textFirstName = 'Information enregistré';
    } else {
        $secureFirstName = 'Mauvais format';
        $textFirstName = '';
    }

    if (preg_match($regexText, $_POST['country'])) {
        $secureCountry =  htmlspecialchars($_POST['country']);
        $textCountry = 'Information enregistré';
    } else {
        $secureCountry = 'Mauvais format';
        $textCountry = '';
    }
    if (preg_match($regexText, $_POST['nationality'])) {
        $secureNationality =  htmlspecialchars($_POST['nationality']);
        $textNationality = 'Information enregistré';
    } else {
        $secureNationality = 'Mauvais format';
        $textNationality = '';
    }
}
?>

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>TP Formulaire</title>
</head>

<body>
    <?php if ($showForm) : ?>
        <div>
            Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes :
            <ul>
                <li>Nom</li>
                <li>Prénom</li>
                <li>Date de naissance</li>
                <li>Pays de naissance</li>
                <li>Nationalité</li>
                <li>Adresse</li>
                <li>E-mail</li>
                <li>Téléphone</li>
                <li>Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)</li>
                <li>Numéro pôle emploi</li>
                <li>Nombre de badge</li>
                <li>Liens codecademy</li>
                <li>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</li>
                <li>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</li>
                <li>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</li>
            </ul>
            A la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire.
        </div>

        <form action="index.php" method="post" class="container-fluid col-lg-4">
            <fieldset class=" border">
                <legend class="text-center">Votre identité</legend>

                <div class="container">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" name="name" id="name" placeholder="Doe" class="form-control">

                    <label for="firstName" class="form-label">Prénom</label>
                    <input type="text" name="firstName" id="firstName" placeholder="John" class="form-control">

                    <label for="birth" class="form-label">Date de naissance</label>
                    <input type="date" name="birth" id="birth" placeholder="03/10/2000" class="form-control">

                    <label for="country" class="form-label">Pays</label>
                    <input type="text" name="country" id="country" placeholder="Pays" class="form-control">

                    <label for="nationality" class="form-label">Nationalité</label>
                    <input type="text" name="nationality" id="nationality" placeholder="Nationalité" class="form-control">

                    <label for="address" class="form-label">Adresse</label>
                    <textarea name="address" id="address" cols="30" rows="3" placeholder="rue, . Bât:" class="form-control"></textarea>

                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" placeholder="john.doe@example.com" class="form-control">

                    <label for="tel" class="form-label">Téléphone</label>
                    <input type="tel" name="tel" id="tel" placeholder="Numéro tel." class="form-control">
                </div>
            </fieldset>


            <fieldset class="border">
                <legend class="text-center">Renseignement Pôle emploi</legend>

                <div class="container">
                    <label for="validate" class="form-label">Niveau d'étude</label>
                    <select name="diploma" id="diploma" class="form-select">
                        <option value="sans">Sans</option>
                        <option value="bac">Bac</option>
                        <option value="bac2">Bac + 2</option>
                        <option value="bac3">Bac + 3</option>
                        <option value="superior">Supérieur</option>
                    </select>

                    <label for="employmentCenter" class="form-label">Numéro de pôle emploi</label>
                    <input type="number" name="employmentCenter" id="employmentCenter" placeholder="Id pôle emploi" class="form-control">

                    <label for="numberBadge" class="form-label">Nombre de badge</label>
                    <input type="number" name="numberBadge" id="numberBadge" placeholder="Badge ?" class="form-control">

                    <label for="codeCademy" class="form-label">Liens codecademy</label>
                    <input type="url" name="codeCademy" id="codeCademy" placeholder="url Codecademy ?" class="form-control">
                </div>
            </fieldset>

            <fieldset class="border">
                <legend class="text-center">Information presonnelles</legend>
                <div class="container">
                        <div class="form-check">
                            <div>
                                <label for="hero" class="form-check-label">Batman</label>
                                <input type="radio" name="hero" id="hero" class="form-check-input">
                            </div>
                            <div>
                                <label for="hero" class="form-check-label">Superman</label>
                                <input type="radio" name="hero" id="hero" class="form-check-input">
                            </div>
                            <div>
                                <label for="hero" class="form-check-label">Spiderman</label>
                                <input type="radio" name="hero" id="hero" class="form-check-input"> 
                            </div>
                            <div>
                                <label for="hero" class="form-check-label">Wonder Woman</label>
                                <input type="radio" name="hero" id="hero" class="form-check-input">
                            </div>
                            <div>
                                <label for="hero" class="form-check-label">Aquaman</label>
                                <input type="radio" name="hero" id="hero" class="form-check-input">
                            </div>
                        </div>

                    <label for="why" class="form-label">Pourquoi ?</label>
                    <textarea name="why" id="why" cols="30" rows="7" class="form-control"></textarea>

                    <div class="form-check">
                        <div>
                            <label for="hackTec" class="form-check-label">Hack technique</label>
                            <input type="checkbox" name="hackTec" id="hackTec" class="form-check-input">
                        </div>
                        <div>
                            <label for="hackInf" class="form-check-label">Hack informatique</label>
                            <input type="checkbox" name="hackInf" id="hackInf" class="form-check-input">
                        </div>
                        <div>
                            <label for="hackElse" class="form-check-label">Autre</label>
                            <input type="checkbox" name="hackElse" id="hackElse" class="form-check-input">
                        </div>
                    </div>

                    <label for="explanation" class="form-label">Explication ?</label>
                    <textarea name="explanation" id="explanation" cols="30" rows="10" class="form-control"></textarea>

                    <div class="form-check">
                        <div>
                            <label for="validate" class="form-check-label">Oui ?</label>
                            <input type="radio" name="validate" id="validate" class="form-check-input">
                        </div>
                        <div>
                            <label for="validate" class="form-check-label">Non ?</label>
                            <input type="radio" name="validate" id="validate" class="form-check-input">
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend class="text-center">Validation</legend>
                <input type="submit" name="submitButton" value="Envoyer">
            </fieldset>
        </form>

    <?php else : ?>
        <p>Nom : <?= $secureName ?></p>
        <p><?= $textName ?></p>
        <p>Prénom : <?= $secureFirstName ?></p>
        <p><?= $textFirstName ?></p>
        <p>Pays : <?= $secureCountry ?></p>
        <p><?= $textCountry ?></p>
        <p>Nationalité : <?= $secureNationality ?></p>
        <p><?= $textNationality ?></p>
    <?php endif ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>