<?php
    $naslov = "PHP dokument - Vježba 2-3";
    $autor = "Josip Cvitković";
    $opis = "Ova stranica nastavlja vježbu 2b i služi za uvježbavanje varijabli, ispisa i osnovnog CSS-a.";
    $linkInfo = "https://www.php.net/";
    $linkNatrag = "vjezba2-2.php";
    $godina = date("Y");

    $tema = isset($_GET['tema']) ? $_GET['tema'] : 'dark';
    $slika = isset($_GET['slika']) ? $_GET['slika'] : 'php';
    $prikaziOpis = isset($_GET['opis']);
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $naslov; ?></title>

    <style>
        :root {
            --bg-dark: #1a1a2e;
            --card-light: #ffffff;
            --text-dark: #16213e;
            --bg-light: #f8f9fa;
            --card-dark: #16213e;
            --text-light: #f8f9fa;
            --muted: #6c757d;
            --accent: #458fe9;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            transition: all 0.2s ease;
        }

        body.dark {
            background: var(--bg-dark);
            color: var(--text-light);
        }
        
        body.light {
            background: var(--bg-dark);
            color: var(--text-dark);
        }

        h1 {
            font-size: 2rem;
            margin-top: 0;
            margin-bottom: 16px;
            color: inherit;
        }

        .wrap{
            max-width: 720px;
            margin: 48px auto;
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        body.dark .wrap {
            background: var(--card-dark);
        }

        body.light .wrap {
            background: var(--card-light);
        }

        p {
            margin-bottom: 16px;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            background: transparent;
            border: 1px solid var(--accent);
            border-radius: 10px;
            text-decoration: none;
            color: var(--accent);
            font-weight: 500;
            transition: all 0.15s ease;
            margin-top: 8px;
            margin-bottom: 16px;
        }

        .btn:hover {
            background: var(--accent);
            color: #fff;
        }
        
        .btn:focus-visible {
            outline: 3px solid var(--accent);
            outline-offset: 2px;
        }
        
        .btn:active {
            opacity: 0.8;
        }

        .autor {
            color: var(--muted);
            font-size: 0.9rem;
            margin-bottom: 24px;
        }
        
        .slika-container {
            margin: 24px 0;
            text-align: center;
        }
        
        .slika-container img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .forma {
            background: rgba(0,0,0,0.03);
            padding: 24px;
            border-radius: 12px;
            margin: 24px 0;
        }
        
        .forma-group {
            margin-bottom: 20px;
        }
        
        .forma-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 8px;
        }
        
        .radio-group label {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-weight: normal;
            margin-bottom: 0;
        }
        
        select, input[type="checkbox"] {
            margin-left: 8px;
            padding: 6px 10px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        footer {
            font-size: 0.9rem;
            margin-top: 32px;
            padding-top: 16px;
            border-top: 1px solid rgba(0,0,0,0.1);
            color: var(--muted);
        }

        @media (max-width: 720px) {
            .wrap {
                margin: 24px 16px;
                padding: 24px;
            }
            
            h1 {
                font-size: 1.75rem;
            }
        }
    </style>
</head>

<body class="<?php echo $tema; ?>">

    <div class="wrap">
        <h1><?php echo $naslov; ?></h1>
        <p>Ovu stranicu izradio je <strong><?php echo $autor; ?></strong></p>

        <div class="slika-container">
            <img src="img/<?php echo $slika; ?>.png" alt="<?php echo $slika; ?> slika">
        </div>

        <?php if ($prikaziOpis): ?>
            <div class="opis-tekst">
                <p><?php echo $opis; ?></p>
            </div>
        <?php endif; ?>

        <div class="forma">
            <form method="GET" action="">
                <div class="forma-group">
                    <label>Odaberi temu:</label>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="tema" value="dark" <?php echo $tema == 'dark' ? 'checked' : ''; ?>> 
                            Tamna
                        </label>
                        <label>
                            <input type="radio" name="tema" value="light" <?php echo $tema == 'light' ? 'checked' : ''; ?>> 
                            Svijetla
                        </label>
                    </div>
                </div>
                
                <div class="forma-group">
                    <label for="slika">Odaberi sliku:</label>
                    <select name="slika" id="slika">
                        <option value="php" <?php echo $slika == 'php' ? 'selected' : ''; ?>>PHP</option>
                        <option value="server" <?php echo $slika == 'server' ? 'selected' : ''; ?>>Server</option>
                        <option value="code" <?php echo $slika == 'code' ? 'selected' : ''; ?>>Code</option>
                    </select>
                </div>
                
                <div class="forma-group">
                    <label>
                        <input type="checkbox" name="opis" value="1" <?php echo $prikaziOpis ? 'checked' : ''; ?>> 
                        Prikaži opis stranice
                    </label>
                </div>
                
                <div class="forma-group">
                    <button type="submit" class="btn">Primijeni odabir</button>
                    <button type="submit" class="btn"><a href="vjezba2-2.php">Natrag na vježbu 2-2</a></button>
                </div>
            </form>
        </div>
        
        <footer>
            &copy; <?php echo $godina; ?> - Demo za PHP
        </footer>
    </div>

</body>
</html>

<!--Naziv datoteke: vjezba3.php-->