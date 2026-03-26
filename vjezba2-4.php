<?php
    $naslov = "PHP dokument - Vježba 2-4";
    $autor = "Josip Cvitković";

    $rezultat = "";
    $a = "";
    $b = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];

        if (is_numeric($a) && is_numeric($b)) {
            $c = (3 * $a - $b) / 2;
            $rezultat = "c = " . $c;
        } else {
            $rezultat = "Nisu učitani brojevi.";
        }
    }
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $naslov; ?></title>
</head>
<body>
    <form method="POST" action="">
        <table>
            <tr>
                <td>Vrijednost a:</td>
                <td><input type="text" name="a" value="<?php echo $a; ?>"></td>
            </tr>
            <tr>
                <td>Vrijednost b:</td>
                <td><input type="text" name="b" value="<?php echo $b; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Pošalji"></td>
            </tr>
        </table>
    </form>
    
    <?php if ($rezultat): ?>
        <p><strong><?php echo $rezultat; ?></strong></p>
    <?php endif; ?>
</body>
</html>

<!--Naziv datoteke: vjezba4.php-->