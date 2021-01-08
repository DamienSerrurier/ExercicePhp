<?php
$firstDayInMonth = 7;
$nbDaysMonth = 31;
$week = [
    'Lundi',
    'Mardi',
    'Mercredi',
    'Jeudi',
    'Vendredi',
    'Samedi',
    'Dimanche'
]
?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <table class="table table-bordered text-center">
        <thead class="thead-dark">
            <?php foreach ($week as $day) { ?>
                <th><?= $day ?></th>
            <?php } ?>
        </thead>
        <tbody>
            <?php
            $case = 1;
            $day = 1;
            while ($day <= $nbDaysMonth) { ?>
                <tr>
                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                        <td class="<?= $case >= $firstDayInMonth && $day <= $nbDaysMonth ? '' : 'bg-secondary' ?>"><?= $case >= $firstDayInMonth && $day <= $nbDaysMonth ? $day++ : '' ?></td>
                    <?php
                        $case++;
                    } ?>
                </tr>
            <?php } ?>


        </tbody>
    </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>

</html>