<?php
$naamHTML = null;
$voornaamHTML = null;
$achternaamHTML = null;
$leeftijdHTML = null;
$leeftijd = null;
$aantal = null;
if(isset($_POST["submit"])){
    if( isset($_POST["voornaam"]) ) $voornaamHTML= $_POST["voornaam"];
    if( isset($_POST["achternaam"]) ) $achternaamHTML = $_POST["achternaam"]. ",";
    if( isset($_POST["leeftijd"]) ) $leeftijd = $_POST["leeftijd"];
    $aantal = 18-$leeftijd;
    $naamHTML= "<p>Hallo $voornaamHTML $achternaamHTML<br>";
    $naam = "$voornaamHTML $achternaamHTML";
    if($_POST["leeftijd"]<0){
        $leeftijdHTML = "foutmelding: leeftijd moet groter of gelijk zijn aan 0</p>";
    } elseif($_POST["leeftijd"]<18){
    $leeftijdHTML = "Over $aantal jaar is $naam volwassen.</p>";
    } elseif($_POST["leeftijd"]>21){
        $leeftijdHTML = "$naam is nu eigenlijk pas echt volwassen!</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 4</title>
</head>
<body>
<form name="formulier" action="" method="post">
    Voornaam
    <input required type="text" name="voornaam">
    <br><br>
    Achternaam
    <input required type="text" name="achternaam">
    <br><br>
    Leeftijd
    <input required type="text" name="leeftijd">
    <br><br>
    <input type="submit" name="submit" value="Versturen">
    </form>
<?=$naamHTML?>
<?=$leeftijdHTML?>
</body>
</html>