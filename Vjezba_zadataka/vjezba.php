<?php
session_start();

$naslov="Vježba 12";
$autor="Josip Cvitković";
$opis="Ovo je web stranica za vježbu 12 iz gradiva PHP-a.";

//zadatak 1
if(!isset($_SESSION['broj'])){
    $_SESSION['broj']=rand(1,9);
}

$poruka="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $_SESSION['broj']=rand(1,9);
    $uneseni=$_POST['broj'];

    if(is_numeric($uneseni) && $uneseni>=1 && $uneseni<=9){
        if($uneseni==$_SESSION['broj']){
            $poruka="Čestitamo, pogodili ste broj!";
            
        } else {
            $poruka="Nažalost, niste pogodili broj. Pokušajte ponovo!";
        }
    } else {
        $poruka="Molimo unesite broj između 1 i 9.";
    }
}

//zadatak 2
$prvi="";
$drugi="";
$operacija="";
$rez="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $prvi=$_POST['prvi'];
    $drugi=$_POST['drugi'];
    $operacija=$_POST['operacija'];

    if(is_numeric($prvi) && is_numeric($drugi)){
        switch($operacija){
    case "+":
        $rez=$prvi+$drugi;
        break;
    case "-":
        $rez=$prvi-$drugi;
        break;
    case "*":
        $rez=$prvi*$drugi;
        break;
    case "/":
        if($drugi!=0){
            $rez=$prvi/$drugi;
        } else {
            $rez="Dijeljenje s nulom nije dozvoljeno.";
        }
        break;
}
    } else {
        $rez="Nisu učitani brojevi.";
    }
}

//zadatak 3
$ocjena1="";
$ocjena2="";
$prosjek="";
$konacna="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ocjena1=$_POST['ocjena1'];
    $ocjena2=$_POST['ocjena2'];

    if(is_numeric($ocjena1) && is_numeric($ocjena2)){
        if($ocjena1==1 || $ocjena2==1){
        $konacna="1";
        $prosjek=($ocjena1+$ocjena2) / 2;
        }
        else{
            $prosjek=($ocjena1+$ocjena2) / 2;
            if ($prosjek >= 4.5) $konacna = "5";
            elseif ($prosjek >= 3.5) $konacna = "4";
            elseif ($prosjek >= 2.5) $konacna = "3";
            elseif ($prosjek >= 2) $konacna = "2";
            else $konacna = "1";
        }
    }
    else{
        $konacna="Unesite brojeve";
    }
}


//zadatak 4
$ime="Josip";
$prezime="Cvitković";
$godina_rodjenja="2005";

$prvo_slovo_imena=substr($ime, 0, 1);
$zadnje_dvije_znamenke=substr($godina_rodjenja,2,2);
$korisnicki_racun=$prvo_slovo_imena . $prezime . "@" . $zadnje_dvije_znamenke;


//zadatak 5
$post_br = array("Zagreb"=>10000, "Split"=>5000, "Rijeka"=>3000, "Osijek"=>2000);
echo "Poštanski brojevi gradova:
<ul><li>Zagreb: " . $post_br["Zagreb"] . "</li>"
. "<li>Split: " . $post_br["Split"] . "</li>"
. "<li>Rijeka: " . $post_br["Rijeka"] . "</li>"
. "<li>Osijek: " . $post_br["Osijek"] . "</li>"
. "</ul>";
foreach($post_br as $naziv => $broj){
    echo "<p>$broj $naziv</p>";
}


//zadatak 6
$cars=array("Audi","BMW","Renault","Citroen");
$odabrano_vozilo="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (isset($_POST["vozilo"])) {
            $odabrano_vozilo = $_POST["vozilo"];
        }
}

//zadatak 7
function add($x,$y){
    $total=$x+$y;
    return "$x + $y = $total";
}
echo add(1,16);

?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $naslov; ?></title>
    <meta name="description" content="<?php echo $opis; ?>">
    <meta name="author" content="<?php echo $autor; ?>">

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
    </style>
</head>
<body>
    <h1><?php echo $naslov; ?></h1>
    <p>Autor: <?php echo $autor; ?></p>
    <p><?php echo $opis; ?></p>

    <form action="" method="post">
        <label for="broj">Upiši jedan broj od 1 do 9:</label>
        <input type="number" name="broj" min="1" max="9" required>
        <br><br>
        <button type="submit">Pošalji</button>
    </form>

    <?php if ($poruka): ?>
            <p><strong><?php echo $poruka; ?></strong></p>
            <p>Zamišljeni broj je <?php echo $_SESSION['broj']; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="prvi">Upiši prvi broj *</label>
        <input type="number" name="prvi" step="any" required value="<?php echo $prvi; ?>">
        <label for="drugi">Upiši drugi broj *</label>
        <input type="number" name="drugi" step="any" required value="<?php echo $drugi; ?>">

        <div class="btn-group">
            <button type="submit" name="operacija" value="+">+</button>
            <button type="submit" name="operacija" value="-">-</button>
            <button type="submit" name="operacija" value="*">*</button>
            <button type="submit" name="operacija" value="/">/</button>
        </div>
        
    </form>

    <?php if($rez!==""): ?>
        <strong>Rezultat: </strong> <?php echo $rez; ?>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="ocjena1">Upiši ocjenu 1:</label>
        <input type="number" name="ocjena1" min="1" max="5" required>
        <label for="ocjena2">Upiši ocjenu 2:</label>
        <input type="number" name="ocjena2" min="1" max="5" required>
        <button type="submit">Izračunaj prosjek</button>
    </form>
    
    <?php if($konacna): ?>
        <em>Prosjek: <?php echo $prosjek; ?></em><br>
        <strong>Konačna ocjena: <?php echo $konacna; ?></strong>
    <?php endif; ?>

    <?php echo $korisnicki_racun ?>

    <p>Označi vozilo</p>
    <form action="" method="POST">
        <ul>
            <?php foreach($cars as $car): ?>
            <li>
                <input type="radio" name="vozilo" value="<?php echo $car ?>">
                <?php echo $car; ?>
            </li>
        <?php endforeach; ?>
        </ul>
        <input type="submit" value="POŠALJI">
    </form>

    <?php if ($odabrano_vozilo): ?>
        <p><strong>Odabrano vozilo: <?php echo $odabrano_vozilo; ?></strong></p>
    <?php endif; ?>

</body>
</html>