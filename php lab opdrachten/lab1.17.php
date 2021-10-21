<!DOCTYPE html>
<html lang="nl">
<head>
    <title>lab1.17</title>
</head>
<body>
    <h3>Voorbeeld van de do-while-lus</h3>
<?php
    echo "<br>Reken het saldo uit zolang saldo lager dan 2000 is";
    $saldo = 100;
    $rente = 0.1;
    $maand = 1;
    echo "<br>Beginsaldo is: $saldo";
    echo "<br>START...";
    do{
        if($saldo > 2000){
            echo "<br>Maximale saldo 2000 is bereikt";
            break;
        }
        if($maand==2) {
            echo "<br>Februari betaalt geen rente";
        } elseif($maand==6 && $saldo < 1000){
            echo "<br>Je saldo is te laag";
            break;
        } else{
            $saldo = $saldo + ($saldo * $rente);
            $saldo = sprintf("%0.2f", $saldo);
            echo "<br>Maand: $maand je saldo is: $saldo";
        }
        $maand++;
    }
    while($saldo < 2000);
    echo "<br>FINISH";
?>
</body>
</html>