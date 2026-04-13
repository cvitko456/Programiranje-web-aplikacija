<?php
    $naslov = "PHP dokument - Vježba 6";
    $autor = "Josip Cvitković";

    $ocjene = [1 => "", 2 => ""];
    $prosjek = "";
    $konacna = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ocjene[1] = $_POST['kol1'];
        $ocjene[2] = $_POST['kol2'];

        if (is_numeric($ocjene[1]) && is_numeric($ocjene[2])) {
            $o1 = $ocjene[1];
            $o2 = $ocjene[2];

            if (($o1 >= 1 && $o1 <= 5) && ($o2 >= 1 && $o2 <= 5)) {
                if ($o1 < 2 || $o2 < 2) {
                    $konacna = "1";
                } else {
                    $prosjek = ($o1 + $o2) / 2;
                    if ($prosjek >= 4.5) $konacna = "5";
                    elseif ($prosjek >= 3.5) $konacna = "4";
                    elseif ($prosjek >= 2.5) $konacna = "3";
                    elseif ($prosjek >= 2) $konacna = "2";
                    else $konacna = "1";
                }
            } else {
                $konacna = "Ocjena mora biti 1-5";
            }
        } else {
            $konacna = "Unesite brojeve";
        }
    }
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $naslov; ?></title>
    <style>
        body { 
            font-family: Arial; 
            margin: 50px; 
        }

        input, button { 
            width: 100%; 
            padding: 8px; 
            margin: 5px 0; 
        }
        button { 
            background: #007bff; 
            color: white; 
            border: none; 
            cursor: pointer; 
        }
        .rezultat { 
            margin-top: 15px; 
            padding: 10px; 
            background: #ddd; 
            border-radius: 5px; 
        }
    </style>
</head>
<body>
    <h1><?php echo $naslov; ?></h1>
    <p>Autor: <?php echo $autor; ?></p>
        
    <form method="POST">
        <label>Ocjena I. kolokvija (1-5):</label>
        <input type="number" name="kol1" min="1" max="5" required>
            
        <label>Ocjena II. kolokvija (1-5):</label>
        <input type="number" name="kol2" min="1" max="5" required>
            
        <button type="submit">Izračunaj</button>
    </form>
        
    <?php if ($konacna): ?>
        <div class="rezultat">
            <em>Prosjek: <?php echo $prosjek; ?></em><br>
            <strong>Konačna ocjena: <?php echo $konacna; ?></strong>
        </div>
    <?php endif; ?>
</body>
</html>