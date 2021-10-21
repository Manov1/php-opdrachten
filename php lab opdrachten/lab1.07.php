<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>lab1.07</title>
</head>
<h3>php lab 1.7</h3>
<body>
<?php
    $boeken = array (
        array("titel"=> "Stoner", "auteur" => "John Williams",
            "genre" => "Fictie", "prijs" => 19.99 ),
        array("titel"=> "De cirkel", "auteur" => "Dave Eggers",
            "genre" => "Fictie", "prijs" => 22.50 ),
        array("titel"=> "Rayuela", "auteur" => "Julio Cortazar",
            "genre" => "Fictie", "prijs" => 25.50 )
    );
    function prijsLijst($item, $key) {
        if ($key=="0") {
            $lastItem=array_pop($item);
            echo "<p>prijs: $lastItem" . "<br>";
        } elseif ($key=="1") {
            $lastItem=array_pop($item);
            echo "prijs: $lastItem" . "<br>";
        } elseif ($key=="2") {
            $lastItem=array_pop($item);
            echo "prijs: $lastItem" . "</P>";
        } 
    }
    array_walk($boeken, "prijsLijst");
?>
</body>
</html>