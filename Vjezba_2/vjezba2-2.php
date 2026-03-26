<?php
    $naslov = "PHP dokument - Vježba 2-2";
    $autor = "Josip Cvitković";
    $opis = "Ova stranica nastavlja vježbu 2-1 i služi za uvježbavanje varijabli, ispisa i osnovnog CSS-a.";
    $linkInfo = "https://www.php.net/";
    $linkNatrag = "vjezba2-1.php";
    $godina = date("Y");
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $naslov; ?></title>

    <style>
        :root {
            --bg: #1a1a2e;
            --card: #ffffff;
            --text: #16213e;
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
            background: var(--bg);
            color: var(--text);
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            font-size: 16px;
            line-height: 1.6;
        }
        h1 {
            font-size: 2rem;
            margin-top: 0;
            margin-bottom: 16px;
            color: var(--text);
        }

        .wrap{
            max-width: 720px;
            margin: 48px auto;
            background: var(--card);
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
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
<body>
    <div class="wrap">
        <h1><?php echo $naslov; ?></h1>
        <p>Ovu stranicu izradio je <strong><?php echo $autor; ?></strong></p>
        <p><?php echo $opis; ?></p>
        <a href="<?php echo $linkInfo; ?>" target="_blank" class="btn">Saznaj više o PHP-u</a>
        <a href="<?php echo $linkNatrag; ?>" class="btn">Natrag na vježbu 2-1</a>
        
        <footer>&copy; <?php echo $godina; ?> - Demo za PHP</footer>
    </div>

</body>
</html>

<!--Naziv datoteke: vjezba2b.php-->