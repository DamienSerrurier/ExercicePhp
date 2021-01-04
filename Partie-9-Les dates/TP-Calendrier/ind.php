<?php
class Date
{
    var $days = [
        'Lundi',
        'Mardi',
        'Mercredi',
        'Jeudi',
        'Vendredi',
        'Samedi',
        'Dimanche'
    ];

    var $months = [
        'Janvier',
        'Février',
        'Mars',
        'Avril',
        'Mai',
        'Juin',
        'Juillet',
        'Août',
        'Septembre',
        'Octobre',
        'Novembre',
        'Décembre'
    ];

    function getAll($year)
    {
        $r = array();
        /** 
         * Boucle version procédurale
         * 
        $date = strtotime($year . '-01-01');
        while (date('Y', $date) <= $year) {
            // Ce que je veux => $r[ANNEE] [MOIS] [JOUR] = JOUR DE LA SEMAINE
            $y = date('Y', $date);
            $m = date('n', $date);
            $d = date('j', $date);
            $w = str_replace('0', '7', date('w', $date));
            $r[$y][$m][$d] = $w;
            $date = strtotime(date('Y-m-d', $date) . '+ 1 DAY');
        }
         *
         *
         */
        $date = new DateTime($year . '-01-01');
        while ($date->format('Y') <= $year) {
            // On récupère => $r[ANNEE] [MOIS] [JOUR] = JOUR DE LA SEMAINE
            $y = $date->format('Y');
            $m = $date->format('n');
            $d = $date->format('j');
            $w = str_replace('0', '7', $date->format('w'));
            $r[$y][$m][$d] = $w;
            $date->add(new DateInterval('P1D'));
        }
        return $r;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>TP Calendrier</title>
</head>

<body>
    <p>Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.<br>
        En fonction des choix, afficher un calendrier comme celui ci :</p>
    <img src="https://icalendrier.fr/media/imprimer/2017/mensuel/calendrier-2017-mensuel-bigthumb.png" alt="Image pointant vers un calendrier">

    <?php
    $date = new Date();
    $year = date('Y');
    $arrayDates = $date->getAll($year);
    ?>
    <div class="periods">
        <div class="year"><?= $year ?></div>
        <div class="months">
            <ul>
                <?php foreach ($date->months as $id => $m) : ?>
                    <li><a href="#" id="linkMonth<?= $id + 1 ?>"></a><?= utf8_encode(substr(utf8_decode($m), 0, 3)) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
        <?php $arrayDates = current($arrayDates) ?>
        <?php foreach ($arrayDates as $m => $days) : ?>
            <div class="months" id="month<?= $m ?>">
                <table>
                    <thead>
                        <tr>
                            <?php foreach ($date->days as $d) : ?>
                                <th><?= substr($d, 0, 3) ?></th>
                            <?php endforeach ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $end = end($days);
                            foreach ($days as $d => $w) : ?>
                                <?php if ($d == 1 && $w != 1) : ?>
                                    <td colspan="<?= $w - 1 ?>"></td>
                                <?php endif ?>
                                <td>
                                    <div class="relative">
                                        <div class="day"><?= $d ?></div>
                                    </div>
                                </td>
                                <?php if ($w == 7) : ?>
                        </tr>
                        <tr>
                        <?php endif ?>
                    <?php endforeach ?>
                    <?php if ($end != 7) : ?>
                        <td colspan="<?= 7 - $end ?>"></td>
                    <?php endif ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php endforeach ?>

    </div>
    <pre><?= print_r($arrayDates) ?></pre>
</body>

</html>