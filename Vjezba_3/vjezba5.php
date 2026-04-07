<?php
    $naslov = "PHP dokument - Vježba 5";
    $autor = "Josip Cvitković";

    $poruka = "";
    $uneseniBroj = "";
    $zamisljeniBroj = rand(1, 9);
    $prikaziRezultat = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $uneseniBroj = $_POST['broj'];
        $zamisljeniBroj = $_POST['zamisljeni'];
        $prikaziRezultat = true;
    
        if (is_numeric($uneseniBroj) && $uneseniBroj >= 1 && $uneseniBroj <= 9) {
            if ($uneseniBroj == $zamisljeniBroj) {
                $poruka = "Pogodak, probaj ponovo!";
            } else {
                $poruka = "Krivo, probaj ponovo!";
            }
        } else {
            $poruka = "Upiši jedan broj od 1 do 9*";
        }

        $zamisljeniBroj = rand(1, 9);
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
        .container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .poruka {
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        .uspjeh {
            background-color: #d4edda;
            color: #155724;
        }
        .neuspjeh {
            background-color: #f8d7da;
            color: #721c24;
        }
        input, button {
            padding: 8px;
            margin: 5px 0;
        }
        .rezultat {
            margin-top: 15px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
            color: #666;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1><?php echo $naslov; ?></h1>
    <p>Autor: <?php echo $autor; ?></p>

    <div class="container">
        <h2>Igra (pogodi broj)</h2>
        
        <form method="POST" action="">
            <p>Upiši jedan broj od 1 do 9*</p>
            <input type="number" name="broj" min="1" max="9" required>
            <input type="hidden" name="zamisljeni" value="<?php echo $zamisljeniBroj; ?>">
            <br>
            <button type="submit">Pogodi</button>
        </form>
        
        <?php if ($prikaziRezultat): ?>
            <div class="poruka <?php echo (strpos($poruka, 'Čestitamo') !== false) ? 'uspjeh' : 'neuspjeh'; ?>">
                <?php echo $poruka; ?>
            </div>
            <div class="rezultat">
                Zamišljeni broj je <?php echo $zamisljeniBroj; ?>
            </div>  
        <?php endif; ?>
    </div>
</body>
</html>

<!--Naziv datoteke: vjezba5.php-->