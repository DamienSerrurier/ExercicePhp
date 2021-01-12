<?php
var_dump($_POST);

$diplomaArray = [
    1 => 'Sans',
    2 => 'Bac',
    3 => 'Bac + 2',
    4 => 'Bac + 3 ou supérieur'
];

$hackChoice = [
    1 => 'Hack technique',
    2 => 'Hack informatique',
    3 => 'Autre'
];

$validedChoice = [
    1 => 'Oui',
    2 => 'Non'
];

// On vérifie si la variable super global $_POST contient des données, ensuite on exécute plusieurs test de sécurité et affiche des message suivant la validation de la condition
if (isset($_POST['submitButton'])) {

    $messageErrors = [];
    $messageSuccess = [];

    // Utilisation des regex pour sécuriser des données.
    $regexText = '/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.\'-]+$/';
    $regexTextArea = '/^([A-Za-z0-9]+\.[A-Za-z0-9]+(\r)?(\n)?)+$/';
    $regexDate = '/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/';
    $regexTelNumber = '/^(0|\+33 )[1-9]([-. ]?[0-9]{2} ){3}([-. ]?[0-9]{2})$/';
    $regexNumber = '/^([0-1]\d{1}$|\d{0,2})$/';
    $regexEmploymentCenter = '/^([0-9]{7}+[A-Z])$/';
    $regexBadge = '/^[0-9]{0,2}$/';

    if (isset($_POST['lastname'])) {

        if (empty($_POST['lastname'])) {
            $messageErrors['lastname'] = 'Veuillez remplir ce champ.';
        } elseif (!preg_match($regexText, $_POST['lastname'])) {
            $messageErrors['lastname'] = 'Attention ! Veuillez indiquer votre Nom.';
        } else {
            $securedLastname =  htmlspecialchars($_POST['lastname']);
            $messageSuccess['lastname'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['firstName'])) {

        if (empty($_POST['firstName'])) {
            $messageErrors['firstName'] = 'Veuillez remplir ce champ.';
        } elseif (!preg_match($regexText, $_POST['firstName'])) {
            $messageErrors['firstName'] = 'Attention ! Veuillez indiquer votre Prénom.';
        } else {
            $securedFirstName =  htmlspecialchars($_POST['firstName']);
            $messageSuccess['firstName'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['birth'])) {

        if (empty($_POST['birth'])) {
            $messageErrors['birth'] = 'Veuillez remplir ce champ.';
        } elseif (!preg_match($regexDate, $_POST['birth'])) {
            $messageErrors['birth'] = 'Attention ! Veuillez indiquer votre de de Naissance.';
        } else {
            $securedBirth =  htmlspecialchars($_POST['birth']);
            $messageSuccess['birth'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['country'])) {

        if (empty($_POST['country'])) {
            $messageErrors['country'] = 'Veuillez remplir ce champ.';
        } elseif (!preg_match($regexText, $_POST['country'])) {
            $messageErrors['country'] = 'Attention ! Veuillez indiquer votre Pays.';
        } else {
            $securedCountry =  htmlspecialchars($_POST['country']);
            $messageSuccess['country'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['nationality'])) {

        if (empty($_POST['nationality'])) {
            $messageErrors['nationality'] = 'Veuillez remplir ce champ.';
        } elseif (!preg_match($regexText, $_POST['nationality'])) {
            $messageErrors['nationality'] = 'Attention ! Veuillez indiquer votre Nationalité.';
        } else {
            $securedNationality =  htmlspecialchars($_POST['nationality']);
            $messageSuccess['nationality'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['address'])) {

        if (empty($_POST['address'])) {
            $messageErrors['address'] = 'Veuillez remplir ce champ.';
        } elseif (!preg_match($regexText, $_POST['address'])) {
            $messageErrors['address'] = 'Attention ! Veuillez indiquer votre Adresse.';
        } elseif (strlen($_POST['address']) < 5 || strlen($_POST['address']) > 50) {
            $messageErrors['address'] = 'Attention ! Votre adresse doit être supérieure à 50 caractères.';
        } else {
            $securedAddress =  htmlspecialchars($_POST['address']);
            $messageSuccess['address'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['email'])) {

        $filterEmail = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        if (empty($_POST['email'])) {
            $messageErrors['email'] = 'Veuillez remplir ce champ.';
        } elseif (!$filterEmail) {
            $messageErrors['email'] = 'Attention ! Veuillez indiquer votre Email.';
        } else {
            $securedEmail =  htmlspecialchars($_POST['email']);
            $messageSuccess['email'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['tel'])) {

        if (empty($_POST['tel'])) {
            $messageErrors['tel'] = 'Veuillez remplir ce champ.';
        } elseif (!preg_match($regexTelNumber, $_POST['tel'])) {
            $messageErrors['tel'] = 'Attention ! Veuillez indiquer votre Numéro de téléphone.';
        } else {
            $securedTel =  htmlspecialchars($_POST['tel']);
            $messageSuccess['tel'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (!array_key_exists($_POST['diploma'], $diplomaArray)) {
        $messageErrors['diploma'] = 'Veuillez sélectionner votre Niveau d\'étude.';
    } else {
        $securedDiploma =  htmlspecialchars($_POST['diploma']);
        $messageSuccess['diploma'] = '<i class="fas fa-check formValid"></i>';
    }

    if (isset($_POST['employmentCenter'])) {

        if (empty($_POST['employmentCenter'])) {
            $messageErrors['employmentCenter'] = 'Veuillez remplir ce champ.';
        } elseif (!preg_match($regexEmploymentCenter, $_POST['employmentCenter'])) {
            $messageErrors['employmentCenter'] = 'Attention ! Veuillez indiquer votre Identifiant Pôle emploi.';
        } else {
            $securedEmploymentCenter =  htmlspecialchars($_POST['employmentCenter']);
            $messageSuccess['employmentCenter'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['numberBadge'])) {

        if (empty($_POST['numberBadge'])) {
            $messageErrors['numberBadge'] = 'Veuillez remplir ce champ.';
        } elseif (!preg_match($regexBadge, $_POST['numberBadge'])) {
            $messageErrors['numberBadge'] = 'Attention ! Veuillez indiquer votre Nombre de badge.';
        } else {
            $securedBadge =  htmlspecialchars($_POST['numberBadge']);
            $messageSuccess['numberBadge'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['codeCademy'])) {

        $filterUrl = filter_var($_POST['codeCademy'], FILTER_VALIDATE_URL);
        if (empty($_POST['codeCademy'])) {
            $messageErrors['codeCademy'] = 'Veuillez remplir ce champ.';
        } elseif (!$filterUrl) {
            $messageErrors['codeCademy'] = 'Attention ! Veuillez indiquer un lien valide.';
        } else {
            $securedUrl =  htmlspecialchars($_POST['codeCademy']);
            $messageSuccess['codeCademy'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['hero'])) {

        if (empty($_POST['hero'])) {
            $messageErrors['hero'] = 'Veuillez remplir ce champ.';
        } elseif (!preg_match($regexText, $_POST['hero'])) {
            $messageErrors['hero'] = 'Attention ! Veuillez indiquer quel Héro êtes-vous.';
        } else {
            $securedHero =  htmlspecialchars($_POST['hero']);
            $messageSuccess['hero'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['why'])) {

        if (empty($_POST['why'])) {
            $messageErrors['why'] = 'Veuillez remplir ce champ.';
        } elseif (!preg_match($regexTextArea, $_POST['why'])) {
            $messageErrors['why'] = 'Attention ! Veuillez indiquer pourquoi avoir fait ce choix.';
        } else {
            $securedWhy =  htmlspecialchars($_POST['why']);
            $messageSuccess['why'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (!array_key_exists($_POST['hackTec'], $hackChoice)) {
        $messageErrors['hackTec'] = 'Veuillez sélectionner un ou plusieurs choix.';
    } else {
        $securedHackTeck =  htmlspecialchars($_POST['hackTec']);
        $messageSuccess['hackTec'] = '<i class="fas fa-check formValid"></i>';
    }

    if (!array_key_exists($_POST['hackInf'], $hackChoice)) {
        $messageErrors['hackInf'] = 'Veuillez sélectionner un ou plusieurs choix.';
    } else {
        $securedHackInf =  htmlspecialchars($_POST['hackInf']);
        $messageSuccess['hackInf'] = '<i class="fas fa-check formValid"></i>';
    }

    if (!array_key_exists($_POST['hackElse'], $hackChoice)) {
        $messageErrors['hackElse'] = 'Veuillez sélectionner un ou plusieurs choix.';
    } else {
        $securedHackElse =  htmlspecialchars($_POST['hackElse']);
        $messageSuccess['hackElse'] = '<i class="fas fa-check formValid"></i>';
    }

    if (isset($_POST['explanation'])) {

        if (empty($_POST['explanation'])) {
            $messageErrors['explanation'] = 'Veuillez remplir ce champ.';
        } elseif (!preg_match($regexTextArea, $_POST['explanation'])) {
            $messageErrors['explanation'] = 'Attention ! Veuillez indiquer votre explication.';
        } else {
            $securedExplanation =  htmlspecialchars($_POST['explanation']);
            $messageSuccess['explanation'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (!array_key_exists($_POST['validate'], $validedChoice)) {
        $messageErrors['validate'] = 'Veuillez sélectionner un ou plusieurs choix.';
    } else {
        $securedHack =  htmlspecialchars($_POST['validate']);
        $messageSuccess['validate'] = '<i class="fas fa-check formValid"></i>';
    }

    if (isset($messageErrors)) {
        
        if (count($messageErrors) == 0) {
            $securedLastname =  htmlspecialchars($_POST['lastname']);
            $securedFirstName =  htmlspecialchars($_POST['firstName']);
            $securedBirth =  htmlspecialchars($_POST['birth']);
            $securedCountry =  htmlspecialchars($_POST['country']);
            $securedNationality =  htmlspecialchars($_POST['nationality']);
            $securedAddress =  htmlspecialchars($_POST['address']);
            $securedEmail =  htmlspecialchars($_POST['email']);
            $securedTel =  htmlspecialchars($_POST['tel']);
            $securedDiploma =  htmlspecialchars($_POST['diploma']);
            $securedEmploymentCenter =  htmlspecialchars($_POST['employmentCenter']);
            $securedBadge =  htmlspecialchars($_POST['numberBadge']);
            $securedUrl =  htmlspecialchars($_POST['codeCademy']);
            $securedHero =  htmlspecialchars($_POST['hero']);
            $securedWhy =  htmlspecialchars($_POST['why']);
            $securedHackTeck =  htmlspecialchars($_POST['hackTec']);
            $securedHackInf =  htmlspecialchars($_POST['hackInf']);
            $securedHackElse =  htmlspecialchars($_POST['hackElse']);
            $securedExplanation =  htmlspecialchars($_POST['explanation']);
            $securedHack =  htmlspecialchars($_POST['validate']);
        }
    }
}
