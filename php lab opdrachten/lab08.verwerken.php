<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>lab1.08</title>
</head>
<h2>Uw gegevens zijn:</h2>
<?php
    if(isset($_POST["submit"]) ){
        if(empty($_POST["Achternaam"]) ){
            echo "Achternaam niet ingevuld";
        }
        elseif(empty($_POST["Voornaam"]) ){
            echo "Voornaam niet ingevuld";
        }
        else{
            $Achternaam = $_POST["Achternaam"];
            $Voornaam = $_POST["Voornaam"];
            $Straat = $_POST["Straat"];
            $Postcode = $_POST["Postcode"];
            $Plaats = $_POST["Plaats"];
            $Email = $_POST["e-mail"];
            $Opleiding = $_POST["Opleiding"];
            echo "<h3>Achternaam: $Achternaam";
            echo "<br>Voornaam: $Voornaam";
            echo "<br>Straat: $Straat";
            echo "<br>Postcode: $Postcode";
            echo "<br>Plaats: $Plaats";
            echo "<br>E-mailadres: $Email";
            echo "<br><br>U wordt ingeschreven voor de volgende opleiding:<br>";
            if($Opleiding == "ICT") {
                echo "ICT" . "<br>ICT opleidingen zijn vol. Kies een andere opleiding</h3>";
            }
            elseif($Opleiding == "Eng") {
                echo "Engels</h3>";
            }
            elseif($Opleiding == "Tec") {
                echo "Techniek</h3>";
            }
            elseif($Opleiding == "Ned") {
                echo "Nederlands</h3>";
            }
        }
    }
?>
<body>
</body>
</html>