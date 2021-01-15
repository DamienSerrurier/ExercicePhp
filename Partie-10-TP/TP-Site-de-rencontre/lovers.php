<?php

$user_datas = [
    0 => [
        'lastname' => 'Doe',
        'firstname' => 'John',
        'age' => 33,
        'gender' => 'Homme',
        'mail' => 'john.doe@gmail.com',
        'zipcode' => '80000',
        'picture' => 'homme_02.jpg',
        'description' => 'Rondouillard, j\'aime la course à pieds',
    ],
    1 => [
        'lastname' => 'Giraud',
        'firstname' => 'Marcel',
        'age' => '20',
        'gender' => 'Homme',
        'mail' => 'marcel.gigi@hotmail.fr',
        'zipcode' => '80500',
        'picture' => 'homme_03.jpg',
        'description' => 'Bonjour, je m\'appelle Marcel et j\'aime les tractopelles',
    ],
    2 => [
        'lastname' => 'Bond',
        'firstname' => 'James',
        'age' => '40',
        'gender' => 'Homme',
        'mail' => 'myname.isbond@gmail.com',
        'zipcode' => '60490',
        'picture' => 'homme_01.jpg',
        'description' => 'My name is bond.. James Bond !',
    ],
    3 => [
        'lastname' => 'Fleming',
        'firstname' => 'Max',
        'age' => '35',
        'gender' => 'Homme',
        'mail' => 'fleming.max@yahoo.fr',
        'zipcode' => '54500',
        'picture' => 'homme_04.jpg',
        'description' => 'J\'aime bien les courses de voiture',
    ],
    4 => [
        'lastname' => 'Moore',
        'firstname' => 'Roger',
        'age' => '50',
        'gender' => 'Homme',
        'mail' => 'roger-moore@sfr.fr',
        'zipcode' => '59000',
        'picture' => 'homme_05.jpg',
        'description' => 'Je suis un gros geek',
    ],
    5 => [
        'lastname' => '',
        'firstname' => 'Wolverine',
        'age' => '45',
        'gender' => 'Homme',
        'mail' => 'pierce.brosnan@gmail.com',
        'zipcode' => '59000',
        'picture' => 'homme_06.png',
        'description' => 'Je suis bodybuilder, je soulève 10kg au développer-coucher',
    ],
    6 => [
        'lastname' => 'Delacroix',
        'firstname' => 'Monique',
        'age' => '30',
        'gender' => 'Femme',
        'mail' => 'monique.delacroix@hotmail.fr',
        'zipcode' => '60400',
        'picture' => 'femme_01.jpg',
        'description' => 'Je suis très masculine, j\'aime tout diriger',
    ],
    7 => [
        'lastname' => 'Danielle',
        'firstname' => 'Corinne',
        'age' => '40',
        'gender' => 'Femme',
        'mail' => 'danielle.corinne@orange.fr',
        'zipcode' => '80000',
        'picture' => 'femme_02.jpg',
        'description' => 'Je suis un peu fleur-bleue',
    ],
    8 => [
        'lastname' => 'Silver',
        'firstname' => 'Anne',
        'age' => '20',
        'gender' => 'Femme',
        'mail' => 'silver-anne@gmail.com',
        'zipcode' => '80500',
        'picture' => 'femme_03.jpg',
        'description' => 'Ma passion est la pêche',
    ],
    9 => [
        'lastname' => 'Giroud',
        'firstname' => 'Clémentine',
        'age' => '36',
        'gender' => 'Femme',
        'mail' => 'clementine-giroud@gmail.com',
        'zipcode' => '25800',
        'picture' => 'femme_04.jpg',
        'description' => 'Mon fruit préféré est la clémentine',
    ],
    10 => [
        'lastname' => 'Bobil',
        'firstname' => 'Rose',
        'age' => '36',
        'gender' => 'Femme',
        'mail' => 'bobil.rose@hotmail.fr',
        'zipcode' => '58900',
        'picture' => 'femme_06.jpg',
        'description' => 'Je suis jockey mais j\'ai peur des chevaux',
    ],
    11 => [
        'lastname' => 'Manson',
        'firstname' => 'Jeanne',
        'age' => '50',
        'gender' => 'Femme',
        'mail' => 'manson.jeanne@orange.fr',
        'zipcode' => '30600',
        'picture' => 'femme_05.jpg',
        'description' => 'Je fais des massages thérapeutiques',
    ]
];

if (!isset($_COOKIE['user_genderSearch'])) {
    $displayGender = 'Vous n\'êtes pas encore inscrit !';
} else if ($_COOKIE['user_genderSearch'] === 'Homme') {
    $displayGender = 'Vous avez demandé à voir des hommes.';
} else {
    $displayGender = 'Vous avez demandé à voir des femmes.';
}

?>

<!doctype html>
<html lang="fr">

<head>
    <title>Dual Love</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
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
                        <div class="d-lg-none m-0 mx-auto">
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

            <h1 class="text-center textBlack bg-light p-2 col-sm-8 col-lg-12 col-md-12 mb-4"><?= $displayGender ?></h1>
            <div class="container-fluid row justify-content-center m-0">

                <?php
                if (isset($_COOKIE['user_genderSearch'])) {
                    if ($_COOKIE['user_genderSearch'] === 'Homme') {
                        foreach ($user_datas as $key => $value) {
                            if ($value['gender'] === 'Homme') {
                ?>
                                <div class="card m-1" style="width: 18rem;">
                                    <img src="assets/img/<?= $value['picture'] ?>" class="card-img-top imgSize" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $value['firstname'] . ' ' . $value['lastname'] ?></h5>
                                        <p class="card-text">Âge : <?= $value['age'] ?><br> Code postal : <?= $value['zipcode'] ?></p>
                                        <p class="text-card"><?= $value['description'] ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <i class="btn corazon p-0 likeBtn"></i>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    }

                    if ($_COOKIE['user_genderSearch'] === 'Femme') {
                        foreach ($user_datas as $key => $value) {
                            if ($value['gender'] === 'Femme') {
                            ?>

                                <div class="card m-1" style="width: 18rem;">
                                    <img src="assets/img/<?= $value['picture'] ?>" class="card-img-top imgSize" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $value['firstname'] . ' ' . $value['lastname'] ?></h5>
                                        <p class="card-text">Âge : <?= $value['age'] ?><br> Code postal : <?= $value['zipcode'] ?></p>
                                        <p class="text-card"><?= $value['description'] ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <i class="btn corazon p-0 likeBtn"></i>
                                    </div>
                                </div>
                <?php
                            }
                        }
                    }
                }
                ?>
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


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d89aa1e4ce.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/script.js"></script>
</body>

</html>