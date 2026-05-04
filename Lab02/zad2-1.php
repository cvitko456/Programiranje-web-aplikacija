<?php
    $naslov = "PHP - Labos 2-1";
    $autor = "Josip Cvitković";
    $fontSize = "16px";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['promjenaBoje']) && isset($_POST['velicina'])) {
            $fontSize = $_POST['velicina'] . "px";
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
    <p>Trenutna veličina fonta: <?php echo $fontSize; ?></p>
        
    <form method="POST">
        <label>Upišite željenu veličinu slova:</label>
        <input type="number" name="velicina" required>
            
        <label>Potvrdite želite li promijeniti veličinu slova: </label>
        <input type="checkbox" name="promjenaBoje" id="promjenaBoje">
        <label for="promjenaBoje">Želim promijeniti veličinu</label><br>            
        <button type="submit">PROMJENI</button>
    </form>
</body>
</html>