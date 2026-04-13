<?php
    $naslov = "PHP - Labos 1-2";
    $autor = "Josip Cvitković";

    $ocjena_predmet1 = 4.5;
    $ocjena_predmet2 = 3.5;
    $ocjena_predmet3 = 2.0;
    $ocjena_predmet4 = 2.5;

    $prosjek = ($ocjena_predmet1 + $ocjena_predmet2 + $ocjena_predmet3 + $ocjena_predmet4) / 4;

    if ($prosjek < 1.5) {
        echo "Vaš prosjek je " . number_format($prosjek, 2) . " (nedovoljan)";
    } else {
        if ($prosjek < 2.5) {
            echo "Vaš prosjek je " . number_format($prosjek, 2) . " (dovoljan)";
        } else {
            if ($prosjek < 3.5) {
                echo "Vaš prosjek je " . number_format($prosjek, 2) . " (dobar)";
            } else {    
                if ($prosjek < 4.5) {
                    echo "Vaš prosjek je " . number_format($prosjek, 2) . " (vrlo dobar)";
                } else {
                    echo "Vaš prosjek je " . number_format($prosjek, 2) . " (odličan)";
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $naslov; ?></title>
</head>
<body>
    <h1><?php echo $naslov; ?></h1>
    <p>Autor: <?php echo $autor; ?></p>
</body>
</html>