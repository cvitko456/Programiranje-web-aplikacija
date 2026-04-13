<?php
    $naslov = "PHP dokument - Vježba 8";
    $autor = "Josip Cvitković";

    $cars = array("Audi", "BMW", "Renault", "Citroen");
    $odabrano_vozilo="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["vozilo"])) {
            $odabrano_vozilo = $_POST["vozilo"];
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

    <p>Lista vozila:</p>
    <form method="POST" action="">
        <ul>
            <?php foreach ($cars as $car): ?>
                <li>
                    <input type="radio" name="vozilo" value="<?php echo $car; ?>" 
                        <?php echo ($odabrano_vozilo == $car) ? 'checked' : ''; ?>>
                    <?php echo $car; ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <input type="submit" value="Odaberi vozilo">
    </form>

    <?php if ($odabrano_vozilo): ?>
        <p><strong>Odabrano vozilo: <?php echo $odabrano_vozilo; ?></strong></p>
    <?php endif; ?>
</body>
</html>