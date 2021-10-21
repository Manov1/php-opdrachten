<?php
$naamHTML = null;
$voornaamHTML = null;
$achternaamHTML = null;
$leeftijdHTML = null;
$leeftijd = null;
$gelukHTML = null;
if(isset($_POST["submit"])){
    $geluksnummer = mt_rand(10,100);
    if( isset($_POST["voornaam"]) ) $voornaamHTML= $_POST["voornaam"];
    if( isset($_POST["achternaam"]) ) $achternaamHTML = $_POST["achternaam"]. ",";
    if( isset($_POST["leeftijd"]) ) $leeftijd = $_POST["leeftijd"];
    $naamHTML= "<p>Hallo $voornaamHTML $achternaamHTML<br>";
    $leeftijdHTML = "Jij mag als $leeftijd jarige meedoen met het prijzenfestival.</p>";
    $gelukHTML = "<b>Jouw geluksnummer is $geluksnummer</b>";
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 3</title>
</head>
<body>
    <form name="formulier" action="" method="post">
    Voornaam
    <input type="text" name="voornaam">
    <br><br>
    Achternaam
    <input type="text" name="achternaam">
    <br><br>
    Leeftijd
    <input type="text" name="leeftijd">
    <br><br>
    <input type="submit" name="submit" value="Versturen">
    </form>
<?=$naamHTML?>
<?=$leeftijdHTML?>
<?=$gelukHTML?>
</body>
</html>