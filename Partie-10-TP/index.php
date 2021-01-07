<?php
// On vérifie la variable super global $_POST, si elle contient des données elle affiche les messages de validation, sinon elle affiche rien.
if (empty($_POST)) {
    $showForm = true;
} else {
    $showForm = false;
}

// Utilisation des regex pour sécuriser des données.
$regexText = '/^[a-zA-Z-éèàôêçâîù ]+$/';
$regexTextArea = '';
$regexDate = '/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/';
$regexTelNumber = '/^(0|\+33 )[1-9]([-. ]?[0-9]{2} ){3}([-. ]?[0-9]{2})$/';
$regexNumber = '/^([0-1]\d{1}$|\d{0,2})$/';
$regexEmploymentCenter = '/^([0-9]{7}+[A-Z])$/';

var_dump($_POST);

$error = [];

// On vérifie si la variable super global $_POST contient des données, ensuite on exécute plusieurs test de sécurité et affiche des message suivant la validation de la condition

if (!empty($_POST)) {

    if (isset($_POST['lastname'])) {

        if (preg_match($regexText, $_POST['lastname'])) {
            $securedLastname = htmlspecialchars($_POST['lastname']);
        } else {
            $error['lastname'] = 'Attention ! Veuillez indiquer votre Nom';
        }

        if (empty($_POST['lastname'])) {
            $error['lastname'] = 'Veuillez renseigner le champ';
        }
    }

    if (isset($_POST['firstName'])) {

        if (preg_match($regexText, $_POST['firstName'])) {
            $securedFirstName = htmlspecialchars($_POST['firstName']);
        } else {
            $error['firstName'] = 'Attention ! Veuillez indiquer votre Prénom';
        }

        if (empty($_POST['firstName'])) {
            $error['firstName'] = 'Veuillez renseigner le champ';
        }
    }

    if (isset($_POST['birth'])) {

        if (preg_match($regexDate, $_POST['birth'])) {
            $securedBirth = htmlspecialchars($_POST['birth']);
        } else {
            $error['birth'] = 'Attention ! Veuillez indiquer votre date de naissance';
        }

        if (empty($_POST['birth'])) {
            $error['birth'] = 'Veuillez renseigner le champ';
        }
    }

    if (isset($_POST['country'])) {

        if (preg_match($regexText, $_POST['country'])) {
            $securedCountry = htmlspecialchars($_POST['country']);
        } else {
            $error['country'] = 'Attention ! Veuillez indiquer votre date de naissance';
        }

        if (empty($_POST['country'])) {
            $error['country'] = 'Veuillez renseigner le champ';
        }
    }

    if (isset($_POST['nationality'])) {

        if (preg_match($regexText, $_POST['nationality'])) {
            $securedNationality = htmlspecialchars($_POST['nationality']);
        } else {
            $error['nationality'] = 'Attention ! Veuillez indiquer votre Nationalité';
        }

        if (empty($_POST['nationality'])) {
            $error['nationality'] = 'Veuillez renseigner le champ';
        }
    }

    if (isset($_POST['address'])) {

        if (preg_match($regexText, $_POST['address'])) {
            $securedAddress = htmlspecialchars($_POST['address']);
        } else {
            $error['address'] = 'Attention ! Veuillez indiquer votre adresse';
        }

        if (empty($_POST['address'])) {
            $error['address'] = 'Veuillez renseigner le champ';
        }
    }

    if (isset($_POST['email'])) {

        $filterEmail = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        if ($filterEmail) {
            $securedEmail = htmlspecialchars($_POST['email']);
        } else {
            $error['email'] = 'Attention ! Veuillez indiquer votre Email';
        }

        if (empty($_POST['email'])) {
            $error['email'] = 'Veuillez renseigner le champ';
        }
    }

    if (isset($_POST['tel'])) {

        if (preg_match($regexTelNumber, $_POST['tel'])) {
            $securedTel = htmlspecialchars($_POST['tel']);
        } else {
            $error['tel'] = 'Attention ! Veuillez indiquer votre Numéro de téléphone';
        }

        if (empty($_POST['tel'])) {
            $error['tel'] = 'Veuillez renseigner le champ';
        }
    }

    if (isset($_POST['why'])) {

        if (preg_match($regexText, $_POST['why'])) {
            $securedWhy = htmlspecialchars($_POST['why']);
        } else {
            $error['why'] = 'Attention ! Veuillez indiquer pourquoi avoir fait ce choix';
        }

        if (empty($_POST['why'])) {
            $error['why'] = 'Veuillez renseigner le champ';
        }
    }

    if (isset($_POST['explanation'])) {

        if (preg_match($regexText, $_POST['explanation'])) {
            $securedExplanation = htmlspecialchars($_POST['explanation']);
        } else {
            $error['explanation'] = 'Attention ! Veuillez indiquer votre explication';
        }

        if (empty($_POST['explanation'])) {
            $error['explanation'] = 'Veuillez renseigner le champ';
        }
    }

    if (isset($_POST['diploma'])) {

        if ($_POST['diploma']) {
            $securedDiploma = htmlspecialchars($_POST['diploma']);
        } else {
            $error['diploma'] = 'Attention ! Veuillez indiquer votre niveau d\'étude';
        }

        if (empty($_POST['diploma'])) {
            $error['diploma'] = 'Veuillez renseigner le champ';
        }
    }

    if (isset($_POST['employmentCenter'])) {

        if (preg_match($regexEmploymentCenter, $_POST['employmentCenter'])) {
            $securedEmploymentCenter = htmlspecialchars($_POST['employmentCenter']);
        } else {
            $error['employmentCenter'] = 'Attention ! Veuillez indiquer votre explication';
        }

        if (empty($_POST['employmentCenter'])) {
            $error['employmentCenter'] = 'Veuillez renseigner le champ';
        }
    }

    if (isset($_POST['numberBadge'])) {

        if (preg_match($regexNumber, $_POST['numberBadge'])) {
            $securedBadge = htmlspecialchars($_POST['numberBadge']);
        } else {
            $error['numberBadge'] = 'Attention ! Veuillez indiquer votre explication';
        }

        if (empty($_POST['numberBadge'])) {
            $error['numberBadge'] = 'Veuillez renseigner le champ';
        }
    }

    if (isset($_POST['codeCademy'])) {

        $filterUrl = filter_var($_POST['codeCademy'], FILTER_VALIDATE_URL);
        if ($filterUrl) {
            $securedUrl = htmlspecialchars($_POST['codeCademy']);
        } else {
            $error['codeCademy'] = 'Attention ! Veuillez indiquer votre Email';
        }

        if (empty($_POST['codeCademy'])) {
            $error['codeCademy'] = 'Veuillez renseigner le champ';
        }
    }

    if (isset($_POST['hero'])) {

        if ($_POST['hero']) {
            $securedHero = htmlspecialchars($_POST['hero']);
        } else {
            $error['hero'] = 'Attention ! Veuillez indiquer votre explication';
        }

        if (empty($_POST['hero'])) {
            $error['hero'] = 'Veuillez renseigner le champ';
        }
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

        <form action="index.php" method="post" class="form container-fluid col-lg-4">
        <h1 class="text-center text-danger">Formulaire de la Manu</h1>
            <fieldset class=" border my-5">
                <legend class="text-center">Votre identité</legend>

                <div class="container">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Doe" class="form-control">

                    <label for="firstName" class="form-label">Prénom</label>
                    <input type="text" name="firstName" id="firstName" placeholder="John" class="form-control">

                    <label for="birth" class="form-label">Date de naissance</label>
                    <input type="text" name="birth" id="birth" placeholder="03/10/2000" class="form-control">

                    <label for="country" class="form-label">Pays</label>
                    <input type="text" name="country" id="country" placeholder="Pays" class="form-control">

                    <label for="nationality" class="form-label">Nationalité</label>
                    <input type="text" name="nationality" id="nationality" placeholder="Nationalité" class="form-control">

                    <label for="address" class="form-label">Adresse</label>
                    <textarea name="address" id="address" cols="30" rows="3" placeholder="rue Bât" class="form-control"></textarea>

                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" placeholder="john.doe@example.com" class="form-control">

                    <label for="tel" class="form-label">Téléphone</label>
                    <input type="tel" name="tel" id="tel" placeholder="Numéro tel." class="form-control">
                </div>
            </fieldset>


            <fieldset class="border my-5">
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
                    <input type="text" name="employmentCenter" id="employmentCenter" placeholder="Id pôle emploi" class="form-control">

                    <label for="numberBadge" class="form-label">Nombre de badge</label>
                    <input type="number" name="numberBadge" id="numberBadge" placeholder="Badge ?" class="form-control">

                    <label for="codeCademy" class="form-label">Liens codecademy</label>
                    <input type="url" name="codeCademy" id="codeCademy" placeholder="url Codecademy ?" class="form-control">
                </div>
            </fieldset>

            <fieldset class="border my-5">
                <legend class="text-center">Information presonnelles</legend>
                <div class="container">
                    <div class="form-check">
                        <div>
                            <label for="hero" class="form-check-label">Batman</label>
                            <input type="radio" name="hero" value="Batman" id="hero" class="form-check-input">
                        </div>
                        <div>
                            <label for="hero" class="form-check-label">Superman</label>
                            <input type="radio" name="hero" value="Superman" id="hero" class="form-check-input">
                        </div>
                        <div>
                            <label for="hero" class="form-check-label">Spiderman</label>
                            <input type="radio" name="hero" value="Spiderman" id="hero" class="form-check-input">
                        </div>
                        <div>
                            <label for="hero" class="form-check-label">Wonder Woman</label>
                            <input type="radio" name="hero" value="Wonder Woman" id="hero" class="form-check-input">
                        </div>
                        <div>
                            <label for="hero" class="form-check-label">Aquaman</label>
                            <input type="radio" name="hero" value="Aquaman" id="hero" class="form-check-input">
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

            <fieldset class="border my5 text-center">
                <legend class="text-center">Validation</legend>
                <input type="submit" name="submitButton" class="btn btn-success" value="Envoyer">
            </fieldset>

    <?php else : ?>
        <form action="index.php" method="post" class="container-fluid col-lg-4">
        <h1 class="text-center text-danger">Formulaire de la Manu</h1>
            <fieldset class=" border mt-5">
                <legend class="text-center">Votre identité</legend>

                <div class="container">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Doe" class="form-control" value="<?= isset($securedLastname) ? $securedLastname : '' ?>">
                    <p class="text-danger"><?= isset($error['lastname']) ? $error['lastname'] : '' ?></p>

                    <label for="firstName" class="form-label">Prénom</label>
                    <input type="text" name="firstName" id="firstName" placeholder="John" class="form-control" value="<?= isset($securedFirstName) ? $securedFirstName : '' ?>">
                    <p class="text-danger"><?= isset($error['firstName']) ? $error['firstName'] : '' ?></p>

                    <label for="birth" class="form-label">Date de naissance</label>
                    <input type="text" name="birth" id="birth" placeholder="03/10/2000" class="form-control" value="<?= isset($securedBirth) ? $securedBirth : '' ?>">
                    <p class="text-danger"><?= isset($error['birth']) ? $error['birth'] : '' ?></p>

                    <label for="country" class="form-label">Pays</label>
                    <input type="text" name="country" id="country" placeholder="Pays" class="form-control" value="<?= isset($securedCountry) ? $securedCountry : '' ?>">
                    <p class="text-danger"><?= isset($error['country']) ? $error['country'] : '' ?></p>

                    <label for="nationality" class="form-label">Nationalité</label>
                    <input type="text" name="nationality" id="nationality" placeholder="Nationalité" class="form-control" value="<?= isset($securedNationality) ? $securedNationality : '' ?>">
                    <p class="text-danger"><?= isset($error['nationality']) ? $error['nationality'] : '' ?></p>

                    <label for="address" class="form-label">Adresse</label>
                    <textarea name="address" id="address" cols="30" rows="3" placeholder="rue Bât" class="form-control" value="<?= isset($securedAddress) ? $securedAddress : '' ?>"></textarea>
                    <p class="text-danger"><?= isset($error['address']) ? $error['address'] : '' ?></p>

                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" placeholder="john.doe@example.com" class="form-control" value="<?= isset($securedEmail) ? $securedEmail : '' ?>">
                    <p class="text-danger"><?= isset($error['email']) ? $error['email'] : '' ?></p>

                    <label for="tel" class="form-label">Téléphone</label>
                    <input type="tel" name="tel" id="tel" placeholder="Numéro tel." class="form-control" value="<?= isset($securedTel) ? $securedTel : '' ?>">
                    <p class="text-danger"><?= isset($error['tel']) ? $error['tel'] : '' ?></p>
                </div>
            </fieldset>


            <fieldset class="border my-5">
                <legend class="text-center">Renseignement Pôle emploi</legend>

                <div class="container">
                    <label for="validate" class="form-label">Niveau d'étude</label>
                    <select name="diploma" id="diploma" class="form-select">
                        <option value="<?= isset($securedDiploma) ? $securedDiploma : '' ?>">Sans</option>
                        <option value="<?= isset($securedDiploma) ? $securedDiploma : '' ?>">Bac</option>
                        <option value="<?= isset($securedDiploma) ? $securedDiploma : '' ?>">Bac + 2</option>
                        <option value="<?= isset($securedDiploma) ? $securedDiploma : '' ?>">Bac + 3</option>
                        <option value="<?= isset($securedDiploma) ? $securedDiploma : '' ?>">Supérieur</option>
                    </select>
                    <p class="text-danger"><?= isset($error['diploma']) ? $error['diploma'] : '' ?></p>

                    <label for="employmentCenter" class="form-label">Numéro de pôle emploi</label>
                    <input type="text" name="employmentCenter" id="employmentCenter" placeholder="Id pôle emploi" class="form-control" value="<?= isset($securedEmploymentCenter) ? $securedEmploymentCenter : '' ?>">
                    <p class="text-danger"><?= isset($error['employmentCenter']) ? $error['employmentCenter'] : '' ?></p>

                    <label for="numberBadge" class="form-label">Nombre de badge</label>
                    <input type="number" name="numberBadge" id="numberBadge" placeholder="Badge ?" class="form-control" value="<?= isset($securedBadge) ? $securedBadge : '' ?>">
                    <p class="text-danger"><?= isset($error['numberBadge']) ? $error['numberBadge'] : '' ?></p>

                    <label for="codeCademy" class="form-label">Liens codecademy</label>
                    <input type="url" name="codeCademy" id="codeCademy" placeholder="url Codecademy ?" class="form-control" value="<?= isset($securedUrl) ? $securedUrl : '' ?>">
                    <p class="text-danger"><?= isset($error['codeCademy']) ? $error['codeCademy'] : '' ?></p>
                </div>
            </fieldset>

            <fieldset class="border my-5">
                <legend class="text-center">Information presonnelles</legend>
                <div class="container">
                    <div class="form-check">
                        <div>
                            <label for="hero" class="form-check-label">Batman</label>
                            <input type="radio" name="hero" value="<?= isset($securedHero) ? $securedHero : '' ?>" id="hero" class="form-check-input">
                        </div>
                        <div>
                            <label for="hero" class="form-check-label">Superman</label>
                            <input type="radio" name="hero" value="<?= isset($securedHero) ? $securedHero : '' ?>" id="hero" class="form-check-input">
                        </div>
                        <div>
                            <label for="hero" class="form-check-label">Spiderman</label>
                            <input type="radio" name="hero" value="<?= isset($securedHero) ? $securedHero : '' ?>" id="hero" class="form-check-input">
                        </div>
                        <div>
                            <label for="hero" class="form-check-label">Wonder Woman</label>
                            <input type="radio" name="hero" value="<?= isset($securedHero) ? $securedHero : '' ?>" id="hero" class="form-check-input">
                        </div>
                        <div>
                            <label for="hero" class="form-check-label">Aquaman</label>
                            <input type="radio" name="hero" value="<?= isset($securedHero) ? $securedHero : '' ?>" id="hero" class="form-check-input">
                        </div>
                    </div>

                    <label for="why" class="form-label">Pourquoi ?</label>
                    <textarea name="why" id="why" cols="30" rows="7" class="form-control" value="<?= isset($securedWhy) ? $securedWhy : '' ?>"></textarea>
                    <p class="text-danger"><?= isset($error['why']) ? $error['why'] : '' ?></p>

                    <div class="form-check">
                        <div>
                            <label for="hackTec" class="form-check-label">Hack technique</label>
                            <input type="checkbox" name="hackTec" id="hackTec" class="form-check-input" value="<?= isset($securedLastname) ? $securedLastname : '' ?>">
                        </div>
                        <div>
                            <label for="hackInf" class="form-check-label">Hack informatique</label>
                            <input type="checkbox" name="hackInf" id="hackInf" class="form-check-input" value="<?= isset($securedLastname) ? $securedLastname : '' ?>">
                        </div>
                        <div>
                            <label for="hackElse" class="form-check-label">Autre</label>
                            <input type="checkbox" name="hackElse" id="hackElse" class="form-check-input" value="<?= isset($securedLastname) ? $securedLastname : '' ?>">
                        </div>
                        <p class="text-danger"><?= isset($error['hackInf']) ? $error['hackInf'] : '' ?></p>
                    </div>

                    <label for="explanation" class="form-label">Explication ?</label>
                    <textarea name="explanation" id="explanation" cols="30" rows="10" class="form-control" value="<?= isset($securedExplanation) ? $securedExplanation : '' ?>"></textarea>
                    <p class="text-danger"><?= isset($error['explanation']) ? $error['explanation'] : '' ?></p>

                    <div class="form-check">
                        <div>
                            <label for="validate" class="form-check-label">Oui ?</label>
                            <input type="radio" name="validate" id="validate" class="form-check-input" value="<?= isset($securedLastname) ? $securedLastname : '' ?>">
                        </div>
                        <div>
                            <label for="validate" class="form-check-label">Non ?</label>
                            <input type="radio" name="validate" id="validate" class="form-check-input" value="<?= isset($securedLastname) ? $securedLastname : '' ?>">
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset class="border my5 text-center">
                <legend class="text-center">Validation</legend>
                <input type="submit" name="submitButton" class="btn btn-success" value="Envoyer">
            </fieldset>
        </form>
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