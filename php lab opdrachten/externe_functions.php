<!DOCTYPE html>
<html lang="nl">
<head>
</head>
<?php
function korting(){
    $korting = 0;
    if( isset($_POST['student'])) $korting = $korting + 15;
    if( isset($_POST["klant"]) ) $korting = $korting + 10;
    return($korting);
}
function serviceKosten($betalingswijze){
    switch($_POST["betalingswijze"]){
        case "visa" :
            return"2.00";
            break;
        case "master" :
            return"2.50";
            break;
        case "pay" :
            return"1.50";
            break;
        case "id" :
            return"1.00";
            break;
    }
}
function facturering(){
    $betalingswijze = $_POST['betalingswijze'];
    $bedrag="0";
    echo "<br><hr /><h3>Factuur</h3>";
    echo "<table style=width:100%>
    <tr>
      <th>Genre</th>
      <th>Artiest</th> 
      <th>Album</th>
      <th>Aantal</th>
      <th>Prijs</th>
      <th>bedrag</th>
    </tr>";
    if(isset($_POST["aantal"][0])){
        if($_POST["aantal"][0]>"0"){
            $bedrag= $bedrag+($_POST["aantal"][0]*$_POST["prijs"][0]);
            echo "<tr>
            <td>".$_POST["genre"][0]."</td>
            <td>".$_POST["artiest"][0]."</td> 
            <td>".$_POST["album"][0]."</td>
            <td>".$_POST["aantal"][0]."</td>
            <td>".$_POST["prijs"][0]."</td>
            <td>".$_POST["aantal"][0]*$_POST["prijs"][0].".00</td>
          </tr>";
        }
    } 
    if(isset($_POST["aantal"][1])){
        if($_POST["aantal"][1]>"0"){
            $bedrag= $bedrag+($_POST["aantal"][1]*$_POST["prijs"][1]);
            echo "<tr>
            <td>".$_POST["genre"][1]."</td>
            <td>".$_POST["artiest"][1]."</td> 
            <td>".$_POST["album"][1]."</td>
            <td>".$_POST["aantal"][1]."</td>
            <td>".$_POST["prijs"][1]."</td>
            <td>".$_POST["aantal"][1]*$_POST["prijs"][1].".00</td>
          </tr>";
        }
    }
    if(isset($_POST["aantal"][2])){
        if($_POST["aantal"][2]>"0"){
            $bedrag= $bedrag+($_POST["aantal"][2]*$_POST["prijs"][2]);
            echo "<tr>
            <td>".$_POST["genre"][2]."</td>
            <td>".$_POST["artiest"][2]."</td> 
            <td>".$_POST["album"][2]."</td>
            <td>".$_POST["aantal"][2]."</td>
            <td>".$_POST["prijs"][2]."</td>
            <td>".$_POST["aantal"][2]*$_POST["prijs"][2].".00</td>
          </tr>";
        }
    }
    $Kort=round(korting()/100*$bedrag,2);
    $servicekosten=serviceKosten($betalingswijze);
    $totaal=$bedrag + $servicekosten;
    echo "<tr>
            <td>Totaal</td>
            <td></td> 
            <td></td>
            <td></td>
            <td></td>
            <td>".$bedrag.".00</td>
          </tr>
          <tr>
            <td>Korting</td>
            <td></td> 
            <td></td>
            <td></td>
            <td></td>
            <td>".$Kort."</td>
          </tr>
          <tr>
            <td>Servicekosten</td>
            <td></td> 
            <td></td>
            <td></td>
            <td></td>
            <td>".$servicekosten."</td>
          </tr>
          <tr>
            <td>Te betalen</td>
            <td></td> 
            <td></td>
            <td></td>
            <td></td>
            <td>".$totaal-$Kort."</td>
          </tr>";
    echo "</table>";
}
function premium() {
    foreach($_POST['aantal'] as $hoog) {
        if ($hoog>5){
            echo "Word lid van onze premium club<br>";
        }
    }
}
?>
<body>
</body>
</html>