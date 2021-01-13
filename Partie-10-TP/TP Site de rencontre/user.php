<?php

if (isset($_POST['clearCookies'])) {
    if (!empty($_COOKIE)) {
        setcookie('user_lastName', '', time() + 1, null, null, false, true);
        setcookie('user_firstName', '', time() + 1, null, null, false, true);
        setcookie('user_age', '', time() + 1, null, null, false, true);
        setcookie('user_gender', '', time() + 1, null, null, false, true);
        setcookie('user_zipCode', '', time() + 1, null, null, false, true);
        setcookie('user_mail', '', time() + 1, null, null, false, true);
        setcookie('user_genderSearch', '', time() + 1, null, null, false, true);

        header("Location: index.php");
    }
}

?>

<!doctype html>
<html lang="fr">

<head>
    <title>Dual Love - Vos informations</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <div class="wrapper">
        <div id="bodySize">
            <div class="container-fluid col-12 p-0">
                <div id="home" class="navbarColor text-center py-2">
                    <nav class="navbar navbar-expand-lg navbar-dark p-2">
                        <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="d-lg-none m-0">
                            <h1 class="text-white mx-5"><i class="fas fa-hand-holding-heart"></i> <span class="titleColorPink">Dual </span><span class="titleColorBlue">Love</span></h1>
                        </div>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav">
                                <li>
                                    <div class="d-none d-lg-block">
                                        <h1 class="text-white mx-5"><i class="fas fa-hand-holding-heart"></i> <span class="titleColorPink">Dual </span><span class="titleColorBlue">Love</span></h1>
                                    </div>
                                </li>
                                <li class="my-auto">
                                    <a class="navbar-brand text-uppercase text-white mx-5">
                                        <?= isset($_COOKIE['user_firstName']) ? 'Bonjour ' . $_COOKIE['user_firstName'] . ' <i class="fas fa-heart text-danger"></i>' : 'Bonjour <i class="fas fa-heart text-danger"></i>' ?>
                                    </a>
                                </li>
                                <li class="my-auto">
                                    <a class="navbar-brand text-uppercase text-white mx-5" href="lovers.php">Nos célibataires</a>
                                </li>
                                <li class="my-auto">
                                    <a class="navbar-brand text-uppercase text-white mx-5" href="user.php">Inscription</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <h5 class="modal-title text-white font-weight-bold" id="exampleModalLabel">Suppression des Cookies</h5>
                        </div>
                        <div class="modal-body bg-white textBlack border-0">
                            Voulez-vous vraiment supprimer vos cookies ?
                        </div>
                        <div class="modal-footer bg-white border-0">
                            <button type="button" class="btn cancelBtn text-white" data-dismiss="modal">Annuler</button>
                            <form action="user.php" enctype="multipart/form-data" method="post">
                                <input class="btn sendBtn" name="clearCookies" type="submit" value="Effacer tout">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="text-center textBlack bg-light p-2 col-sm-8 col-lg-12 col-md-12 mb-4">Vos informations</h1>

            <div class="mt-4 col-xl-4 col-sm-7 mx-auto bgColor">
                <ul class="userInfosList">
                    <li class="mb-2"><span class="font-weight-bold">Nom : </span><?= isset($_COOKIE['user_lastName']) ? $_COOKIE['user_lastName'] : '' ?></li>
                    <li class="mb-2"><span class="font-weight-bold">Prénom : </span><?= isset($_COOKIE['user_firstName']) ? $_COOKIE['user_firstName'] : '' ?></li>
                    <li class="mb-2"><span class="font-weight-bold">Âge : </span><?= isset($_COOKIE['user_age']) ? $_COOKIE['user_age'] : '' ?></li>
                    <li class="mb-2"><span class="font-weight-bold">Genre : </span><?= isset($_COOKIE['user_gender']) ? $_COOKIE['user_gender'] : '' ?></li>
                    <li class="mb-2"><span class="font-weight-bold">Code postal : </span><?= isset($_COOKIE['user_zipCode']) ? $_COOKIE['user_zipCode'] : '' ?></li>
                    <li class="mb-2"><span class="font-weight-bold">Adresse mail : </span><?= isset($_COOKIE['user_mail']) ? $_COOKIE['user_mail'] : '' ?></li>
                    <li><span class="font-weight-bold">Recherche : </span><?= isset($_COOKIE['user_genderSearch']) ? $_COOKIE['user_genderSearch'] : '' ?></li>
                </ul>
                <div class="d-flex text-center justify-content-center">
                    <button type="button" class="btn mx-2 mb-3 sendBtn text-white" data-toggle="modal" data-target="#exampleModal">Effacer tout</button>
                    <a class="btn mx-2 mb-3 sendBtn text-white" target=”_blank href="https://www.meetic.fr/" type="submit">Take my money</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center mt-4 align-items-end">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h5 class="text-uppercase">Cupidon frappe à votre porte !</h5>
                    <p>
                        Trouvez chaussure à votre pieds avec Dual Love !
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center text-white p-3 navbarColor h5 m-0">
            <a class="text-dark" href="https://mdbootstrap.com/">
                <p class="text-white h2"><i class="fas fa-hand-holding-heart"></i> <span class="titleColorPink">Dual </span><span class="titleColorBlue">Love</span></p>
            </a>
            © 2021 Copyright
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d89aa1e4ce.js" crossorigin="anonymous"></script>
</body>

</html>