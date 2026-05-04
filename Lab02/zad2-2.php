<?php
    $naslov = "PHP - Labos 2-2";
    $autor = "Josip Cvitković";
    $fontSize = "16px";

    function ispisiTablicu($red, $kol) {
        echo "<table border='1' style='margin: 20px; border-collapse: collapse;'>";
        for ($i = 1; $i <= $red; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $kol; $j++) {
                echo "<td style='width: 50px; height: 50px; text-align: center;'></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['red']) && isset($_POST['kol'])) {
            $red = (int)$_POST['red'];
            $kol = (int)$_POST['kol'];
            
            if ($red > 0 && $kol > 0) {
                ispisiTablicu($red, $kol);
            }
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
            background: #3b3a3e; 
            color: white; 
            border: none; 
            cursor: pointer; 
        }

        h1 {
            font-size: 2rem;
            margin-top: 0;
            margin-bottom: 16px;
            color: inherit;
        }
        p {
            font-size: <?php echo $fontSize; ?>;
        }
    </style>
</head>
<body>
    <h1><?php echo $naslov; ?></h1>
    <p>Autor: <?php echo $autor; ?></p>
        
    <form method="POST">
        <label>Unesite broj redaka:</label>
        <input type="number" name="red" required>
        <br>
        <label>Unesite broj kolona:</label>
        <input type="number" name="kol" required>
        <br>           

        <button type="submit">NAPRAVI TABLICU</button>
    
    </form>
</body>
</html>