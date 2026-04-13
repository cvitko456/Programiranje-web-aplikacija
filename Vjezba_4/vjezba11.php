<?php
    $naslov = "PHP dokument - Vježba 11";
    $autor = "Josip Cvitković";
    echo $naslov . "<br>";
    echo $autor . "<br><br>";

    function jeProst ($broj){
        if ($broj <= 1) return false;
        for ($i = 2; $i <= sqrt($broj); $i++) {
            if ($broj % $i == 0) return false;
        }
        return true;
    }

    for($i = 1; $i <= 100; $i++){
        if(jeProst($i)){
            echo $i . " ";
        }
    }
?>