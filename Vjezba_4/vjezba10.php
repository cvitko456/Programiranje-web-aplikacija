<?php
    $naslov = "PHP dokument - Vježba 10";
    $autor = "Josip Cvitković";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tekst = $_POST['tekst'];
        $broj_rijeci = str_word_count($tekst);
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
            margin: 20px;
        }
        h1, h2 {
            color: #333;
        }
        p {
            color: #666;
        }
    </style>
</head>

<body>
    <h1><?php echo $naslov; ?></h1>
    <p>Autor: <?php echo $autor; ?></p>
    <h2>Zadatak - <strong>str_word_count</strong></h2>

    <form method="POST">
        <label for="tekst">Ulazni niz:</label><br>
        <textarea id="tekst" name="tekst" rows="4" cols="50"><?php echo isset($_POST['tekst']) ? htmlspecialchars($_POST['tekst']) : ''; ?></textarea><br>
        <input type="submit" value="Ispiši broj riječi">
    </form>
    
    <?php if (isset($broj_rijeci)): ?>
        <p><strong>Broj riječi:</strong> <?php echo $broj_rijeci; ?></p>
    <?php endif; ?>
</body>
</html>