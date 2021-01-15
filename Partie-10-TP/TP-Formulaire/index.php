<?php
require_once 'index_controller.php';
?>

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>TP Formulaire</title>
</head>

<body>

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
   
    <form action="index.php" method="post" enctype="multipart/form-data" class="form container-fluid col-lg-4">
        <h1 class="text-center text-danger">Formulaire de la Manu</h1>
        <fieldset class=" border my-5">
            <legend class="text-center">Votre identité</legend>

            <div class="container">
                <label for="lastname" class="form-label">Nom</label>
                <input type="text" name="lastname" id="lastname" value="<?= isset($securedLastname) ? $securedLastname : '' ?>" placeholder="Doe" class="form-control">
                <p class="displayMessage">
                    <?= isset($messageErrors['lastname']) ? $messageErrors['lastname'] : '' ?><?= isset($messageSuccess['lastname']) ? $messageSuccess['lastname'] : '' ?>
                </p>

                <label for="firstName" class="form-label">Prénom</label>
                <input type="text" name="firstName" id="firstName" value="<?= isset($securedFirstName) ? $securedFirstName : '' ?>" placeholder="John" class="form-control">
                <p class="displayMessage">
                    <?= isset($messageErrors['firstName']) ? $messageErrors['firstName'] : '' ?><?= isset($messageSuccess['firstName']) ? $messageSuccess['firstName'] : '' ?>
                </p>

                <label for="birth" class="form-label">Date de naissance</label>
                <input type="text" name="birth" id="birth" value="<?= isset($securedBirth) ? $securedBirth : '' ?>" placeholder="03/10/2000" class="form-control">
                <p class="displayMessage">
                    <?= isset($messageErrors['birth']) ? $messageErrors['birth'] : '' ?><?= isset($messageSuccess['birth']) ? $messageSuccess['birth'] : '' ?>
                </p>

                <label for="country" class="form-label">Pays</label>
                <input type="text" name="country" id="country" value="<?= isset($securedCountry) ? $securedCountry : '' ?>" placeholder="Pays" class="form-control">
                <p class="displayMessage">
                    <?= isset($messageErrors['country']) ? $messageErrors['country'] : '' ?><?= isset($messageSuccess['country']) ? $messageSuccess['country'] : '' ?>
                </p>

                <label for="nationality" class="form-label">Nationalité</label>
                <input type="text" name="nationality" id="nationality" value="<?= isset($securedNationality) ? $securedNationality : '' ?>" placeholder="Nationalité" class="form-control">
                <p class="displayMessage">
                    <?= isset($messageErrors['nationality']) ? $messageErrors['nationality'] : '' ?><?= isset($messageSuccess['nationality']) ? $messageSuccess['nationality'] : '' ?>
                </p>

                <label for="address" class="form-label">Adresse</label>
                <textarea name="address" id="address" cols="30" rows="3" value="<?= isset($securedAddress) ? $securedAddress : '' ?>" placeholder="rue Bât" class="form-control"></textarea>
                <p class="displayMessage">
                    <?= isset($messageErrors['address']) ? $messageErrors['address'] : '' ?><?= isset($messageSuccess['address']) ? $messageSuccess['address'] : '' ?>
                </p>

                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" value="<?= isset($securedEmail) ? $securedEmail : '' ?>" placeholder="john.doe@example.com" class="form-control">
                <p class="displayMessage">
                    <?= isset($messageErrors['email']) ? $messageErrors['email'] : '' ?><?= isset($messageSuccess['email']) ? $messageSuccess['email'] : '' ?>
                </p>

                <label for="tel" class="form-label">Téléphone</label>
                <input type="tel" name="tel" id="tel" value="<?= isset($securedTel) ? $securedTel : '' ?>" placeholder="Numéro tel." class="form-control">
                <p class="displayMessage">
                    <?= isset($messageErrors['tel']) ? $messageErrors['tel'] : '' ?><?= isset($messageSuccess['tel']) ? $messageSuccess['tel'] : '' ?>
                </p>
            </div>
        </fieldset>


        <fieldset class="border my-5">
            <legend class="text-center">Renseignement Pôle emploi</legend>

            <div class="container">
                <label for="validate" class="form-label">Niveau d'étude</label>
                <select name="diploma" id="diploma" class="form-select">
                    <option value="">Choisir</option>
                    <option value="1" <?= isset($securedDiploma) && $securedDiploma == 1 ? "selected" : '' ?>>Sans</option>
                    <option value="2" <?= isset($securedDiploma) && $securedDiploma == 2 ? "selected" : '' ?>>Bac</option>
                    <option value="3" <?= isset($securedDiploma) && $securedDiploma == 3 ? "selected" : '' ?>>Bac + 2</option>
                    <option value="4" <?= isset($securedDiploma) && $securedDiploma == 4 ? "selected" : '' ?>>Bac + 3 ou supérieur</option>
                </select>
                <p class="displayMessage">
                    <?= isset($messageErrors['diploma']) ? $messageErrors['diploma'] : '' ?><?= isset($messageSuccess['diploma']) ? $messageSuccess['diploma'] : '' ?>
                </p>

                <label for="employmentCenter" class="form-label">Numéro de pôle emploi</label>
                <input type="text" name="employmentCenter" id="employmentCenter" value="<?= isset($securedEmploymentCenter) ? $securedEmploymentCenter : '' ?>" placeholder="Id pôle emploi" class="form-control">
                <p class="displayMessage">
                    <?= isset($messageErrors['employmentCenter']) ? $messageErrors['employmentCenter'] : '' ?><?= isset($messageSuccess['employmentCenter']) ? $messageSuccess['employmentCenter'] : '' ?>
                </p>

                <label for="numberBadge" class="form-label">Nombre de badge</label>
                <input type="number" name="numberBadge" id="numberBadge" value="<?= isset($securedBadge) ? $securedBadge : '' ?>" placeholder="Badge ?" class="form-control">
                <p class="displayMessage">
                    <?= isset($messageErrors['numberBadge']) ? $messageErrors['numberBadge'] : '' ?><?= isset($messageSuccess['numberBadge']) ? $messageSuccess['numberBadge'] : '' ?>
                </p>

                <label for="codeCademy" class="form-label">Liens codecademy</label>
                <input type="url" name="codeCademy" id="codeCademy" value="<?= isset($securedUrl) ? $securedUrl : '' ?>" placeholder="url Codecademy ?" class="form-control">
                <p class="displayMessage">
                    <?= isset($messageErrors['codeCademy']) ? $messageErrors['codeCademy'] : '' ?><?= isset($messageSuccess['codeCademy']) ? $messageSuccess['codeCademy'] : '' ?>
                </p>
            </div>
        </fieldset>

        <fieldset class="border my-5">
            <legend class="text-center">Information presonnelles</legend>
            <div class="container">
                <div class="form-check">
                    <label for="hero" class="form-label">Héro</label>
                    <input type="text" name="hero" id="hero" value="<?= isset($securedHero) ? $securedHero : '' ?>" placeholder="Héro" class="form-control">
                    <p class="displayMessage">
                        <?= isset($messageErrors['hero']) ? $messageErrors['hero'] : '' ?><?= isset($messageSuccess['hero']) ? $messageSuccess['hero'] : '' ?>
                    </p>
                </div>

                <label for="why" class="form-label">Pourquoi ?</label>
                <textarea name="why" id="why" value="<?= isset($securedWhy) ? $securedWhy : '' ?>" cols="30" rows="7" class="form-control"></textarea>
                <p class="displayMessage">
                    <?= isset($messageErrors['why']) ? $messageErrors['why'] : '' ?><?= isset($messageSuccess['why']) ? $messageSuccess['why'] : '' ?>
                </p>

                <div class="form-check">
                    <div>
                        <label for="hackTec" class="form-check-label">Hack technique</label>
                        <input type="checkbox" name="hack[]" id="hackTec" value="1"<?= isset($securedHackTeck) && $securedHackTeck == 1 ? "checked" : '' ?> class="form-check-input">
                        <p class="displayMessage">
                            <?= isset($messageSuccess['hackTec']) ? $messageSuccess['hackTec'] : '' ?>
                        </p>
                    </div>
                    <div>
                        <label for="hackInf" class="form-check-label">Hack informatique</label>
                        <input type="checkbox" name="hack[]" id="hackInf" value="2"<?= isset($securedHackInf) && $securedHackInf == 2 ? "checked" : '' ?> class="form-check-input">
                        <p class="displayMessage">
                            <?= isset($messageSuccess['hackInf']) ? $messageSuccess['hackInf'] : '' ?>
                        </p>
                    </div>
                    <div>
                        <label for="hackElse" class="form-check-label">Autre</label>
                        <input type="checkbox" name="hack[]" id="hackElse" value="3"<?= isset($securedHackElse) && $securedHackElse == 3 ? "checked" : '' ?> class="form-check-input">
                        <p class="displayMessage">
                            <?= isset($messageErrors['hack']) ? $messageErrors['hack'] : '' ?><?= isset($messageSuccess['hackElse']) ? $messageSuccess['hackElse'] : '' ?>
                        </p>
                    </div>
                </div>

                <label for="explanation" class="form-label">Explication ?</label>
                <textarea name="explanation" id="explanation" value="<?= isset($securedExplanation) ? $securedExplanation : '' ?>" cols="30" rows="10" class="form-control"></textarea>
                <p class="displayMessage">
                    <?= isset($messageErrors['explanation']) ? $messageErrors['explanation'] : '' ?><?= isset($messageSuccess['explanation']) ? $messageSuccess['explanation'] : '' ?>
                </p>


                <div class="form-check">
                    <div>
                        <label for="validate" class="form-check-label">Oui ?</label>
                        <input type="radio" name="validate" id="validate" value="1" <?= isset($securedHack) && $securedHack == 1 ? "checked" : '' ?> class="form-check-input">
                    </div>
                    <div>
                        <label for="validate" class="form-check-label">Non ?</label>
                        <input type="radio" name="validate" id="validate" value="2" <?= isset($securedHack) && $securedHack == 2 ? "checked" : '' ?> class="form-check-input">
                        <p class="displayMessage">
                            <?= isset($messageErrors['validate']) ? $messageErrors['validate'] : '' ?><?= isset($messageSuccess['validate']) ? $messageSuccess['validate'] : '' ?>
                        </p>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="border my5 text-center">
            <legend class="text-center">Validation</legend>
            <input type="submit" name="submitButton" class="btn btn-success" value="Envoyer">
        </fieldset>
    </form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f3164e65ab.js" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <script src="https://kit.fontawesome.com/d89aa1e4ce.js" crossorigin="anonymous"></script>
</body>

</html>