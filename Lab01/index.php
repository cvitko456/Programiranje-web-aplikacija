<?php
    $naslov = "PHP - Labos 1";
    $ime = "Josip";
    $prezime = "Cvitkovic";
    $godina = "2005";

    $prvo_slovo_imena = substr($ime, 0, 1);
    $zadnje_dvije = substr($godina, -2);

    $korisnicko_ime = $prvo_slovo_imena . $prezime . "@" . $zadnje_dvije;
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
    <?php echo "Korisničko ime: " . $korisnicko_ime; ?>
</body>
</html>