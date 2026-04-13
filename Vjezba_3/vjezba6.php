<?php
    $naslov = "PHP dokument - Vježba 6";
    $autor = "Josip Cvitković";

    $rez = "";
    $a = "";
    $b = "";
    $operacija = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $operacija= $_POST['operacija'];

        if (is_numeric($a) && is_numeric($b)){
            switch ($operacija) {
                case '+':
                    $rez = $a + $b;
                    break;
                case '-':
                    $rez = $a - $b;
                    break;
                case '*':
                    $rez = $a * $b;
                    break;
                case '/':
                    if ($b != 0) {
                        $rez = $a / $b;
                    } else {
                        $rez = "Dijeljenje s nulom nije dozvoljeno.";
                    }
                    break;
            }
        } else {
            $rez = "Nisu učitani brojevi.";
        }
    }
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $naslov; ?></title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #f0f0f0;
        }
        input, button {
            padding: 10px;
            margin: 5px 0;
            font-size: 16px;
        }
        .btn-group {
            display: flex;
            gap: 10px;
            margin: 15px 0;
        }
        .btn-group button {
            flex: 1;
            cursor: pointer;
            background-color: #889eb6;
            color: black;
            border: none;
            border-radius: 5px;
            font-size: 18px;
        }
        .rezultat {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1><?php echo $naslov; ?></h1>
    <p>Autor: <?php echo $autor; ?></p>

    <h2>Kalkulator (Switch naredba)</h2>
        
    <form method="POST" action="">
        <label>Upiši prvi broj *</label>
        <input type="number" name="a" step="any" required value="<?php echo $a; ?>">
            
        <label>Upiši drugi broj *</label>
        <input type="number" name="b" step="any" required value="<?php echo $b; ?>">
            
        <div class="btn-group">
            <button type="submit" name="operacija" value="+">+</button>
            <button type="submit" name="operacija" value="-">-</button>
            <button type="submit" name="operacija" value="*">*</button>
            <button type="submit" name="operacija" value="/">/</button>
        </div>
    </form>
        
    <?php if ($rez !== ""): ?>
        <div class="rezultat">
            <strong>Rezultat:</strong> <?php echo $rez; ?>
        </div>
    <?php endif; ?>
</body>
</html>

<!--Naziv datoteke: vjezba6.php-->