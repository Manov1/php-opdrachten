<?php
    $ronde1 = mt_rand(0,60);
    $ronde2 = mt_rand(0,60);
    $ronde3 = mt_rand(0,60);
    $rondetotaal = $ronde1 + $ronde2 + $ronde3;
    $gemiddeld = round($rondetotaal/3);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 2</title>
</head>
<body>
    <?php
    echo "<p><b>Ronde tijden</b><br>";
    echo "Eerste ronde ". $ronde1. " seconden<br>";
    echo "Tweede ronde ". $ronde2 . " seconden<br>";
    echo "Derde ronde ". $ronde3 . " seconden<br>";
    echo "Totale tijd over 3 ronden is ". $rondetotaal ." seconden<br>";
    echo "Het gemiddelde was ". $gemiddeld ." seconden</p>";
    ?>
</body>
</html>