<?php
    $naslov = "PHP dokument - Vježba 9";
    $autor = "Josip Cvitković";

    function ducan($stanje="otvoren") {
        echo "Dućan je $stanje.";
    }

    date_default_timezone_set('Europe/Zagreb');
    $dan = date('N');
    $sat = date('G');

    if($dan == 7){
        ducan("zatvoren");
    } elseif ($dan == 6) {
        if ($sat >= 9 && $sat < 14) {
            ducan("otvoren");
        } else {
            ducan("zatvoren");
        }
    } else {
        if ($sat >= 8 && $sat < 20) {
            ducan("otvoren");
        } else {
            ducan("zatvoren");
        }
    }
    echo "<br><br>";
    echo "Trenutno vrijeme: " . date('H:i') . "<br>";
    echo "Danas je: " . date('l') . "<br><br>";
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